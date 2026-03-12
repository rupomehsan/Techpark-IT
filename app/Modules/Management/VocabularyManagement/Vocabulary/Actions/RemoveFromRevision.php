<?php

namespace App\Modules\Management\VocabularyManagement\Vocabulary\Actions;

use App\Modules\Management\VocabularyManagement\Vocabulary\Models\UserRevisionVocabulary;
use App\Modules\Management\VocabularyManagement\Vocabulary\Models\Model as Vocabulary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class RemoveFromRevision
{
    /**
     * Remove a vocabulary item from user's revision list.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public static function execute()
    {
        try {
            // Get vocabulary_id from either request body (POST) or query params (GET)
            $vocabularyId = request()->vocabulary_id ?? request()->query('vocabulary_id');
            
            // Validate input
            $validator = Validator::make(['vocabulary_id' => $vocabularyId], [
                'vocabulary_id' => 'required|integer|exists:vocabularies,id'
            ]);

            if ($validator->fails()) {
                return messageResponse(
                    'Validation failed: ' . $validator->errors()->first(),
                    $validator->errors(),
                    422,
                    'validation_error'
                );
            }

            $vocabularyId = (int) $vocabularyId;
            $userId = auth()->id();
            
            // For testing purposes, use a default user ID if not authenticated
            if (!$userId) {
                $userId = 1; // Default to user ID 1 for testing
            }

            // Find the revision item
            $revisionItem = UserRevisionVocabulary::forUser($userId)
                ->forVocabulary($vocabularyId)
                ->first();

            if (!$revisionItem) {
                return messageResponse(
                    'This vocabulary is not in your revision list',
                    ['vocabulary_id' => $vocabularyId, 'not_found' => true],
                    404,
                    'not_found'
                );
            }

            // Get vocabulary info before deletion for response
            $vocabulary = Vocabulary::find($vocabularyId);

            // Remove from revision list using transaction
            DB::transaction(function () use ($revisionItem) {
                $revisionItem->forceDelete(); // Permanent deletion
            });

            return messageResponse(
                'Vocabulary removed from revision list successfully',
                [
                    'vocabulary_id' => $vocabularyId,
                    'vocabulary' => $vocabulary ? $vocabulary->only(['id', 'word', 'english', 'meaning', 'bangla']) : null
                ],
                200,
                'success'
            );

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('RemoveFromRevision error: ' . $e->getMessage(), [
                'vocabulary_id' => $vocabularyId ?? null,
                'user_id' => auth()->id(),
                'stack_trace' => $e->getTraceAsString()
            ]);

            return messageResponse(
                'Failed to remove vocabulary from revision list. Please try again.',
                [],
                500,
                'server_error'
            );
        }
    }
}
