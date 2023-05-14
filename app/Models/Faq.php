<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    protected $fillable = [
        'question',
        'answer',
        'status',
        'email',
        'phone',
        'catId',
        'name'
    ];
    public function categories()
    {
        return $this->belongsTo(Categories::class, 'catId','id');
    }
}
