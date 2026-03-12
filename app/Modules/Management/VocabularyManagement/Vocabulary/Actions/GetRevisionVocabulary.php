<?php

namespace App\Modules\Management\VocabularyManagement\Vocabulary\Actions;

use App\Modules\Management\VocabularyManagement\Vocabulary\Models\Model as Vocabulary;

class GetRevisionVocabulary
{
    static $model = \App\Modules\Management\VocabularyManagement\Vocabulary\Models\Model::class;

    public static function execute()
    {
        try {

            $userId = auth()->id();

            $data = Vocabulary::with('stories')->whereHas('userRevisionVocabularies', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->get();

            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
