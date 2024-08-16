<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $table = 'subscribers';

    protected $fillable = [ 'name', 'email', 'token' ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_subscribers', 'subscriber_id', 'post_id');
    }
}
