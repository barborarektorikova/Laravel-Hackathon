<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnersController extends Controller
{
    public function index()
    {
        $owners = Owner::with('animal')->get();

        // dd($owners[0]->animal[0]->name);
        return view('index',compact('owners'));
    }
}
