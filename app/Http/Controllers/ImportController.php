<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Animal;

class ImportController extends Controller
{
    public function index()
    {
        
        $json_string = file_get_contents('C:\web\bootcamp\projects\hack3\storage\json\clients.json'); // replace path with a real path

        $data = json_decode($json_string);

        foreach ($data as $i=>$record)
        {
            $owner = new Owner;
            $owner->name = $record->first_name;
            $owner->surname = $record->surname;
            $owner->home_address = null;
            $owner->email = null;
            $owner->phone = null;

            foreach ($record->pets as $pet)
            {
                $animal = new Animal;
                $animal->name = $pet->name;
                $animal->owner_id = $i+1;
                $animal->doctor_id = random_int(1,10);
                $animal->species = null;
                $animal->age =$pet->age;
                $animal->breed = $pet->breed;
                $animal->weight = $pet->weight;
                $animal->photo = $pet->photo;

                $animal->save();
            }

            $owner->save();
        };
    }
}