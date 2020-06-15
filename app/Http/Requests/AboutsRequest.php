<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class AboutsRequest extends FormRequest
{
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

            'full_text' => 'string'
        ];
    }
}
