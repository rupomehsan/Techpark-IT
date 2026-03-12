<?php

namespace App\Modules\Management\VocabularyManagement\Vocabulary\Actions;

class GetAllData
{
    static $model = \App\Modules\Management\VocabularyManagement\Vocabulary\Models\Model::class;

    public static function execute()
    {
        try {

            $pageLimit = request()->input('limit') ?? 10;
            $orderByColumn = request()->input('sort_by_col') ?? 'id';
            $orderByType = request()->input('sort_type') ?? 'desc';
            $status = request()->input('status') ?? 'active';
            $fields = request()->input('fields') ?? '*';
            $start_date = request()->input('start_date');
            $end_date = request()->input('end_date');
            
            // Batch parameters for vocabulary listing with large datasets
            $batchSize = request()->input('batch_size') ?? 100;
            $batchNumber = request()->input('batch_number') ?? 1;
            $getBatchInfo = request()->input('get_batch_info', false);
            
            // Sorting and filtering parameters
            $alphabetFilter = request()->input('alphabet_filter'); // A, B, C, etc.
            $sortOrder = request()->input('sort_order', 'asc'); // asc or desc

            $with = [];

            $condition = [];

            $data = self::$model::query();

            // Accept either `search` or `q` as the query parameter.
            // Support `direction` to limit search to english->bangla (e2b) or bangla->english (b2e)
            $searchKey = request()->input('search') ?? request()->input('q');
            $direction = request()->input('direction'); // expected values: 'e2b' or 'b2e'
            
            // Apply alphabet filter if provided
            if ($alphabetFilter && strlen($alphabetFilter) === 1) {
                $data = $data->where(function ($q) use ($alphabetFilter) {
                    $q->where('word', 'like', $alphabetFilter . '%')
                      ->orWhere('label', 'like', $alphabetFilter . '%');
                });
            }

            if ($searchKey) {
                $data = $data->where(function ($q) use ($searchKey, $direction) {
                    $like = '%' . $searchKey . '%';

                    // If direction is set to b2e, prioritize Bangla columns
                    if ($direction === 'b2e') {
                        // try common Bangla fields first - adjust field names if your model differs
                        $q->where('meaning', 'like', $like);
                        $q->orWhere('label', 'like', $like);
                        $q->orWhere('example_sentence', 'like', $like);
                        $q->orWhere('synonyms', 'like', $like);
                        $q->orWhere('antonyms', 'like', $like);
                        $q->orWhere('keyword', 'like', $like);
                    } else {
                        // default: e2b or unspecified - search English/main fields
                        $q->where('word', 'like', $like);
                        $q->orWhere('label', 'like', $like);
                        $q->orWhere('meaning', 'like', $like);
                        $q->orWhere('part_of_speech', 'like', $like);
                        $q->orWhere('example_sentence', 'like', $like);
                        $q->orWhere('synonyms', 'like', $like);
                        $q->orWhere('antonyms', 'like', $like);
                        $q->orWhere('keyword', 'like', $like);
                    }
                });
            }

            if ($start_date && $end_date) {
                if ($end_date > $start_date) {
                    $data->whereBetween('created_at', [$start_date . ' 00:00:00', $end_date . ' 23:59:59']);
                } elseif ($end_date == $start_date) {
                    $data->whereDate('created_at', $start_date);
                }
            }

            if ($status == 'trased') {
                $data = $data->trased();
            }

            if (request()->has('get_all') && (int)request()->input('get_all') === 1) {
                $data = $data
                    ->with($with)
                    ->select($fields)
                    ->where($condition)
                    ->where('status', $status)
                    ->limit($pageLimit)
                    ->orderBy('word', $sortOrder) // Use word column for alphabetical sorting
                    ->get();
                return entityResponse($data);
            } else if ($getBatchInfo) {
                // Return batch information for vocabulary selection
                $baseQuery = self::$model::query();
                
                // Apply same filters for accurate count
                if ($alphabetFilter && strlen($alphabetFilter) === 1) {
                    $baseQuery = $baseQuery->where(function ($q) use ($alphabetFilter) {
                        $q->where('word', 'like', $alphabetFilter . '%')
                          ->orWhere('label', 'like', $alphabetFilter . '%');
                    });
                }
                
                $totalCount = $baseQuery->where($condition)->where('status', $status)->count();
                $totalBatches = ceil($totalCount / $batchSize);
                
                return entityResponse([
                    'total_count' => $totalCount,
                    'batch_size' => $batchSize,
                    'total_batches' => $totalBatches,
                    'current_batch' => $batchNumber,
                    'alphabet_filter' => $alphabetFilter,
                    'sort_order' => $sortOrder,
                    'batches' => array_map(function($i) use ($batchSize, $totalCount) {
                        $start = ($i - 1) * $batchSize + 1;
                        $end = min($i * $batchSize, $totalCount);
                        return [
                            'batch_number' => $i,
                            'label' => "{$start}-{$end}",
                            'start' => $start,
                            'end' => $end,
                            'count' => $end - $start + 1
                        ];
                    }, range(1, $totalBatches))
                ]);
            } else if (request()->has('batch_number') && $batchNumber > 0) {
                // Return specific batch of vocabulary
                $offset = ($batchNumber - 1) * $batchSize;
                $data = $data
                    ->with($with)
                    ->select($fields)
                    ->where($condition)
                    ->where('status', $status)
                    ->orderBy('word', $sortOrder) // Use word column for consistent alphabetical sorting
                    ->offset($offset)
                    ->limit($batchSize)
                    ->get();
                    
                // Calculate total count with same filters applied
                $totalCountQuery = self::$model::query();
                if ($alphabetFilter && strlen($alphabetFilter) === 1) {
                    $totalCountQuery = $totalCountQuery->where(function ($q) use ($alphabetFilter) {
                        $q->where('word', 'like', $alphabetFilter . '%')
                          ->orWhere('label', 'like', $alphabetFilter . '%');
                    });
                }
                $totalCount = $totalCountQuery->where($condition)->where('status', $status)->count();
                
                return entityResponse([
                    'data' => $data,
                    'batch_info' => [
                        'current_batch' => $batchNumber,
                        'batch_size' => $batchSize,
                        'total_count' => $totalCount,
                        'total_batches' => ceil($totalCount / $batchSize),
                        'start_index' => $offset + 1,
                        'end_index' => min($offset + $batchSize, $totalCount),
                        'alphabet_filter' => $alphabetFilter,
                        'sort_order' => $sortOrder
                    ]
                ]);
            } else if ($status == 'trased') {
                $data = $data
                    ->with($with)
                    ->select($fields)
                    ->where($condition)
                    ->orderBy($orderByColumn, $orderByType)
                    ->paginate($pageLimit);
            } else {
                $data = $data
                    ->with($with)
                    ->select($fields)
                    ->where($condition)
                    ->where('status', $status)
                    ->orderBy($orderByColumn, $orderByType)
                    ->paginate($pageLimit);
            }

            return entityResponse([
                ...$data->toArray(),
                "active_data_count" => self::$model::active()->count(),
                "inactive_data_count" => self::$model::inactive()->count(),
                "trased_data_count" => self::$model::trased()->count(),
            ]);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
