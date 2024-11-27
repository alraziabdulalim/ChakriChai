<?php

namespace App\Http\Requests;

use App\Enums\EmploymentType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreChakriRequest extends FormRequest
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
            'title' => 'required|string|max:200',
            'company_name' => 'required|string|max:100',
            'employment_type' => ['required', Rule::enum(EmploymentType::class)],
            'role' => 'required|string|max:100',
            'apply_url' => 'required|url|max:255',
            'company_logo' => 'required|url|max:255',
            'description' => 'required',
            'salary' => 'required|max:20',
        ];
    }
}
