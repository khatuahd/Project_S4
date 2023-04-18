<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizzes';
    protected $fillable = ['id','description', 'sujet','type'];
    public function questions()
    {
        return $this->hasMany(questions::class);
    }

    // public function results()
    // {
    //     return $this->hasMany(Result::class);
    // }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }

    // public function isEditable()
    // {
    //     // return true or false based on some condition
    // }
}

