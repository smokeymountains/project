<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Categories;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table = 'blog';
    protected $fillable = [
        'catId',
        'Title',
        'Author',
        'metaDescr',
        'Descr',
        'postdate',
        'posttime',
        'keyword',
        'trending',
        'relatedTo',
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'catId', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'bId', 'id');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(697)
            ->height(500);
        $this->addMediaConversion('tinythumb')
            ->width(80)
            ->height(80);
        $this->addMediaConversion('bigthumb')
        ->width(932)
            ->height(532);
            
    }
}
