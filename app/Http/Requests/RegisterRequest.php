<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use App\Models\Recruiter;
use App\Models\Expert;

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
        $rules = [
            'user_tier' => ['required', 'string'],
            'fullname' => ['required', 'string',],
            'username' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
        if ($this->user_tier === 'recruiter') {
            $rules['email'] = ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Recruiter::class];
            return $rules;
        }else {
            $rules['email'] = ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Expert::class];
            return $rules;
        }
    }
}
