<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ProjetRequest extends FormRequest
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

        $data = [
            'client' => 'required',
            'meta_titre' => 'required',
            'meta_description' => 'required',
            'logo' => 'image|mimes:jpg,jpeg,png|nullable'
        ];
        dd($data);
    }

    public function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->client).'-'.$this->id,
        ]);
    }
}
