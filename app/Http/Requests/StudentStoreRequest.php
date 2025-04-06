<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'address' => 'required',
            'contact' => 'required:numeric',
            'email' => 'required|email',
            'dob' => 'required|date',
        ];
    }

    // The customize messages for the validation rules
    // For example, if the name is empty, it will show "Name Cannot Be Empty" instead of "The name field is required."
    public function messages(): array
    {
        return [
            'name' => 'Name Cannot Be Empty',
            'address' => 'Please Enter Your Address',
            'contact' => "Don't you think you should enter your contact number?",
        ];
    }

    // For Stop for each validation failure
    protected $stopOnFirstFailure = true;
}
