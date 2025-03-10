<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:1',
            'email' => 'required|email',
            'subject' => 'required|min:2',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名欄位必填',
            'name.min' => '姓名欄位最少 1 個字元',
            'email.required' => 'Email欄位必填',
            'email.email' => 'Email欄位格式錯誤',
            'subject.required' => '主旨欄位必填',
            'subject.min' => '主旨欄位最少 2 個字元',
            'message.required' => '訊息欄位必填',
        ];
    }
}
