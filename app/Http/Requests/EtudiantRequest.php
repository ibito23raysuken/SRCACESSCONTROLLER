<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom'=>'required|min:3|max:200',
            'ref_rfid'=>'required|min:3|max:200',
            'prenom'=>'required|min:3|max:200',
            'sexe'=> 'required|not_in:0',
            'birth_day'=>'required',
            'lieudenaissance'=>'required',
            'parcoure'=>'required',
            'Annedetude'=>'required|not_in:0',
            'image' => 'required',
        ];
    }
}
