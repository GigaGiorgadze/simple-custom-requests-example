<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    protected function prepareForValidation()
    {
        $this->merge([
            'skill' => json_decode($this->input('skill')),
        ]);
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'skill' => 'array'
        ];
    }
}
