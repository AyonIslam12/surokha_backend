<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::paginate();
        return view('people.index', ['people' => $people]);
    }
    public function enableDisable($id)
    {
        $people = People::findOrFail($id);
        $people->registered = !$people->registered;
        $people->save();
        return \redirect(\route('people.index'))->with('message', $people->id_no." 's".' '.'Register Status Updated...');
    }
}
