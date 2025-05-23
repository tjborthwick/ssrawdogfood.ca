<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
use App\Rules\AllowedPostalCodes;
use App\Rules\ValidPhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class DeliveryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string', new ValidPhoneNumber],
            'address' => ['required', 'string'],
            'postal' => ['required', 'string', new AllowedPostalCodes],
            'message' => ['required', 'string'],
            'captcha_token'  => [new Recaptcha],
        ];
    }
}
