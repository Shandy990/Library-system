<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'cover_id',
        'status',
        'title',
        'author',
        'publish_date',
        'description',
        'published_at',
        'user_id',
        'returned_at'
    ];

    protected $casts = [
        'publish_date' => 'datetime',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genres');
    }

    public function cover() {
        return $this->hasOne(Cover::class);
    }
}
