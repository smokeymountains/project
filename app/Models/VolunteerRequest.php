<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerRequest extends Model
{
    use HasFactory;

    protected $table = 'volunteer_requests';

    protected $fillable= [
        'catId',
        'name',
        'email',
        'message',
        'contact',
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'catId', 'id');
    }
}
