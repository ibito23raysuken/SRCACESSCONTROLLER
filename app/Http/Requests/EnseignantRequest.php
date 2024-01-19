<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnseignantRequest extends FormRequest
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
        $rules = [
            'nom' => 'required|min:3|max:200',
            'prenom' => 'required|min:3|max:200',
            'sexe' => 'required|not_in:0',
        ];

        // Ajoutez la règle de validation pour le mot de passe uniquement lors de la création
        if ($this->isMethod('post')) {
            $rules['password'] = 'required|string|min:8|confirmed';
        }

        return $rules;
    }
}
