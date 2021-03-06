<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'responsible_id' => ['required'],
            'problem_id' => ['required'],
            'deadline' => ['date'],
            'board_id' => ['required'],
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
            'responsible_id' => 'ответственный',
            'problem_id' => 'проблема',
            'deadline' => 'срок выполнения',
            'deadline_shift' => 'смещение сроков',
            'board_id' => 'доска ДВУ',
        ];
    }
}
