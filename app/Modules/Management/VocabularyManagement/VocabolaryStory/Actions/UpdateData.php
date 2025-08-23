<?php

namespace App\Modules\Management\VocabularyManagement\VocabolaryStory\Actions;

use Illuminate\Support\Facades\DB;

class UpdateData
{
    static $model = \App\Modules\Management\VocabularyManagement\VocabolaryStory\Models\Model::class;

    public static function execute($request, $slug)
    {
        $transStarted = false;

        try {
            if (!$data = self::$model::query()->where('slug', $slug)->first()) {
                return messageResponse('Data not found...', $data, 404, 'error');
            }
            
            $requestData = $request->validated();
            // Normalize words: accept JSON string or comma separated string
            $words = json_decode($request->words);
            // Image upload (replace if provided)
            if ($request->hasFile('image')) {
                $requestData['image'] = uploader($request->file('image'), 'uploads/story');
            }
            // Multiple story images
            $storyImages = $request->file('story_image', []);
            $uploadedStoryImages = $data->story_image;
            foreach ((array) $storyImages as $img) {
                if ($img) {
                    $uploadedStoryImages[] = uploader($img, 'uploads/story');
                }
            }
            if (!empty($uploadedStoryImages)) {
                $requestData['story_image'] = $uploadedStoryImages;
            }
            // Update inside transaction and sync relationships
            $transStarted = true;
            $data->update($requestData);
            // Sync words (replace existing relations). If you prefer attach-only, change to attach.
            $data->words()->sync($words);
            return messageResponse('Item updated successfully', $data, 200);
        } catch (\Exception $e) {
            if ($transStarted) {
                try {
                    DB::rollBack();
                } catch (\Throwable $_) {
                }
            }
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
