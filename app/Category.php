<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function technologies()
    {
        return $this->hasMany('App\Technology');
    }

    public static function newcats($request){
      $cats= new Category;
      $cats->title_en=$request->title_en;
      $cats->title_ar=$request->title_ar;
      $cats->desc_en=$request->desc_en;
      $cats->desc_ar=$request->desc_ar;
      $destinationPath = 'uploads'; // upload path
       if ($request->image != null) {
       $extension =$request->image->getClientOriginalExtension(); // getting image extension
       $fileName = rand(11111,99999).'.'.$extension; // renameing image
       $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
       $cats->image=$upload_success;
        }
       return $cats->save();
    }

    public static function editcats($request,$id){
      $cats=Category::find($id);
      $cats->title_en=$request->title_en;
      $cats->title_ar=$request->title_ar;
      $cats->desc_en=$request->desc_en;
      $cats->desc_ar=$request->desc_ar;
      if ($request->image != null) {
      $destinationPath = 'uploads'; // upload path
      $extension =$request->image->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
      //dd($upload_success);
      $cats->image=$upload_success;
       }
      return $cats->save();
    }
}
