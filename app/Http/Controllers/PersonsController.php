<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function index()
    {
        return Person::all();
    }

    public function store(PersonRequest $request)
    {
        $data = $request->validated();

        Person::create($data);

        return $data;
    }

    public function update(Person $person,PersonRequest $request)
    {
        $data = $request->validated();


        $person->update($data);

        return $data;

    }
    public function delete(Person $person)
    {
        $person->delete();
    }
}
