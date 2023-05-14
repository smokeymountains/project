<?php

namespace App\Models;

use App\Models\Comment;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apeal extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table = 'apeals';

    protected $fillable = [
        'Title',
        'Slug',
        'meta',
        'descr',
        'status',
        'visible',
        'catId',
        'date',

    ];


    public function category()
    {
        return $this->belongsTo(Categories::class, 'catId', 'id');
    }
    public function pdfs()
    {
        return $this->hasMany(pdfs::class, 'ApId', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'ApId', 'id');
    }
}
