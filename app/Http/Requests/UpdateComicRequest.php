<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //cambia da false a true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale_date' => 'required',
            'series' => 'nullable',
            'thumb' => 'url|nullable',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'il campo titolo è obbligatorio',
            'title.min' => 'il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'il campo titolo deve avere almeno :max caratteri',
            'type.required' => 'il campo tipo è obbligatorio',
            'price.required' => 'il campo del prezzo è obbligatorio',
            'sale_date.required' => 'la data di uscita è obbligatoria',
            'thumb.url' => 'il campo dell\'immagine deve contenere una url valida',
            //specifica restanti messaggi di errore
        ];
    }
}
