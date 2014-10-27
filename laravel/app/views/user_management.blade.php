@extends('header_admin')

@section('body')

<!-- Wrap all page content here -->
<div id="wrap"> 
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <h1>จัดการผู้ใช้งานระบบ</h1>
	</div>		
	<ul class="nav nav-tabs" id="admintab">
	  <li class="active"><a href="#waitting"  data-toggle="tab">จัดการข้อมูลส่วนตัว</a></li>
	  <li><a href="#edit"  data-toggle="tab">เปลี่ยนรหัสผ่าน</a></li>
	  
	</ul>

	<div class="tab-content">
	  <div class="tab-pane active" id="waitting">
		<form class="form-horizontal">
		<div class="col-lg-12"> 
			<div class="form-group"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">รหัสประจำตัว</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" disabled value="">
				</div>
				<label class="col-sm-2 control-label">รหัสประจำตัวประชาชน</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" disabled value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">คำนำหน้าชื่อ</label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  value="">
				 </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ชื่อ</label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  value="">
				</div>
				<label class="col-sm-2 control-label">นามสกุล</label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">วัน/เดือน/ปี เกิด</label>
				<div class="col-sm-4">
					<input type="text" class="form-control mydate" disabled value="">
				</div>
				<label class="col-sm-2 control-label">เพศ</label>
				<div class="col-sm-4">
					<label class="radio-inline" >
					  <input type="radio" name="sex" checked >
					  ชาย</label>
					<label class="radio-inline">
					  <input type="radio" name="sex">
					  หญิง </label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ปีที่เข้าศึกษา</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" disabled value="">
				</div>
				<label class="col-sm-2 control-label">สถานภาพนักศึกษา</label>
				<div class="col-sm-4">
					<label class="radio-inline" >
					  <input type="radio" name="study" checked >
					  เรียน</label>
					<label class="radio-inline">
					  <input type="radio" name="study">
					  ไม่เรียน </label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">คณะ</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" disabled value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ภาควิชา</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" disabled value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">สาขาวิชา</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" disabled value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">อาจารย์ที่ปรึกษา</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" disabled value="">
				</div>  
			</div>			  
		</div>
		

		<div class="form-group">
        <div class="col-sm-12 text-center">
          <button type="button" class="btn btn-success">แก้ไข</button>
		  <button type="button" class="btn btn-success">บันทึก</button>
        </div>
		</div>
		</form>
	  </div>
	  
	  <div class="tab-pane" id="edit">
		<form class="form-horizontal">
		<div class="col-lg-12">  
			<div class="form-group"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">รหัสผ่านเก่า</label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">รหัสผ่านใหม่</label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ยืนยันรหัสผ่านใหม่</label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  value="">
				</div>
			</div>	
			<div class="form-group">
              <label class="col-sm-2 control-label">ตำแหน่ง</label>
              <div class="col-sm-4">
                <input type="text" class="form-control"  value="">
              </div>
            </div>	  
		</div>
		

		<div class="form-group">
        <div class="col-sm-12 text-center">
		  <button type="button" class="btn btn-success">บันทึก</button>
        </div>
		</div>
		
		</form>
	  </div>
	</div>
  </div>
</div>
@stop
