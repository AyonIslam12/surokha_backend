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
    public function edit($id)
    {
        $peoples =People::find($id);
        return view('people.edit',\compact('peoples'));
    }
    public function update(Request $request, $id)
    {
        $people = People::find($id);
        $request->validate([

            'office' => 'required'
        ]);
       $people->update([

           'office' => $request->office,

       ]);

        return redirect(route('people.index'))->with(['message' => $people->id_no."'s Id " . ' is updated.']);


    }
    public function enableDisable($id)
    {
        $people = People::findOrFail($id);
        $people->registered = !$people->registered;
        $people->save();
        return \redirect(\route('people.index'))->with('message', $people->id_no." 's".' '.'Register Status Updated...');
    }
}
