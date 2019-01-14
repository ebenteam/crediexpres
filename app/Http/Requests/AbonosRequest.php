<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbonosRequest extends FormRequest
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

            'cuota'=> 'required|numeric|Min:1',
            'tipo_cuota'=> 'required'

        ];
    }
}
