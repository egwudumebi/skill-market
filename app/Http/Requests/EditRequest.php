<?php

namespace App\Http\Requests;

use App\Models\Expert;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditRequest extends FormRequest
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
            'profile' => ['nullable', 'file', 'mimes:png,jpg,jpeg', 'max:5120'],
            'gender' => ['nullable', 'string'],
            'bio' => ['nullable', 'string'],
            'company' => ['nullable', 'string'],
            'job_title' => ['nullable', 'string'],
            'country' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'domain_id' => ['nullable', 'integer'],
            'sub_skills' => ['nullable'],
            'twitter' => ['nullable', 'string'],
            'facebook' => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
            'linkedin' => ['nullable', 'string'],
            'whatsapp' => ['nullable', 'string']
        ];
        
        return $rules;
    }
}
