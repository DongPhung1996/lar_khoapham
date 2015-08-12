<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\KhoaPhamRequest;
use App\KhoaPham;
class KhoaPhamController extends Controller {

	public function them (KhoaPhamRequest $request) {
		$khoapham = new KhoaPham;
		$khoapham->monhoc = $request->txtMonHoc;
		$khoapham->giatien = $request->txtGiaTien;
		$khoapham->giangvien = $request->txtGiangVien;
		$khoapham->save();
		return redirect('form/dang-ky');
	}

}
