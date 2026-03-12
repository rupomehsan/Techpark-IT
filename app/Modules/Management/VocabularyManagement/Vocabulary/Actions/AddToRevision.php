<?php

namespace App\Modules\Management\VocabularyManagement\Vocabulary\Actions;

use App\Modules\Management\VocabularyManagement\Vocabulary\Models\UserRevisionVocabulary;
use App\Modules\Management\VocabularyManagement\Vocabulary\Models\Model as Vocabulary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class AddToRevision
{
    /**
     * Add a vocabulary item to user's revision list.
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

            // Check if vocabulary exists and is active
            $vocabulary = Vocabulary::active()->find($vocabularyId);
            if (!$vocabulary) {
                return messageResponse(
                    'Vocabulary not found or inactive',
                    [],
                    404,
                    'not_found'
                );
            }

            // Check if already in revision list
            if (UserRevisionVocabulary::existsForUser($vocabularyId, $userId)) {
                return messageResponse(
                    'This vocabulary is already in your revision list',
                    ['vocabulary_id' => $vocabularyId, 'already_exists' => true],
                    409,
                    'already_exists'
                );
            }

            // Add to revision list using transaction for data integrity
            $revisionItem = DB::transaction(function () use ($vocabularyId, $userId) {
                return UserRevisionVocabulary::create([
                    'vocabulary_id' => $vocabularyId,
                    'user_id' => $userId,
                ]);
            });

            return messageResponse(
                'Vocabulary added to revision list successfully',
                [
                    'revision_item' => $revisionItem,
                    'vocabulary' => $vocabulary->only(['id', 'word', 'english', 'meaning', 'bangla'])
                ],
                201,
                'success'
            );

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('AddToRevision error: ' . $e->getMessage(), [
                'vocabulary_id' => $vocabularyId ?? null,
                'user_id' => auth()->id(),
                'stack_trace' => $e->getTraceAsString()
            ]);

            return messageResponse(
                'Failed to add vocabulary to revision list. Please try again.',
                [],
                500,
                'server_error'
            );
        }
    }
}
