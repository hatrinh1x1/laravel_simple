<?php

namespace App\Http\Requests;

use App\Models\Permission;
use Illuminate\Foundation\Http\FormRequest;

class RolesRequest extends FormRequest
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
            'name' => 'required|min:3',
            'display_name' => 'required',
            'description' => 'required',
            'perms.*' => 'required|exists:' . Permission::getTableName() . ',' . Permission::getFieldKeyName()
        ];
    }
}
