<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cover_id',
        'status',
        'title',
        'author',
        'publish_date',
        'description',
        'published_at',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genres');
    }

    public function cover() {
        return $this->hasOne(Cover::class);
    }
}
