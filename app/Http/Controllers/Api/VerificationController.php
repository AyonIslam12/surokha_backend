<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
   public function verify(Request $request){
       $peoples = People::where('id_no', $request->id)->first();
       return $peoples;
   }
}
