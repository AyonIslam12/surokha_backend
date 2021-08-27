<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VaccinationCanter;
use Illuminate\Http\Request;

class VaccinationCentersController extends Controller
{
    public function vaccinationCenters(Request $request) {
        $centers = VaccinationCanter::where('enabled', 1)->where('upazila_id', $request->upazila_id)->get();
        return response()->json($centers);
    }
}
