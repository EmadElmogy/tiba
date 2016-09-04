<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Converter extends Model
{
  public static function newconverter($request){
    $converter= new Converter;
    $converter->title_en=$request->title_en;
    $converter->title_ar=$request->title_ar;
    $converter->desc_en=$request->desc_en;
    $converter->desc_ar=$request->desc_ar;
    // $destinationPath = 'uploads'; // upload path
    //  if ($request->image != null) {
    //  $extension =$request->image->getClientOriginalExtension(); // getting image extension
    //  $fileName = rand(11111,99999).'.'.$extension; // renameing image
    //  $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
    //  $converter->image=$upload_success;
    //   }
     return $converter->save();
  }

  public static function editconverter($request,$id){
    $converter=Converter::find($id);
    $converter->title_en=$request->title_en;
    $converter->title_ar=$request->title_ar;
    $converter->desc_en=$request->desc_en;
    $converter->desc_ar=$request->desc_ar;
    // if ($request->image != null) {
    // $destinationPath = 'uploads'; // upload path
    // $extension =$request->image->getClientOriginalExtension(); // getting image extension
    // $fileName = rand(11111,99999).'.'.$extension; // renameing image
    // $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
    // //dd($upload_success);
    // $converter->image=$upload_success;
    //  }
    return $converter->save();
  }
}
