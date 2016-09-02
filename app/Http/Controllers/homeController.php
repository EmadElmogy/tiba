<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\contactRequest;
use App\Http\Requests\subscribeRequest;
use App\Slider;
use App\About;
use App\Partner;
use App\Service;
use App\News;
use App\Category;
use App\Technology;
use App\Product;
use App\Contact;
use App\Subscribe;
use DB;

class homeController extends Controller
{
    public function index(){
      $sliders=Slider::all();
      $about=About::first();
      $partners=Partner::all();
      $services=Service::paginate(4);
      $news=News::paginate(2);
      $page_flag='outer';
      return view('index',compact('sliders','about','partners','services','news','page_flag'));
    }

    public function get_news($id){
      $page_flag='inner';
      $news=News::find($id);
      //dd($news);
      return view('news_details',compact('page_flag','news'));
    }

    public function get_all_news(){
      $page_flag='inner';
      $news=News::paginate(5);
      //dd($news);
      return view('all_news_details',compact('page_flag','news'));
    }

    public function show_tech($id){
      $page_flag='inner';
      $techs=Technology::find($id);
      $products=Product::where('tech_id','=',$techs->id)->get();
      return view('tech_details',compact('page_flag','techs','products'));
    }

    public function get_cats(){
      $page_flag='inner';
      $cats=Category::paginate(1);
      return view('cats',compact('cats','page_flag'));
    }

    public function get_products($id){
      $page_flag='inner';
      $product=Product::find($id);
      return view('product_details',compact('page_flag','product'));

    }

    public function show_contact(){
      $page_flag='inner';
      return view('contact',compact('page_flag'));
    }

    public function do_contact(contactRequest $request){
      Contact::newContact($request);
      \Session::flash('message', trans('home.contact_message'));
      return \Redirect::back();
    }

    public function subscribe(subscribeRequest $request){
      Subscribe::newSubscriber($request);
      \Session::flash('message', trans('home.subscribe_message'));
      return \Redirect::back();
    }
}
