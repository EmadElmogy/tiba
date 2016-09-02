<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Partner;
use App\Product_Image;


class partnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $partners=Partner::all();
         return view('admin.partners.index',compact('partners'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('admin.partners.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         Partner::newpartner($request);
         return \Redirect::route('admin.partner.index');
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
         $partner=Partner::find($id);
         return view('admin.partners.edit',compact('partner'));

     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         Partner::editpartner($request,$id);
         return \Redirect::route('admin.partner.index');

     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         Partner::find($id)->delete();
         return \Redirect::route('admin.partner.index');
     }

     public function addproduct($id){
       return view('admin.partners.addproduct',compact('id'));
     }

     public function add_product(Request $request){
        Product_Image::addproduct($request);
        \Session::flash('message', 'New Product has been added to Partner');
        return \Redirect::route('admin.partner.index');
     }

     public function showproducts($id){
      $products = Product_Image::where('partner_id','=',$id)->get();
       return view('admin.partners.showproducts',compact('products'));
     }

     public function deleteProduct($id){
       Product_Image::find($id)->delete();
       \Session::flash('message', 'Product has been deleted');
       return \Redirect::route('admin.partner.index');
     }
}
