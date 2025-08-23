<?php

namespace App\Modules\Management\VocabularyManagement\Vocabulary\Validations;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class DataStoreValidation extends FormRequest
{
    /**
     * Determine if the  is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * validateError to make this request.
     */
    public function validateError($data)
    {
        $errorPayload =  $data->getMessages();
        return response(['status' => 'validation_error', 'errors' => $errorPayload], 422);
    }

    protected function failedValidation(Validator $validator)
    {
    // Return a JSON-friendly validation response for API requests.
    $response = $this->validateError($validator->errors());
    throw new HttpResponseException($response);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // Determine id/slug to ignore for unique check when updating.
        // Try common route parameter names: 'id', 'vocabulary', or 'slug'.
        $ignoreId = $this->route('id') ?? $this->route('vocabulary') ?? $this->route('slug');


        // If route provides a model instance (implicit binding) extract id.
        if (is_object($ignoreId) && property_exists($ignoreId, 'id')) {
            $ignoreId = $ignoreId->id;
        }

        // If a slug route param is present, attempt to load the existing record once.
        $existingRecord = null;
        try {
            $modelClass = \App\Modules\Management\VocabularyManagement\Vocabulary\Models\Model::class;
            $slugParam = $this->route('slug');
            if (!is_null($slugParam)) {
                $existingRecord = $modelClass::where('slug', $slugParam)->first();
                if ($existingRecord) {
                    $ignoreId = $existingRecord->id;
                }
            } elseif (!is_null($ignoreId) && ctype_digit((string) $ignoreId)) {
                $existingRecord = $modelClass::find($ignoreId);
            }
        } catch (\Throwable $e) {
            $existingRecord = null;
        }

        // Consider this an update if we have a slug/id route param or the HTTP method indicates update.
        $isUpdate = !is_null($this->route('slug')) || in_array($this->method(), ['PUT', 'PATCH']) || !is_null($ignoreId);

        // On create: fields are required. On update: they are optional when not present (sometimes).
        $requiredOnCreate = $isUpdate ? 'sometimes' : 'required';

        // Build unique rule for 'word' only when needed. We'll ignore the existing record by id.
        $uniqueWordRule = Rule::unique('vocabularies', 'word');
        // Only apply unique check if the incoming 'word' is present (and different from existing).
        $incomingWordRaw = $this->input('word');
        $incomingWord = is_null($incomingWordRaw) ? null : mb_strtolower(trim($incomingWordRaw));
        if ($existingRecord) {
            $existingWord = isset($existingRecord->word) ? mb_strtolower(trim((string) $existingRecord->word)) : null;
            if (!is_null($incomingWord) && $existingWord === $incomingWord) {
                // Word unchanged: skip unique rule.
                $uniqueWordRule = null;
            } else {
                $uniqueWordRule = $uniqueWordRule->ignore($existingRecord->id, 'id');
            }
        } else {
            // No existing record: unique rule stands as-is (it will run on create or when 'sometimes' present on update).
            // If the route provided a non-numeric slug that wasn't resolved, we don't try to ignore by slug here.
        }

        return [
            'word' => array_filter([
                $requiredOnCreate,
                $uniqueWordRule,
            ]),
            'pronunciation' => ['sometimes'],
            'language' => [$requiredOnCreate],
            'label' => [$requiredOnCreate],
            'meaning' => [$requiredOnCreate],
            'part_of_speech' => ['sometimes'],
            'example_sentence' => ['sometimes'],
            'synonyms' => ['sometimes'],
            'antonyms' => ['sometimes'],
            'keyword' => ['sometimes'],
            'status' => ['sometimes', Rule::in(['active', 'inactive'])],
        ];
    }
}
