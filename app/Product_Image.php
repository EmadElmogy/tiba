<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
  public function partner()
 {
     return $this->belongsTo('App\Partner');
 }

 public static function addproduct($request){
   $product_image= new Product_Image;
   $product_image->title_en=$request->title_en;
   $product_image->title_ar=$request->title_ar;
   $product_image->partner_id=$request->partner_id;
   $destinationPath = 'uploads'; // upload path
    if ($request->image != null) {
    $extension =$request->image->getClientOriginalExtension(); // getting image extension
    $fileName = rand(11111,99999).'.'.$extension; // renameing image
    $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
    $product_image->image=$upload_success;
     }
    return $product_image->save();
 }


}
