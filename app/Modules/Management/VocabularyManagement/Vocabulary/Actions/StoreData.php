<?php

namespace App\Modules\Management\VocabularyManagement\Vocabulary\Actions;

class StoreData
{
    static $model = \App\Modules\Management\VocabularyManagement\Vocabulary\Models\Model::class;

    public static function execute($request)
    {
        try {

            $requestData = $request->validated();

            // determine part(s) of speech for the given word
            // $requestData['part_of_speech'] =  self::findPartsOfSpeech($requestData['word']);

        

            if ($data = self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', $data, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }

    /**
     * Heuristic helper to guess possible parts of speech for a single word.
     * Returns a comma-separated string (e.g. "noun,verb").
     * This is a lightweight fallback; for better accuracy integrate a
     * dictionary/WordNet API or a morphological analyzer.
     *
     * @param string|null $word
     * @return string
     */
    private static function findPartsOfSpeech($word)
    {
        if (empty($word) || !is_string($word)) {
            return '';
        }

        $w = strtolower($word);
        $tags = [];

        // common adverb ending
        if (str_ends_with($w, 'ly')) {
            $tags[] = 'adverb';
        }

        // gerund/past forms -> likely verb
        if (preg_match('/(ing|ed)$/', $w)) {
            $tags[] = 'verb';
        }

        // typical noun endings
        if (preg_match('/(tion|sion|ment|ness|ity|ance|ence|hood|ship|ism)$/', $w)) {
            $tags[] = 'noun';
        }

        // typical adjective endings
        if (preg_match('/(able|ible|al|ful|less|ous|ive|ic|ish|ary)$/', $w)) {
            $tags[] = 'adjective';
        }

        // short words often nouns or verbs (fallback)
        if (empty($tags)) {
            // common single-word heuristics
            // if word is capitalized in input it's often a noun (proper noun)
            if (mb_strlen($word) > 0 && $word[0] === strtoupper($word[0]) && strtolower($word) !== $word) {
                $tags[] = 'noun';
            } else {
                // be conservative: report multiple possibilities
                $tags = ['noun', 'verb', 'adjective', 'adverb'];
            }
        }

        // unique and stable ordering
        $tags = array_values(array_unique($tags));

        return implode(',', $tags);
    }
}