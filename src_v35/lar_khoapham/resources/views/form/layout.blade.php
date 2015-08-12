{!! Form::open(array('route'=>'sendEmail','files'=>true)) !!}
{!! Form::label('hoten','Họ Tên') !!}
{!! Form::text('txtHoten','',array('class'=>'input')) !!} <br /><br />

{!! Form::label('matkhau','Mật Khẩu') !!}
{!! Form::password('txtMatKhau','',array('class'=>'input')) !!} <br /><br />

{!! Form::label('email','Email') !!}
{!! Form::email('txtEmail','',array('class'=>'input')) !!} <br /><br />

{!! Form::label('ghichu','Ghi Chú') !!}
{!! Form::textarea('txtGhiChu','',array('class'=>'input','rows'=>'5')) !!} <br /><br />

{!! Form::label('gioitinh','Giới Tính') !!}
{!! Form::radio('rdoGioiTinh','nam',true) !!} Nam
{!! Form::radio('rdoGioiTinh','nu') !!} Nư<br /><br />

{!! Form::label('sltThanhPho','Thành Phố') !!}
{!! Form::select('txtGhiChu',array(
								'hn' => 'Hà Nội',
								'h'	=> 'Huế',
								'hcm'=> 'Hồ Chí Minh'
								),'h') !!} <br /><br />

{!! Form::label('monhoc','Môn Học') !!}
{!! Form::checkbox('chkMonHoc','swift') !!} Swift
{!! Form::checkbox('chkMonHoc','php') !!} PHP & MySQL
{!! Form::checkbox('chkMonHoc','android') !!} Android <br /><br />

{!! Form::hidden('website','khoapham.vn') !!}

{!! Form::label('hinh','Avatar') !!}
{!! Form::file('fImages') !!}

{!! Form::submit('Gửi') !!}
{!! Form::button('Oke') !!}
{!! Form::reset('Xóa') !!}
{!! Form::close() !!}