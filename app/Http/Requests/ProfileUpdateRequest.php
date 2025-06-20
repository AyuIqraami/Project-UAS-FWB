<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Pastikan true agar request ini bisa digunakan
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'max:2048'], // Maksimal 2MB
        ];
    }
}
