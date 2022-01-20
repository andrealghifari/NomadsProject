<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    { //default : false
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:travel_packages|max:255',
            'location' => 'required|max:255',
            'about' => 'required',
            'featured_event' => 'required',
            'language' => 'required|max:255',
            'departure_date' => 'required|date',
            'duration' => 'required|max:255',
            'type' => 'required|max:255',
            'price' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required ',
            'title.unique' => 'The title has already been taken, try another one',
            'price.required' => 'Please give the price trip',
        ];
    }
}
