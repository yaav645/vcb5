<?php

namespace App\Http\Requests\Board;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:5', 'max:350'],
            'company_id' => ['required'],
            'admin_id' => ['required'],
            'board_level' => ['required', 'integer'],
        ];
    }

    public function messages()
    {
        return parent::messages(); // TODO: Change the autogenerated stub
    }

    public function attributes()
    {
        return [
            'title' => 'название',
            'company_id' => 'компания',
            'admin_id' => 'администратор',
            'board_level' => 'уровень доски ДВУ'
        ];
    }
}
