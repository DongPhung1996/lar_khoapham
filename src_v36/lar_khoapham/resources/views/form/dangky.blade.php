<form action="{!! route('postDangKy') !!}" method="POST" name="frmThem">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
	<table>
		<tr>
			<td>Môn Học</td>
			<td><input type="text" name="txtMonHoc" /></td>
		</tr>
		<tr>
			<td>Giá Tiền</td>
			<td><input type="text" name="txtGiaTien" /></td>
		</tr>
		<tr>
			<td>Giảng Viên</td>
			<td><input type="text" name="txtGiangVien" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btnGui" value="Thêm" /></td>
		</tr>
	</table>
</form>