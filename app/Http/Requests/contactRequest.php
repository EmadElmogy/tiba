<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class contactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
     {
         return [
           'name'=>'required',
           'email'=>'required',
           'message'=>'required',
         ];
     }

     function response(Array $errors)
     {
         return \Redirect::back()->withErrors($errors);
     }

     function messages()
     {
         return [

           'name.required' => "الرجاء التحقق من الاسم",
           'email.required' => "الرجاء التحقق من البريد الالكترونى",
           'message.required' => "الرجاء ادخال رسالتك",

         ];
     }
}
