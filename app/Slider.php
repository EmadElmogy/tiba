<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public static function newslider($request){
      $slider= new Slider;
      $slider->title_en=$request->title_en;
      $slider->title_ar=$request->title_ar;
      $slider->desc_en=$request->desc_en;
      $slider->desc_ar=$request->desc_ar;
      $destinationPath = 'uploads'; // upload path
       if ($request->image != null) {
       $extension =$request->image->getClientOriginalExtension(); // getting image extension
       $fileName = rand(11111,99999).'.'.$extension; // renameing image
       $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
       $slider->image=$upload_success;
        }
       return $slider->save();
    }

    public static function editSlider($request,$id){
      $slider=Slider::find($id);
      $slider->title_en=$request->title_en;
      $slider->title_ar=$request->title_ar;
      $slider->desc_en=$request->desc_en;
      $slider->desc_ar=$request->desc_ar;
      if ($request->image != null) {
      $destinationPath = 'uploads'; // upload path
      $extension =$request->image->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
      //dd($upload_success);
      $slider->image=$upload_success;
       }
      return $slider->save();
    }
}
