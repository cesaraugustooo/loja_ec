<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdutos extends FormRequest
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
            "nome" => "sometimes|string|max:190",
            "descricao" => "sometimes|string|max:255",
            "preco" => "sometimes|numeric",
            "estoque" => "sometimes|int",
            "sub_categorias_id" => "sometimes|int|exists:sub-categorias,id"
        ];
    }
}
