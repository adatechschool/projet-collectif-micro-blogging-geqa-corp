<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Posts extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'title',
        'content'
=======
   protected $fillable = [
        'titre',
        'post',
        'message'
>>>>>>> 5afc39dd61304f8c5800756bbe73187d2125b590
    ];


    // protected $fillable = [
    //     'titre',
    //     'text',
    //     'message'
    // ];

    // public function user()
    // {

    //     return $this->belongsTo(User::class);
    // }
}