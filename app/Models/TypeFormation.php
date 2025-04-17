<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeFormation extends Model
{
    // Spécifie explicitement la table
    protected $table = 'typeformations';

    // Définis les champs remplissables pour le seeder
    protected $fillable = ['nom'];
}