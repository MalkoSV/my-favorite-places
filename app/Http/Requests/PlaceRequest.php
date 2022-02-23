<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
          'name'    => 'required|unique:places|not_regex:/[0-9]/',
          'type_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'required'  => 'Необходимо заполнить поле :attribute',
          'unique'    => 'Такое "Название" уже существует',
          'not_regex' => 'В названии места не должно быть цифр',
        ];
    }

}
