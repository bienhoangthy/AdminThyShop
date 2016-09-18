<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'sltCate'=>'required',
            'txtName'=>'required|unique:products,name',
            'txtPrice'=>'required|integer',
            'txtQty'=>'required|integer',
            'fImage'=>'required|image'
        ];
    }

    public function messages()
    {
        return [
            'sltCate.required'=>'Please choose Category!',
            'txtName.required'=>'Please Input Product Name!',
            'txtName.unique'=>'This Name Already Exists!',
            'txtPrice.required'=>'Please Input Price!',
            'txtPrice.integer'=>'Price must be a Number!',
            'txtQty.required'=>'Please Input Quantity!',
            'txtQty.integer'=>'Quantity must be a Number!',
            'fImage.required'=>'Please choose Image Product!',
            'fImage.image'=>'This File Is Not Image!'
        ];
    }
}
