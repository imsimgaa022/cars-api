<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'required|string|min:2|max:255',
            'model' => 'required|string|min:2|max:255',
            'year' => 'required|integer',
            'max_speed' => 'integer|between:20,300',
            'is_automatic' => 'required|boolean|max:255',
            'engine' => 'required|string|max:255',
            'number_of_doors' => 'required|integer|between:2,5'
        ];
    }
}
