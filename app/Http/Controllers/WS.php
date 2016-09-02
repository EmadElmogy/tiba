<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Resturant;
class WS extends Controller
{
    public function test(){
      $data=Resturant::all();
      if(!empty($data)){
       $this->deliver_response(200,"data has been found",$data);
       }else{
         $this->deliver_response(400,"data not found",NULL);
       }
    }

    public function deliver_response($status,$status_msg,$data){
	  header("HTTP/1.1 $status $status_msg");
	  $response['status']=$status;
	  $response['status_msg']=$status_msg;
	  $response['data']=$data;
	  $json_response=strip_tags(json_encode($response,JSON_UNESCAPED_UNICODE));
	  echo $json_response;
	 }
}
