<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public static function addnew($request){
      $service= new Service;
      $service->title_en=$request->title_en;
      $service->title_ar=$request->title_ar;
      $service->desc_en=$request->desc_en;
      $service->desc_ar=$request->desc_ar;
      $destinationPath = 'uploads'; // upload path
       if ($request->image != null) {
       $extension =$request->image->getClientOriginalExtension(); // getting image extension
       $fileName = rand(11111,99999).'.'.$extension; // renameing image
       $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
       $service->image=$upload_success;
        }
       return $service->save();
    }

    public static function editService($request,$id){
      $service=service::find($id);
      $service->title_en=$request->title_en;
      $service->title_ar=$request->title_ar;
      $service->desc_en=$request->desc_en;
      $service->desc_ar=$request->desc_ar;
      if ($request->image != null) {
      $destinationPath = 'uploads'; // upload path
      $extension =$request->image->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
      //dd($upload_success);
      $service->image=$upload_success;
       }
      return $service->save();
    }
}
