<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editUserRequest extends FormRequest
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
            "full" => "required|min:4",
            "phone" => "required|digits_between:5,15|unique:users,phone," . $this->idUser,
            "address" => "required",
            "id_number" => "required|digits_between:6,12"
        ];
    }
    public function messages()
    {
        return [
            "full.required" => "Tên thành viên không được để trống",
            "full.min" => "Tên không được dưới 4 kí tự",
            "phone.required" => "SĐT không được để trống",
            "phone.digits_between" => "SĐT phải nằm trong khoảng 5-15 số",
            "phone.unique" => "Số điện thoại đã được sử dụng",
            "address.required" => "Địa chỉ không được để trống",
            "id_number.required" => "CMND không được để trống",
            "id_number.digits_between" => "CMND phải nằm trong khoảng 6-12 số"
        ];
    }
}
