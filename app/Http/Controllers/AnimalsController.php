<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function index()
    {
        $animals = Animal::with('owners')->set();

        // dd($animals[0]);
        return view('index',compact('animals'));
    }

    
