<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\KhoaPhamRequest;
use App\KhoaPham;
class KhoaPhamController extends Controller {

	public function them (KhoaPhamRequest $request) {
		$img = $request->file('fImages');
		$img_name = $img->getClientOriginalName();

		$khoapham = new KhoaPham;
		$khoapham->monhoc = $request->txtMonHoc;
		$khoapham->giatien = $request->txtGiaTien;
		$khoapham->giangvien = $request->txtGiangVien;
		$khoapham->images = $img_name;
		$khoapham->save();

		$des = 'public/upload/images';
		$img->move($des,$img_name);

		return redirect('form/dang-ky');




		/*echo "<pre>";
		echo "Tên Hình : ".$request->file('fImages')->getClientOriginalName()."<br />";
		echo "Kích Thước : ".$request->file('fImages')->getSize()." KB <br />";
		echo "Đường Dẫn : ".$request->file('fImages')->getRealPath()."<br />";
		echo "Loại : ".$request->file('fImages')->getMimeType()."<br />";
		echo "</pre>";*/

	}

}
