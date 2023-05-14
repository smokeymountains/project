<?php

namespace App\Models;

use App\Models\Blog;
use App\Models\Apeal;
use App\Models\Event;
use App\Models\Causes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $fillable = [
        'name',
        'email',
        'comment',
        'cId',
        'bId',
        'ApId',
        'EId',
    ];
    public function causes()
    {
        return $this->belongsTo(Causes::class, 'cId', 'id');
    }
    public function apeals()
    {
        return $this->belongsTo(Apeal::class, 'ApId', 'id');
    }
    public function blogs()
    {
        return $this->belongsTo(Blog::class, 'bId', 'id');
    }
    public function events()
    {
        return $this->belongsTo(Event::class, 'EId', 'id');
    }
}

