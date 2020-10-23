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

    public function search(Request $request)
    {
        $surnamestring = empty($request['surname']) ? 'NOT_TO_BE_FOUND' :'%'.$request['surname'].'%';
        $namestring = empty($request['name']) ? 'NOT_TO_BE_FOUND' :'%'.$request['name'].'%';
        $owners = Owner::with('animal')->where('surname', 'like', $surnamestring)->orWhere('name', 'like', $namestring)->get();
        // $owners = Owner::with('animal')->where('animals.name', 'like', $request['name'])->get();
        // var_dump($request['name']);
        return view('index',compact('owners'));
    }
}
