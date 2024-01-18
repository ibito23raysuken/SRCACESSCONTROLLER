<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatiereRequest extends FormRequest
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
            'cours_id'=>'required|not_in:0',
            'jour'=>'required',
            'heure_debut'=> 'required',
            'heure_fin'=> 'required',
            'heure_fin'=> 'required',
            'enseignant'=>'required|not_in:0',
            'parcours_id'=>'required|not_in:0',
        ];
    }
}
