<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class KhoaPhamRequest extends Request {

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
			'txtMonHoc'	=> 'required|unique:kpt_khoapham,monhoc',
			'txtGiaTien' => 'required',
			'txtGiangVien' => 'required',
		];
	}
	public function messages () {
		return [
			'txtMonHoc.required' => 'Vui Lòng Nhập Tên Môn Học',
			'txtGiaTien.required' => 'Vui Lòng Nhập Giá Tiền',
			'txtGiangVien.required' => 'Vui Lòng Nhập Tên Giảng Viên',
			'txtMonHoc.unique'	=> 'Tên Môn Học Này Đã Tồn Tại'
		];
	}

}
