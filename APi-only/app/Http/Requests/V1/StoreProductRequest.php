<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    // app/Http/Requests/V1/StoreProductRequest.php
        public function rules(): array
        {
            return [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'stock_count' => 'integer|min:0',
            ];
        }
}
