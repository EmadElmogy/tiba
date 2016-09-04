<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class contactController extends Controller
{
    public function index(){
      $contacts=Contact::all();
      return view('admin.contact.index',compact('contacts'));
    }

    public function destroy($id){
      Contact::find($id)->delete();
      \Session::flash('message', 'Deletion is done.');
      return \Redirect::back();
    }
}
