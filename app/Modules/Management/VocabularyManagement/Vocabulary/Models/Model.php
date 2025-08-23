<?php

namespace App\Modules\Management\VocabularyManagement\Vocabulary\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends EloquentModel
{
    use SoftDeletes;
    protected $table = "vocabularies";
    protected $guarded = [];
    protected $casts = [
        'example_sentence' => 'array',
        'antonyms' => 'array',
        'synonyms' => 'array',
        'keyword' => 'array'
    ];
    protected static function booted()
    {
        static::created(function ($data) {
            $random_no = random_int(100, 999) . $data->id . random_int(100, 999);
            $slug = $data->title . " " . $random_no;
            $data->slug = Str::slug($slug); //use Illuminate\Support\Str;
            if (strlen($data->slug) > 50) {
                $data->slug = substr($data->slug, strlen($data->slug) - 50, strlen($data->slug));
            }
            if (auth()->check()) {
                $data->creator = auth()->user()->id;
            }
            $data->save();
        });
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }

    public function scopeInactive($q)
    {
        return $q->where('status', 'inactive');
    }
    public function scopeTrased($q)
    {
        return $q->onlyTrashed();
    }
    
    public function story()
    {
       
    }
    
    /**
     * Stories that include this vocabulary word.
     * Uses pivot table `vocabolary_story_words` with columns `word_id` and `vocabolary_story_id`.
     */
    public function stories()
    {
        return $this->belongsToMany(
            \App\Modules\Management\VocabularyManagement\VocabolaryStory\Models\Model::class,
            'vocabolary_story_words',
            'word_id',
            'vocabolary_story_id'
        );
    }
}
