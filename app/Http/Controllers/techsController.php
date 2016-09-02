<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\addRequest;
use App\Http\Requests\editRequest;
use App\Technology;
use App\Category;

class techsController extends Controller
{
  public function index()
  {
      $techss=Technology::all();
      return view('admin.techs.index',compact('techss'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

      $cats=Category::all();
      return view('admin.techs.create',compact('cats'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(addRequest $request)
  {
      Technology::newtechs($request);
      return \Redirect::route('admin.techs.index');
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
      $techs=Technology::find($id);
      $cats=Category::all();
      return view('admin.techs.edit',compact('techs','cats'));

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
      Technology::edittechs($request,$id);
      return \Redirect::route('admin.techs.index');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      Technology::find($id)->delete();
      return \Redirect::route('admin.techs.index');
  }
}
