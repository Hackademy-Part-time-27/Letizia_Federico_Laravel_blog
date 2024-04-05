<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title'  => 'required|max:150',
            'category'  => 'required|max:50',
            'description'  => 'required|max:255',
            'body'   => 'required|max:5000',
        ];
    }
    public function messages(): array
    {
        return[
          'title.required'=>"Il titolo  è obbligatorio",
          'title.max'=> "il titolo non può superare i 150 caratteri",
          'category.required'=> "La categoria è obbligatoria",
          'category.max'=> "la categoria non può superare i 50 caratteri",
          'description.required'=> "La descrizione è obbligatoria",
          'description.max'=> "La descrizione non può superare i 255 caratteri",
          'body.required'=> "Il testo dell'articolo è obbligatorio",
          'body.max'=> "Il testo dell'articolo non può superare i 5000 caratteri",
        ];
    }
}
