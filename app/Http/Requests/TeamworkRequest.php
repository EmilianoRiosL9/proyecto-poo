<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamworkRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cambia esto según tus necesidades de autorización
    }

    public function rules()
    {
        return [
            'employee1_id' => 'required|exists:employees,id',
            'employee2_id' => 'required|exists:employees,id',
            'vehicle_id' => 'required|exists:vehicles,id',
        ];
    }
}
