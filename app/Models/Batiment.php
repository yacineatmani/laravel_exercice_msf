<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    protected $table = 'batiments'; // Par défaut, Laravel l’aurait déduit correctement
    protected $fillable = ['nom', 'description'];
}