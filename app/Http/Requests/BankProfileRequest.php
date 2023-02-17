<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'email' => 'email|max:255|unique:users,email,' . $this->user()->id,
            'phone' => 'string|max:255',
            'address' => 'string|max:255',
            'username' => 'string|max:255',
            'representative_name' => 'string|max:255'
        ];
    }
}
