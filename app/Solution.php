<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
  public static function newSolution($request){
    $solution= new Solution;
    $solution->title_en=$request->title_en;
    $solution->title_ar=$request->title_ar;
    $solution->desc_en=$request->desc_en;
    $solution->desc_ar=$request->desc_ar;
    $destinationPath = 'uploads'; // upload path
     if ($request->image != null) {
     $extension =$request->image->getClientOriginalExtension(); // getting image extension
     $fileName = rand(11111,99999).'.'.$extension; // renameing image
     $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
     $solution->image=$upload_success;
      }
     return $solution->save();
  }

  public static function editSolution($request,$id){
    $solution=Solution::find($id);
    $solution->title_en=$request->title_en;
    $solution->title_ar=$request->title_ar;
    $solution->desc_en=$request->desc_en;
    $solution->desc_ar=$request->desc_ar;
    if ($request->image != null) {
    $destinationPath = 'uploads'; // upload path
    $extension =$request->image->getClientOriginalExtension(); // getting image extension
    $fileName = rand(11111,99999).'.'.$extension; // renameing image
    $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
    //dd($upload_success);
    $solution->image=$upload_success;
     }
    return $solution->save();
  }
}
