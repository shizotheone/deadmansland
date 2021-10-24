<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whitelist extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_1',
        'answer_1_a',
        'answer_1_b',
        'answer_1_c',
        'question_2',
        'answer_2_a',
        'answer_2_b',
        'answer_2_c',
        'question_3',
        'answer_3_a',
        'answer_3_b',
        'answer_3_c',
        'question_4',
        'answer_4_a',
        'answer_4_b',
        'answer_4_c',
        'question_5',
        'answer_5_a',
        'answer_5_b',
        'answer_5_c',
        'question_6',
        'answer_6_a',
        'answer_6_b',
        'answer_6_c',
        'question_7',
        'answer_7_a',
        'answer_7_b',
        'answer_7_c',
        'question_8',
        'answer_8_a',
        'answer_8_b',
        'answer_8_c',
        'question_9',
        'answer_9_a',
        'answer_9_b',
        'answer_9_c',
        'question_10',
        'answer_10_a',
        'answer_10_b',
        'answer_10_c',
        'comment',
    ];
}
