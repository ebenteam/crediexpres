<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreditosRequest extends FormRequest
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
            'fecha'=> 'required',
            'capital'=> 'required|numeric',
            'interes'=> 'required|numeric',
            'cuotas'=> 'required|numeric',
            'plazo'=> 'required|numeric',
            'fre_pago'=> 'required|numeric',
            'clientes_id'=> 'required',
        ];
    }
}
