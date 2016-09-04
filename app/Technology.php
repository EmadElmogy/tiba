<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
     public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public static function newtechs($request){
      $techs= new Technology;
      $techs->title_en=$request->title_en;
      $techs->title_ar=$request->title_ar;
      $techs->desc_en=$request->desc_en;
      $techs->desc_ar=$request->desc_ar;
      $techs->cat_id=$request->cat_id;
      $destinationPath = 'uploads'; // upload path
       if ($request->image != null) {
       $extension =$request->image->getClientOriginalExtension(); // getting image extension
       $fileName = rand(11111,99999).'.'.$extension; // renameing image
       $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
       $techs->image=$upload_success;
        }
       return $techs->save();
    }

    public static function edittechs($request,$id){
      $techs=Technology::find($id);
      $techs->title_en=$request->title_en;
      $techs->title_ar=$request->title_ar;
      $techs->desc_en=$request->desc_en;
      $techs->desc_ar=$request->desc_ar;
      $techs->cat_id=$request->cat_id;
      if ($request->image != null) {
      $destinationPath = 'uploads'; // upload path
      $extension =$request->image->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
      //dd($upload_success);
      $techs->image=$upload_success;
       }
      return $techs->save();
    }
}
