<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addnewsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function authorize()
     {
         return \Auth::check();
     }

     /**
      * Get the validation rules that apply to the request.
      *
      * @return array
      */
     public function rules()
     {
         return [
           'title_en'=>'required',
           'title_ar'=>'required',
           'short_desc_en'=>'required',
           'short_desc_ar'=>'required',
           'details_en'=>'required',
           'details_ar'=>'required',
           'image'=>'required',

         ];
     }

     function response(Array $errors)
     {
         return \Redirect::back()->withErrors($errors);
     }

     function messages()
     {
         return [

           'title_en.required' => "الرجاء التحقق من Title",
           'title_ar.required' => "الرجاء التحقق من العنوان",
           'short_desc_en.required' => "الرجاء التحقق من Description",
           'short_desc_ar.required' => "الرجاء التحقق من الوصف",
           'details_en.required'=>"الرجاء التأكد من كتابة ال details",
           'details_ar.required'=>'الرجاء التأكد من كتابة التفاصيل',
           'image.required'=>'الرجاء التحقق من الصور'


         ];
     }
}
