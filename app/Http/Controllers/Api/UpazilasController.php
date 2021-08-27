<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Upazila;
use Illuminate\Http\Request;

class UpazilasController extends Controller
{
    public function getUpazilas(Request $request)
    {
        $upazilas = Upazila::where('enabled', 1)->where('district_id', $request->district_id)->get();
        return response()->json($upazilas);
    }
}
