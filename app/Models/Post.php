<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [ 'title', 'content', 'user_id', 'category_id', 'image', 'meta_title', 'meta_description', 'meta_keywords', 'status', 'published_at', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault('Admin');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
