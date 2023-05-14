<?php

namespace App\Models;

use App\Models\Comment;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Causes extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    public $fillable = [
        'catId',
        'Title',
        'MetaDescr',
        'Description',
        'slug',
        'causeGoal',
        'availableAmount',
        'status',
        'popular',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'catId', 'id');
    }
    public function events()
    {
        return $this->hasMany(Event::class, 'cId', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'cId', 'id');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(697)
            ->height(500);

        $this->addMediaConversion('bigthumb')
            ->width(932)
            ->height(532);
    }
}
