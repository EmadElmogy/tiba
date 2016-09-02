<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addRequest extends Request
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
          'desc_en'=>'required',
          'desc_ar'=>'required',
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
          'desc_en.required' => "الرجاء التحقق من Description",
          'desc_ar.required' => "الرجاء التحقق من الوصف",
          'image.required' => "الرجاء اختيار صوره",

        ];
    }
}
