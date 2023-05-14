<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Event extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table='events';

    protected $guarded = [];
    public function causes()
    {
        return $this->belongsTo(Causes::class, 'cId', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'EId', 'id');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->width(696)
            ->height(456);
        $this->addMediaConversion('bigthumb')
        ->width(932)
            ->height(532);
            

        
    }
}
