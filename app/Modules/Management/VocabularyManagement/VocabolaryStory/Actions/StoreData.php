<?php

namespace App\Modules\Management\VocabularyManagement\VocabolaryStory\Actions;

class StoreData
{
    static $model = \App\Modules\Management\VocabularyManagement\VocabolaryStory\Models\Model::class;

    public static function execute($request)
    {
        try {

            $requestData = $request->validated();

            $words = json_decode($request->words);


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $requestData['image'] = uploader($image, 'uploads/story');
            }

            $storyImages = $request->file('story_image', []);
            $uploadedStoryImages = [];
            foreach ((array) $storyImages as $img) {
                if ($img) {
                    $uploadedStoryImages[] = uploader($img, 'uploads/story');
                }
            }
            if (!empty($uploadedStoryImages)) {
                $requestData['story_image'] = $uploadedStoryImages;
            }

            if ($data = self::$model::query()->create($requestData)) {
                if (!empty($words)) {
                    $data->words()->attach($words);
                }
                return messageResponse('Item added successfully', $data, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
