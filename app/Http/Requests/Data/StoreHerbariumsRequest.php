<?php
namespace App\Http\Requests\Data;

use Illuminate\Foundation\Http\FormRequest;

class StoreHerbariumsRequest extends FormRequest
{
    /**
     * Determine if the herbarium is authorized to make this request.
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
            'code' => 'required',
            'name' => 'required',
            'curator' => 'required',
            'email' => 'required|email',
        ];
    }
}
