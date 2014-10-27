@extends('header_admin')

@section('body')


<!-- Wrap all page content here -->
<div id="wrap"> 
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <h1>ระบบจัดการนักศึกษา</h1>
    </div>
	
 
    <div class="input-group col-lg-6"> <span class="input-group-addon">ใส่ข้อมูลที่ต้องการค้นหา</span>
      <input type="text" class="form-control" placeholder="ค้นหาจาก รหัสนักศึกษา ชื่อ นามสกุล คณะ ภาควิชา" id="search-input">
      <span class="input-group-btn">
      <button class="btn btn-success" type="button" onclick="search_ma();">ค้นหา</button>
    </span> 
	</div>
	
    <div class="input-group col-lg-6"></div>
	  
    <div class="panel panel-default" style="background-color:RGBA(255,255,255,0.5); margin-top:20px">
      <div class="panel-body">
        <div class="col-lg-2">
          <div id="outline_count_mem" class="input-group input-group-sm"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>&nbsp; จำนวนนักศึกษา</span>
            <div class="form-control" id="count_mem"> 0</div>
            <span class="input-group-addon">คน</span> </div>
        </div>
      </div>
    </div>
	
<ul class="pager">
      <li class="previous"><a href="#" onclick=" to_first_page()"><span class="glyphicon glyphicon-step-backward"></span> หน้าแรก</a></li>
      <li id="page_previous_1"><a id="a_previous_1" href="#" onclick=""><span class="glyphicon glyphicon-chevron-left"></span> หน้าก่อนหน้า</a></li>
      <li class="disabled">&nbsp; <a style="cursor:default; border-radius:3px; color:#6A6A6A;" id="page_display_1">หน้าที่ 1 / 6</a> &nbsp; </li>
       <!-- ADD LI HERE -->
      <li><a style=" background:none; border:hidden;height:26px; padding-left:0px">
        <div class="input-group" style="width:135px;z-index:0">
          <input type="text" class="form-control" placeholder="ไปยังหน้าที่" style="height:32px" id="go_page_field">
          <span class="input-group-btn">
          <button class="btn btn-primary" type="button" style="height:32px" id="go_btn" onclick="go_to_page();">ไป</button>
          </span> </div>
        </a></li>
        <!-- END ADD LI HERE -->
        
      <li id="page_next_1"><a id="a_next_1" href="#" onclick="pageinc()">หน้าถัดไป <span class="glyphicon glyphicon-chevron-right"></span></a></li>
      <li class="next"><a href="#" onclick="to_last_page()">หน้าสุดท้าย <span class="glyphicon glyphicon-step-forward"></span></a></li>
    </ul>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
			<th>username</th>
            <th>รหัสนักศึกษา</th>
			<th>คำนำหน้าชื่อ </th>
            <th>ชื่อ </th>
            <th>นามสกุล </th>     
			<th>คณะ </th>   
			<th>ภาควิชา </th>   
			<th width="8%"></th> 
          </tr>
        </thead>
        <tbody>
          <tr> 
			<td>s53011285</td>
            <td>53011285</td>
			<th>นาย</th>
            <td>สุชาติ</td>
            <td>ชาติเจริญ</td>
			<td>วิศวกรรมศาสตร์</td>
			<td>คอมพิวเตอร์</td>
			<td><div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">ดำเนินการ <span class="caret"></span> </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="view_edit_user_student.php">ดูรายละเอียด</a></li>
                  <li><a href="delete_user_student.php">ลบผู้ใช้งาน</a></li>
                </ul>
              </div></td>
          </tr>
          <tr>
			<td>s54010684</td>
            <td>54010684</td>
			<th>นาง</th>
            <td>มาลี</td>
            <td>ลูกแมวเหมียว</td>  
			<td>วิศวกรรมศาสตร์</td>
			<td>คอมพิวเตอร์</td>
			<td><div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">ดำเนินการ <span class="caret"></span> </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="view_edit_user_student.php">ดูรายละเอียด</a></li>
                  <li><a href="delete_user_student.php">ลบผู้ใช้งาน</a></li>
                </ul>
              </div></td>
          </tr>
          <tr>  
			<td>s55010248</td>
            <td>55010248</td>
			<th>นาย</th>
            <td>สมชาย</td>
            <td>ชายชาติทหาร</td>    
			<td>วิศวกรรมศาสตร์</td>
			<td>คอมพิวเตอร์</td>	
			<td><div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">ดำเนินการ <span class="caret"></span> </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="view_edit_user_student.php">ดูรายละเอียด</a></li>
                  <li><a href="delete_user_student.php">ลบผู้ใช้งาน</a></li>
                </ul>
              </div></td>
          </tr>     
        </tbody>
      </table>
    </div>
    <ul class="pager">
      <li class="previous"><a href="#" onclick=""><span class="glyphicon glyphicon-step-backward"></span> หน้าแรก</a></li>
      <li id="page_previous_1"><a id="a_previous_1" href="#" onclick=""><span class="glyphicon glyphicon-chevron-left"></span> หน้าก่อนหน้า</a></li>
      <li class="disabled">&nbsp; <a style="cursor:default; border-radius:3px; color:#6A6A6A;" id="page_display_1">หน้าที่ 1 / 6</a> &nbsp; </li>
      <li><a style=" background:none; border:hidden;height:26px; padding-left:0px">
        <div class="input-group" style="width:135px;z-index:0">
          <input type="text" class="form-control" placeholder="ไปยังหน้าที่" style="height:32px" id="go_page_field">
          <span class="input-group-btn">
          <button class="btn btn-primary" type="button" style="height:32px" id="go_btn" onclick="go_to_page();">ไป</button>
          </span> </div>
        </a></li>
      <li id="page_next_1"><a id="a_next_1" href="#" onclick="pageinc()">หน้าถัดไป <span class="glyphicon glyphicon-chevron-right"></span></a></li>
      <li class="next"><a href="#" onclick="to_last_page()">หน้าสุดท้าย <span class="glyphicon glyphicon-step-forward"></span></a></li>
    </ul>

<div class="line_col12 col-sm-12"></div>
    <div class="col-lg-12 text-center">
      <button class="btn btn-success" onClick="location.href='add_user_student.php';"><span class="glyphicon glyphicon-plus"></span> เพิ่มผู้ใช้งาน</button>
    </div>
<div class="line_col12 col-sm-12"></div>
	
	
  </div>
</div>

@stop