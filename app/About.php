<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
  public static function newAbout($request){
    $about= new About;
    $about->title_en=$request->title_en;
    $about->title_ar=$request->title_ar;
    $about->hint_ar=$request->hint_ar;
    $about->hint_en=$request->hint_en;
    $about->desc_en=$request->desc_en;
    $about->desc_ar=$request->desc_ar;
    $destinationPath = 'uploads'; // upload path
     if ($request->image != null) {
     $extension =$request->image->getClientOriginalExtension(); // getting image extension
     $fileName = rand(11111,99999).'.'.$extension; // renameing image
     $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
     $about->image=$upload_success;
      }
     return $about->save();
  }

  public static function editAbout($request,$id){
    $about=About::find($id);
    $about->title_en=$request->title_en;
    $about->title_ar=$request->title_ar;
    $about->hint_ar=$request->hint_ar;
    $about->hint_en=$request->hint_en;
    $about->desc_en=$request->desc_en;
    $about->desc_ar=$request->desc_ar;
    if ($request->image != null) {
    $destinationPath = 'uploads'; // upload path
    $extension =$request->image->getClientOriginalExtension(); // getting image extension
    $fileName = rand(11111,99999).'.'.$extension; // renameing image
    $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
    //dd($upload_success);
    $about->image=$upload_success;
     }
    return $about->save();
  }
}
