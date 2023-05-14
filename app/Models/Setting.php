<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = '_setting';
    protected $fillable = [
        'descr',
        'title',
    ];
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->width(1920)
            ->height(900);

        $this->addMediaConversion('bigthumb')
        ->width(1920)
            ->height(450);
    }
}
