<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cambia esto si necesitas autorización
    }

    public function rules()
    {
        return [
            'teamwork_id' => 'required|exists:teamworks,id',
            'solicitude_id' => 'required|exists:solicitudes,id',
        ];
    }
}
