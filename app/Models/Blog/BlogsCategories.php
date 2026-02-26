<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsCategories extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blogs()
    {
        return $this->belongsToMany(Blogs::class, 'blogs_blogs_categories', 'blogs_categories_id', 'blogs_id');
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }
}
