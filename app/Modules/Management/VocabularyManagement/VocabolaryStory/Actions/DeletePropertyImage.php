<?php

namespace App\Modules\Management\VocabularyManagement\VocabolaryStory\Actions;

class DeletePropertyImage
{
    static $model = \App\Modules\Management\VocabularyManagement\VocabolaryStory\Models\Model::class;

    public static function execute($slug)
    {
        try {
            // Accept 'data' as query string or request body, robust parsing like other modules
            $raw = request()->input('data', null);



            $requestData = null;
            if (is_string($raw) && $raw !== '') {
                $try = json_decode(urldecode($raw));
                if (json_last_error() === JSON_ERROR_NONE) {
                    $requestData = $try;
                } else {
                    $try2 = json_decode($raw);
                    if (json_last_error() === JSON_ERROR_NONE) {
                        $requestData = $try2;
                    }
                }
            } elseif (is_object($raw) || is_array($raw)) {
                $requestData = is_array($raw) ? (object) $raw : $raw;
            } else {
                // Fallback to individual params
                $requestData = (object) [
                    'field' => request()->input('field'),
                    'index' => request()->input('index'),
                ];
            }



            if (!$data = self::$model::where('slug', $slug)->first()) {

                return messageResponse('Data not found...', $data, 404, 'error');
            }

   

            $fields = ['story_image', 'image'];


            if (
                isset($requestData->field, $requestData->index) &&
                in_array($requestData->field, $fields)
            ) {
                $field = $requestData->field;
                $index = $requestData->index;

                // Get current value (could be array for multiple images or string/null for single image)
                $images = $data->$field ?? [];



                // If an index was provided, delete that specific item
                if (!is_null($index) && is_array($images) && isset($images[$index])) {
                    $imagePath = $images[$index];

                    // Delete file if it exists
                    if (!empty($imagePath) && file_exists(public_path($imagePath))) {
                        unlink(public_path($imagePath));
                    }

                    // Remove image and re-index
                    unset($images[$index]);
                    $images = array_values($images);

                    // Save back to model
                    $data->$field = $images;
                    $data->save();

                    // If index is null, delete whole field: for arrays remove all images, for single string remove single image
                }
            } else {
                $field = $requestData->field;
                $data->$field = null;
                $data->save();
            }

            // Return success message
            return messageResponse('Item Successfully deleted', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
