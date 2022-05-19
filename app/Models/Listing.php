<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'logo',
        'tags',
        'company',
        'location',
        'email',
        'website',
        'description',
        'user_id'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
