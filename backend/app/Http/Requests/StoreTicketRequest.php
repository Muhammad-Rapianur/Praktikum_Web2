<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return array_merge($this->commonRules(), [
            'user_id' => ['bail', 'required', 'integer', 'exists:users,id'],
            'status' => ['prohibited'],
        ]);
    }

    public function commonRules(): array
    {
        return [
            'subject' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string', 'max:5000'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'is_urgent' => ['sometimes', 'boolean'],
            'note' => ['nullable', 'string', 'max:1000'],
        ];
    }
}