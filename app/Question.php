<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'quiz_id', 'question', 'choice1', 'choice2','choice3','choice4','answer',
    ];
}
