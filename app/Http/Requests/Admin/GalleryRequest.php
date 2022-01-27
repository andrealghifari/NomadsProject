<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //default false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'travel_packages_id' => 'required|integer|exists:travel_packages,id',
            'image' => 'required|image',
        ];
    }
    public function messages()
    {
        return [
            'travel_packages_id.required' => 'You have to choose the Travel Package',
            'image.required' => 'Please upload the image for Travel Package'
        ];
    }
}
