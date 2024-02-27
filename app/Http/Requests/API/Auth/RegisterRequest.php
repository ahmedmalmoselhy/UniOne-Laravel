<?php

namespace App\Http\Requests\API\Auth;

use App\Helpers\Constants;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'string|required|min:2|max:50',
            'last_name' => 'string|required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|confirmed|min:8|max:255',
            'type' => 'required|string|exists:' . implode(',', Constants::ALLOWED_USER_TYPES)
        ];
    }
}
