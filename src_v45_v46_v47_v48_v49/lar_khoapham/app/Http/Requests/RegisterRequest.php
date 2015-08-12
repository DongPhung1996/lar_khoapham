<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request {

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
			'name'	=> 'required',
			'email' => 'required|email|unique:users,email',
			'password' => 'required'
		];
	}
	public function messages () {
		return [
			'name.required'	=> 'Vui Lòng Nhập Họ Tên',
			'email.required'	=> 'Vui Lòng Nhập Email',
			'email.email'	=> 'Đây Không Phải Là 1 Email',
			'email.unique'	=> 'Email Nãy Đã Tồn Tại Rồi',
			'password.required'	=> 'Vui Lòng Nhập Mật Khẩu',
		];
	}

}
