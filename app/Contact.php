<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static function newContact($request){
      $contact= new Contact;
      $contact->name=$request->name;
      $contact->email=$request->email;
      $contact->message=$request->message;
      $destinationPath = 'uploads'; // upload path
       if ($request->file != null) {
       $extension =$request->file->getClientOriginalExtension(); // getting image extension
       $fileName = rand(11111,99999).'.'.$extension; // renameing image
       $upload_success=$request->file->move($destinationPath, $fileName); // uploading file to given path
       $contact->uploads=$upload_success;
        }
       return $contact->save();
    }
}
