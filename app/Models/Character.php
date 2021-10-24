<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'birthdate',
        'story',
    ];

    protected $dates = ['birthdate'];

    public function setBirthdateAttribute($date)
    {
        $this->attributes['birthdate'] = Carbon::createFromFormat('d.m.Y', $date);
    }
}
