<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
        'stu_id', 'question', 'given_answer','true_answer',
    ];
}
