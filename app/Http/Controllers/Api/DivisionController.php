<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function getDivisions()
    {
        $getDivisions = Division::where('enabled', 1)->get();
        return \response()->json($getDivisions);
    }
}
