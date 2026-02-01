<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->symbols(),
            ],
            'password_confirmation' => [
                'required',
                'string'
            ],
            'accept' => [
                'required',
                'accepted'
            ]
        ];
    }

    /**
     * Get the custom validation error messages.
     *
     * @return array<string,string>
     */
    public function messages(): array
    {
        return [
            // Name
            'name.required' => 'Name is required.',
            'name.string' => 'Name must be text.',
            'name.max' => 'Name must not exceed :max characters.',

            // Email
            'email.required' => 'Email address is required.',
            'email.string' => 'Email address must be text.',
            'email.email' => 'Email address must be a valid email address.',
            'email.max' => 'Email address must not exceed :max characters.',
            'email.unique' => 'Email address is already in use.',

            // Password
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be text.',
            'password.confirmed' => 'Passwords do not match.',
            'password.min' => 'Password must be at least :min characters.',
            'password.mixed' => 'Password must contain both uppercase and lowercase letters.',
            'password.symbols' => 'Password must contain at least one special character.',

            // Password Confirmation
            'password_confirmation.required' => 'Password confirmation is required.',
            'password_confirmation.string' => 'Password confirmationmust be text.',

            // Terms
            'accept.required' => 'Terms of use and privacy policy must be accepted.',
            'accept.accepted' => 'Terms of use and privacy policy must be accepted.'
        ];
    }
}
