<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  public static function newnews($request){
    $news= new News;
    $news->title_en=$request->title_en;
    $news->title_ar=$request->title_ar;
    $news->short_desc_en=$request->short_desc_en;
    $news->short_desc_ar=$request->short_desc_ar;
    $news->details_en=$request->details_en;
    $news->details_ar=$request->details_ar;
    $destinationPath = 'uploads'; // upload path
    $images=array();
     $extension =$request->image->getClientOriginalExtension(); // getting image extension
     $fileName = rand(11111,99999).'.'.$extension; // renameing image
     if($request->image1 !=null){
        $extension1 =$request->image1->getClientOriginalExtension(); // getting image extension
        $fileName1= rand(11111,99999).'.'.$extension1; // renameing image
        $upload_success1=$request->image1->move($destinationPath, $fileName1);
        array_push($images,$fileName1);
        }
     if($request->image2 !=null){
       $extension2 =$request->image2->getClientOriginalExtension(); // getting image extension
       $fileName2 = rand(11111,99999).'.'.$extension2; // renameing image
       $upload_success2=$request->image2->move($destinationPath, $fileName2);
       array_push($images,$fileName2);
       }
       if($request->image3 !=null){
        $extension3 =$request->image3->getClientOriginalExtension(); // getting image extension
        $fileName3 = rand(11111,99999).'.'.$extension3; // renameing image
        $upload_success3=$request->image3->move($destinationPath, $fileName3);
          array_push($images,$fileName3);
        }
      $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
      array_push($images,$fileName);
      $serialized_images=json_encode($images);
      $news->images=$serialized_images;


     return $news->save();
  }

  public static function editnews($request,$id){
    $news=News::find($id);
    $news->title_en=$request->title_en;
    $news->title_ar=$request->title_ar;
    $news->short_desc_en=$request->short_desc_en;
    $news->short_desc_ar=$request->short_desc_ar;
    $news->details_en=$request->details_en;
    $news->details_ar=$request->details_ar;
    $destinationPath = 'uploads'; // upload path
    $images=array();
      if($request->image !=null){
       $extension =$request->image->getClientOriginalExtension(); // getting image extension
       $fileName = rand(11111,99999).'.'.$extension; // renameing image
       $upload_success=$request->image->move($destinationPath, $fileName); // uploading file to given path
       array_push($images,$fileName);
      }
     if($request->image1 !=null){
        $extension1 =$request->image1->getClientOriginalExtension(); // getting image extension
        $fileName1= rand(11111,99999).'.'.$extension1; // renameing image
        $upload_success1=$request->image1->move($destinationPath, $fileName1);
        array_push($images,$fileName1);
        }
     if($request->image2 !=null){
       $extension2 =$request->image2->getClientOriginalExtension(); // getting image extension
       $fileName2 = rand(11111,99999).'.'.$extension2; // renameing image
       $upload_success2=$request->image2->move($destinationPath, $fileName2);
       array_push($images,$fileName2);
       }
       if($request->image3 !=null){
        $extension3 =$request->image3->getClientOriginalExtension(); // getting image extension
        $fileName3 = rand(11111,99999).'.'.$extension3; // renameing image
        $upload_success3=$request->image3->move($destinationPath, $fileName3);
          array_push($images,$fileName3);
        }
      $serialized_images=json_encode($images);
      $news->images=$serialized_images;

     return $news->save();
  }
}
