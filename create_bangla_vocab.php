<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Modules\Management\VocabularyManagement\Vocabulary\Models\Model as Vocabulary;

$banglaWords = [
    [
        'word' => 'আপেল', 
        'pronunciation' => 'apel',
        'language' => 'bangla',
        'label' => 'basic',
        'meaning' => 'একটি মিষ্টি ফল যা লাল বা সবুজ রঙের হয়',
        'part_of_speech' => 'noun',
        'example_sentence' => '["আমি একটি আপেল খেলাম।", "আপেল স্বাস্থ্যের জন্য ভালো।"]',
        'synonyms' => '["ফল", "আপল"]',
        'antonyms' => '[]',
        'keyword' => '["ফল", "খাবার", "স্বাস্থ্যকর"]',
        'status' => 'active',
        'bangla_word' => 'আপেল',
        'english_meaning' => 'A sweet fruit that is typically red or green',
        'bangla_meaning' => 'একটি মিষ্টি ফল যা লাল বা সবুজ রঙের হয়'
    ],
    [
        'word' => 'বই', 
        'pronunciation' => 'boi',
        'language' => 'bangla',
        'label' => 'basic',
        'meaning' => 'লেখা বা ছাপা পাতা একসাথে বাঁধানো',
        'part_of_speech' => 'noun',
        'example_sentence' => '["আমি একটি বই পড়ছি।", "এই বইটি খুব ভালো।"]',
        'synonyms' => '["গ্রন্থ", "কিতাব", "পুস্তক"]',
        'antonyms' => '[]',
        'keyword' => '["পড়া", "শিক্ষা", "জ্ঞান"]',
        'status' => 'active',
        'bangla_word' => 'বই',
        'english_meaning' => 'A set of written or printed pages bound together',
        'bangla_meaning' => 'লেখা বা ছাপা পাতা একসাথে বাঁধানো'
    ],
    [
        'word' => 'সুন্দর', 
        'pronunciation' => 'sundor',
        'language' => 'bangla',
        'label' => 'medium',
        'meaning' => 'দেখতে ভালো, আকর্ষণীয়',
        'part_of_speech' => 'adjective',
        'example_sentence' => '["এটি একটি সুন্দর ফুল।", "তার সুন্দর গলার আওয়াজ।"]',
        'synonyms' => '["ভালো", "সুশ্রী", "মনোহর"]',
        'antonyms' => '["কুৎসিত", "বিশ্রী"]',
        'keyword' => '["সৌন্দর্য", "আকর্ষণীয়", "চমৎকার"]',
        'status' => 'active',
        'bangla_word' => 'সুন্দর',
        'english_meaning' => 'Beautiful, attractive to look at',
        'bangla_meaning' => 'দেখতে ভালো, আকর্ষণীয়'
    ]
];

// Also update existing English words with Bangla meanings
$englishUpdates = [
    [
        'word' => 'Hello',
        'bangla_meaning' => 'হ্যালো, নমস্কার - একটি অভিবাদন',
        'bangla_word' => 'নমস্কার'
    ],
    [
        'word' => 'Beautiful',
        'bangla_meaning' => 'সুন্দর, আকর্ষণীয়',
        'bangla_word' => 'সুন্দর'
    ],
    [
        'word' => 'House',
        'bangla_meaning' => 'ঘর, বাড়ি - মানুষের বাসস্থান',
        'bangla_word' => 'বাড়ি'
    ],
    [
        'word' => 'Excellent',
        'bangla_meaning' => 'চমৎকার, অসাধারণ',
        'bangla_word' => 'চমৎকার'
    ]
];

foreach ($banglaWords as $word) {
    try {
        Vocabulary::updateOrCreate(['word' => $word['word']], $word);
        echo "Created/Updated Bangla word: " . $word['word'] . "\n";
    } catch (Exception $e) {
        echo "Error creating " . $word['word'] . ": " . $e->getMessage() . "\n";
    }
}

foreach ($englishUpdates as $update) {
    try {
        $existing = Vocabulary::where('word', $update['word'])->first();
        if ($existing) {
            $existing->update([
                'bangla_meaning' => $update['bangla_meaning'],
                'bangla_word' => $update['bangla_word']
            ]);
            echo "Updated English word with Bangla: " . $update['word'] . "\n";
        }
    } catch (Exception $e) {
        echo "Error updating " . $update['word'] . ": " . $e->getMessage() . "\n";
    }
}

echo "Bilingual vocabulary data created successfully!\n";
