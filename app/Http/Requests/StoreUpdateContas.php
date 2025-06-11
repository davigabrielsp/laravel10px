<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContas extends FormRequest
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
            'nome' => 'required|min:1|max:120',
            'valor' => 'required|min:1|max:50',
            'vencimento' => 'required|min:1|max:50'
        ];
    }

    public function messages(): array
    {
        return[
            'nome.required' => 'Campo Nome é obrigatório',
            'valor.required' => 'Campo Valor é obrigatório',
            'vencimento.required' => 'Campo Vencimento é obrigatório',
        ];
    }
}
