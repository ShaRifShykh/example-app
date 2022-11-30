<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $persons = User::all();
        return view("welcome", compact("persons"));
//        return $persons;
    }

    public function add(Request $request) {
//        Person::create([
//            "name" => $request->person
//        ]);

        $person = new Person();
        $person->name = $request->person;
        $person->save();

        return redirect("/");
    }

    public function update($id) {
        $user = Person::find($id);
        return view("update", compact("user"));
    }

    public function edit(Request $request) {
        $id = $request->id;

        $user = Person::find($id);
        $user->name = $request->person ?? $user->name;
        $user->save();

        return redirect("/");
    }

    public function delete($id) {
        $user = Person::find($id);
        $user->delete();

        return redirect("/");
    }
}
