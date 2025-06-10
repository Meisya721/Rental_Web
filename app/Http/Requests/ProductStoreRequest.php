<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nama_barang' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kapasitas' => 'required|string|max:255',
            'bahan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ];
    }
}
