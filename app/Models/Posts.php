<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Posts extends Model
{
    protected $fillable = [
        'titre',
        'post',
        'message'
    ];

    public function user()
    {

        return $this->belongsTo(User::class);
    }
}