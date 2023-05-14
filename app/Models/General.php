<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class General extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = '_general';
    protected $fillable = [
        'phone',
        'email',
        'insta',
        'face',
        'twitter',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->width(1920)
            ->height(450);
    }
}
