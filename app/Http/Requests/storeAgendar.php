<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeAgendar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /*'nombre' => 'requiered|max:60',
            'apellido_p' => 'requiered|max:60',
            'apellido_m' => 'requiered|max:60',
            'telefono' => 'requiered|max:10|min:10|integer',
            'solicitud_fecha' => 'requiered|date'*/
        ];
    }
}
