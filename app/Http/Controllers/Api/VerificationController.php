<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\People;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
   public function verify(Request $request){

       if(empty($request->category_id)){
        return 'Please select category';
       }
       if(empty($request->id_no)){
        return 'Please input ID number';
       }
       if(empty($request->dob)) {
        return 'Please input date of birth';
       }

      //get date of birth and registration from here
      $people = People::where('id_no', $request->id_no)->where('dob', $request->dob)->first();
      if(empty($people)){
        return 'ID not found.';
      }else{
          //found the categori id
          $category = Category::where('id', $request->category_id)->first();
          if(empty($category)){
            return 'Category not found';
          }else{
              $current_age = tikaAgeDifference($people->dob);
              if($current_age >= $category->min_age){
                  // can do  registration
                  if($people->registered == 1){
                    return 'You are already registered. ';
                  }else{
                    return $people;
                  }
              }else{
                return'Minimum age for '.$category->name.' is ' . $category->min_age . '. Your current age is ' . $current_age;
              }
          }
      }


   }
}
