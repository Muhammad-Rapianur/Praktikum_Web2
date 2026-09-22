<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketRequest extends FormRequest
{
    public function rules(): array
    {
        return array_merge($this->commonRules(), [
            'user_id' => ['prohibited'],
            'status' => ['required', Rule::in(['open', 'pending', 'closed'])],
        ]);
    }
}
