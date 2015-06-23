<?php

namespace cyb\Http\Requests;

use cyb\Http\Requests\Request;

class CreateCompanyRequest extends Request
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
            'rut'=> 'required|min:3',
            'fancy_name'=> 'required',
            'address'=>'required',
            'description'=> 'required',

        ];
    }
}
