<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Categories extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'categories';

    protected $fillable = [
       'Title',
        'Slug',
        'metaDescription',
        'Description',
        'popular',
    ];

    public function causes()
    {
        return $this->hasMany(Causes::class, 'catId', 'id');
    }
    public function faqs()
    {
        return $this->hasMany(Faq::class, 'catId','id');
    }
    public function apeals()
    {
        return $this->hasMany(Apeal::class, 'catId', 'id');
    }
    public function blogposts()
    {
        return $this->hasMany(Blog::class, 'catId', 'id');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('iconthumb')
            ->width(114)
            ->height(114);
              $this->addMediaConversion('bigthumb')
            ->width(932)
            ->height(532);
    }

    public function volunteer()
    {
        return $this->hasMany(VolunteerRequest::class, 'catId', 'id');
    }
}
