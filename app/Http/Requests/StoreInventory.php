<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventory extends FormRequest {
    public function authorize() {
        return true;
    }

    //definindo regras para as colunas da tabela inventories
    public function rules() {
        return [
            'item' => 'required|string|max:255',
            'quantity' => 'required|int|max:100'
        ];
    }
}
