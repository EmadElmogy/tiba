<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    public static function newSubscriber($request){
      $subscribe=new Subscribe;
      $subscribe->name=$request->name;
      $subscribe->email=$request->email;
      $subscribe->save();
      return $subscribe;
    }
}
