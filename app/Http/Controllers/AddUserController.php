<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddUserController extends Controller
{
    function getAddUser()
    {
        return view('add_user');
    }

    function postAddUser(request $r)
    {
        // dd($r->all());
        $rules = [
            'full' => 'required|min:3',
            'phone' => 'bail|required|numeric|between:5,10',
            'address' => 'required',
            'id_number' => 'required'
        ];
        $messages = [
            'full.required' => 'Không được để trống họ và tên',
            'full.min' => 'Họ và tên không được nhỏ hơn 3 ký tự',
            'phone.required' => 'Không được để trống số điện thoại',
            'phone.numeric' => 'Số điện thoại phải là số',
            'phone.between' => 'Số điện thoại phải trong khoảng 5 đến 10 kí tự',
            'address.required' => 'Không được để trống địa chỉ',
            'id_number.required' => 'Không được để trống số CMT'

        ];
        $r->validate($rules, $messages);
    }
}
