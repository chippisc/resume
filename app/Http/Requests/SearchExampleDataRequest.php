<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchExampleDataRequest extends FormRequest
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
            'search' => ['nullable', 'string', 'max:255'],
            'amount' => ['nullable', 'int', 'max:100'],
            'offset' => ['nullable', 'int', 'min:0'],
        ];
    }
}
