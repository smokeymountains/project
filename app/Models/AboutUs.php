<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AboutUs extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'descr1',
        'descr2'
    ];
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->width(360)
            ->height(505);
        $this->addMediaConversion('bigthumb')
        ->width(400)
            ->height(549);
        $this->addMediaConversion('bigthumb')
        ->width(400)
            ->height(529);
    }
}
