<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictureRequest extends FormRequest
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
          'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'required' => 'Фотография не выбрана! Сделайте выбор!',
          'unique'   => 'Фотография с таким именем уже есть. Выберите другую',
        ];
    }

}
