<?php

namespace App\Modules\Management\VocabularyManagement\Vocabulary\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserRevisionVocabulary extends Model
{
    use SoftDeletes;

    protected $table = 'user_revision_vocabularies';
    
    protected $fillable = [
        'vocabulary_id',
        'user_id',
    ];

    protected $casts = [
        'vocabulary_id' => 'integer',
        'user_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the vocabulary that belongs to this revision.
     */
    public function vocabulary(): BelongsTo
    {
        return $this->belongsTo(Model::class, 'vocabulary_id');
    }

    /**
     * Get the user that owns this revision.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * Scope to filter by user.
     */
    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    /**
     * Scope to filter by vocabulary.
     */
    public function scopeForVocabulary($query, $vocabularyId)
    {
        return $query->where('vocabulary_id', $vocabularyId);
    }

    /**
     * Check if a vocabulary is already in user's revision list.
     */
    public static function existsForUser($vocabularyId, $userId): bool
    {
        return static::forUser($userId)
            ->forVocabulary($vocabularyId)
            ->exists();
    }
}