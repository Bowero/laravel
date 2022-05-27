<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImagePath()
    {
        if (!$this->image) {
            return 'images/placeholder.jpg';
        }
        return str_replace('public/', '', $this->image);
    }
}
