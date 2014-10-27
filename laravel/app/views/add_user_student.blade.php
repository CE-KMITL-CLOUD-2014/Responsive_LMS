@extends('header_admin')

@section('body')


<!-- Wrap all page content here -->
<div id="wrap"> 
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <h1>รายละเอียดนักศึกษา</h1>
    </div>
    <form class="form-horizontal">
	
      <div class="col-lg-12">
        <div class="panel panel-success">
          <div class="panel-heading">รายละเอียดนักศึกษา</div>
          <div class="panel-body">
			<div class="form-group">
              <label class="col-sm-2 control-label">username</label>
              <div class="col-sm-4">
                <input type="text" name="username" class="form-control" value="">
              </div>
              <label class="col-sm-2 control-label">password</label>
              <div class="col-sm-4">
                <input type="text" name="password" class="form-control" value="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">รหัสประจำตัว</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control" value="">
              </div>
              <label class="col-sm-2 control-label">รหัสประจำตัวประชาชน</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control" value="">
              </div>
            </div>
			<div class="form-group">
              <label class="col-sm-2 control-label">ชื่อเล่น</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
			  <label class="col-sm-2 control-label">คำนำหน้าชื่อ</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">ชื่อ</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
              <label class="col-sm-2 control-label">นามสกุล</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">วัน/เดือน/ปี เกิด</label>
              <div class="col-sm-4">
                <input type="text" class="form-control mydate"  value="">
              </div>
             <label class="col-sm-2 control-label">เพศ</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="sex" checked >
                  ชาย</label>
                <label class="radio-inline">
                  <input type="radio" name="sex">
                  หญิง </label>
              </div>
            </div>
			<div class="form-group">
			  <label class="col-sm-2 control-label">สถานที่ศึกษา</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
              <label class="col-sm-2 control-label">ปีที่เข้าศึกษา</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>       
            </div>
			<div class="form-group">
              <label class="col-sm-2 control-label">คณะ</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
			 <label class="col-sm-2 control-label">สถานภาพนักศึกษา</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="study" checked >
                  เรียน</label>
                <label class="radio-inline">
                  <input type="radio" name="study">
                  ไม่เรียน </label>
              </div>
            </div>
			<div class="form-group">
              <label class="col-sm-2 control-label">ภาควิชา</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
            </div>
			<div class="form-group">
              <label class="col-sm-2 control-label">สาขาวิชา</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
            </div>
			<div class="form-group">
              <label class="col-sm-2 control-label">อาจารย์ที่ปรึกษา</label>
              <div class="col-sm-4">
                <input type="text" name="" class="form-control"  value="">
              </div>
            </div>	
          </div>
        </div>
      </div>
      
      
      <div class="line_col12 col-lg-12"></div>
      <div class="form-group">
        <div class="col-sm-12 text-center">
          <button type="button" class="btn btn-primary" onclick="history.back();"><span class="glyphicon glyphicon-circle-arrow-left" ></span> ย้อนกลับไปหน้าก่อนหน้า</button>
          <button type="button" class="btn btn-success">บันทึก</button>
        </div>
      </div>
    </form>
  </div>
</div>
@stop