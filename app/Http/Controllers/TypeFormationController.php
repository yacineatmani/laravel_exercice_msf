<?php

namespace App\Http\Controllers;

use App\Models\TypeFormation;
use Illuminate\Http\Request;

class TypeFormationController extends Controller
{
    public function index()
    {
        $typeformations = TypeFormation::all();
        return view('typeformations.index', compact('typeformations'));
    }
}