<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\addRequest;
use App\Http\Requests\editRequest;
use App\Technology;
use App\Product;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $products=Product::all();
         return view('admin.product.index',compact('products'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {

         $techs=Technology::all();
         return view('admin.product.create',compact('techs'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(addRequest $request)
     {
         Product::newproduct($request);
         return \Redirect::route('admin.product.index');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $product=Product::find($id);
         $techs=Technology::all();
         return view('admin.product.edit',compact('product','techs'));

     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(editRequest $request, $id)
     {
         Product::editproduct($request,$id);
         return \Redirect::route('admin.product.index');

     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         Product::find($id)->delete();
         return \Redirect::route('admin.product.index');
     }
}
