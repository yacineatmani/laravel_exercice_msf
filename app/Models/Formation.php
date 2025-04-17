<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formations'; // Par défaut, correct
    protected $fillable = ['nom', 'description'];
}