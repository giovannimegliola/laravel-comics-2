<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //ricorda di cambiare il default false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255|unique:comics',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'thumb' => 'url',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'il campo titolo è obbligatorio',
            'title.min' => 'il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'il campo titolo deve avere almeno :max caratteri',
            'type.required' => 'il campo tipo è obbligatorio',
            //specifica restanti messaggi di errore
        ];
    }
}