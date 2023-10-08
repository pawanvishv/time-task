<?php

namespace App\Http\Requests;

use App\Rules\AdultAge;
use Illuminate\Foundation\Http\FormRequest;

class CreateProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'countryCode' => 'required|string|max:255',
            'mobileNo' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'dob' => ['required', 'date', new AdultAge],
            'country' => 'required|string|max:255',
            'tshirt' => 'required|integer',
            'tshirt_size' => 'nullable|string|max:255',
            'healthIssues' => 'nullable|string|max:255',
            'emergencyContact' => 'nullable|string|max:255',
        ];
    }
}
