<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\KhoaPham;
use Validator;
class KhoaPhamController extends Controller {

	public function them (Request $request) {
		$v = Validator::make($request->all(),
			[
				'txtMonHoc'	=> 'required|unique:kpt_khoapham,monhoc',
				'txtGiaTien' => 'required',
				'txtGiangVien' => 'required',
			],
			[
				'txtMonHoc.required' => 'Vui Lòng Nhập Tên Môn Học',
				'txtGiaTien.required' => 'Vui Lòng Nhập Giá Tiền',
				'txtGiangVien.required' => 'Vui Lòng Nhập Tên Giảng Viên',
				'txtMonHoc.unique'	=> 'Tên Môn Học Này Đã Tồn Tại'
			]
			);
		if ($v->fails()) {
			return redirect()->back()->withErrors($v->errors());
		}
		$khoapham = new KhoaPham;
		$khoapham->monhoc = $request->txtMonHoc;
		$khoapham->giatien = $request->txtGiaTien;
		$khoapham->giangvien = $request->txtGiangVien;
		$khoapham->save();
		return redirect('form/dang-ky');
	}

}
