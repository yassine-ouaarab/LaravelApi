<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{


    public function getPeople()
    {
        return Person::all();
        //return response()->json(Employee::all,200);
    }

    public function getPersonById($id)
    {
        $person = Person::find($id);
            if(is_null($person)) return null;
            else return $person;
    }


    public function AddPerson(Request $request)
    {
        Person::create($request->all());
        return true;
    }

    public function UpdatePerson(Request $request,$id)
    {


        $person = Person::find($id);
        if(is_null($person))
        {return null;}
        else
        {$person -> update($request->all());
        return true;}

    }

    public function DeletePerson($id)
    {

        $person = Person::find($id);
        if(is_null($person))
        {return null;}
        else
        {$person -> delete();
        return true;}

    }


}
