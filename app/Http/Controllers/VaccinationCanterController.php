<?php

namespace App\Http\Controllers;

use App\Models\VaccinationCanter;
use Illuminate\Http\Request;

class VaccinationCanterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccinationCenters = VaccinationCanter::paginate();
        return view('vaccination-centers.index', ['vaccinationCenters' => $vaccinationCenters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VaccinationCanter  $vaccinationCanter
     * @return \Illuminate\Http\Response
     */
    public function show(VaccinationCanter $vaccinationCanter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VaccinationCanter  $vaccinationCanter
     * @return \Illuminate\Http\Response
     */
    public function edit(VaccinationCanter $vaccinationCanter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VaccinationCanter  $vaccinationCanter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VaccinationCanter $vaccinationCanter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VaccinationCanter  $vaccinationCanter
     * @return \Illuminate\Http\Response
     */
    public function destroy(VaccinationCanter $vaccinationCanter)
    {
        //
    }
}
