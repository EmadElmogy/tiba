<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
  public static function newpartner($request){
    $partner= new Partner;
    $partner->name_en=$request->name_en;
    $partner->name_ar=$request->name_ar;
    $partner->desc_en=$request->desc_en;
    $partner->desc_ar=$request->desc_ar;
    $destinationPath = 'uploads'; // upload path
     if ($request->image != null) {
     $extension =$request->image->getClientOriginalExtension(); // getting image extension
     $fileName = rand(11111,99999).'.'.$extension; // renameing image
     $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
     $partner->image=$upload_success;
      }
     return $partner->save();
  }

  public static function editpartner($request,$id){
    $partner=Partner::find($id);
    $partner->name_en=$request->name_en;
    $partner->name_ar=$request->name_ar;
    $partner->desc_en=$request->desc_en;
    $partner->desc_ar=$request->desc_ar;
    if ($request->image != null) {
    $destinationPath = 'uploads'; // upload path
    $extension =$request->image->getClientOriginalExtension(); // getting image extension
    $fileName = rand(11111,99999).'.'.$extension; // renameing image
    $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
    //dd($upload_success);
    $partner->image=$upload_success;
     }
    return $partner->save();
  }

  public function product__images()
  {
      return $this->hasMany('App\Product_Image');
  }
}
