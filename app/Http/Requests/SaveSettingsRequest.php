<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSettingsRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'organization' => ['required'],
            'phone' => ['required'],
            'email' => ['required','email'],
            'address' => ['required'],
            'work_time' => [],
            'vk' => [],
            'telegram' => [],
            'policy'=> ['required'],
            'cookie'=> ['required'],
        ];
    }
}

