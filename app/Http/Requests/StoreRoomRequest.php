<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'selected_users' => 'required|array',
            'selected_users.*' => 'exists:users,id',
        ];
    }

    /**
     * Customer message for store create API
     *
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'selected_users.required' => 'The selected users field is required.',
            'selected_users.array' => 'The selected users must be an array.',
            'selected_users.*.exists' => 'One or more selected users do not exist.',
        ];
    }
}
