<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'mail_address' => "required|max:100",
            'password' => "required|max:255",
            'password_confirmation' => "required|same:password",
            'name' => "required|max:255",
            'address' => "max:255",
            'phone' => "max:15|regex:/^([0-9\s\-\+\(\)]*)$/",
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải nhập',
            'max' => ':attribute tối đa :max ký tự',
            'same' => ':attribute không đúng',
            'numeric' => ':attribute phải là ký tự số',
            'regex' => ':attribute chưa đúng định dạng'
        ];
    }

    public function attributes()
    {
        return [
            'mail_address' => 'Địa chỉ email',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'Xác nhận mật khẩu',
            'name' => 'Tên',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
        ];
    }
}
