{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<style>
    .specify{
        margin-top: -6px;
        margin-bottom: 10px; 
        margin-left: 24px;
    }
    .checkbox_margin{
        margin-left: 0px;
    }
    .margin_top{
        margin-top: 13px;
    }
</style>
{{-- Dashboard 1 --}}
<div class="row">
    <div class="col-lg-6 col-xxl-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">เพิ่มข้อมูลบันทึกการประชุม</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('manage.insert.meeting') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>รายงานการประชุมสภาสันติสุขตำบล:</label>
                            <input type="text" class="form-control" name="district" placeholder="ตำบล" />
                        </div>
                        <div class="col-lg-4">
                            <label>ครั้งที่:</label>
                            <input type="text" class="form-control" name="round" placeholder="ประชุมครั้งที่" />
                        </div>
                        <div class="col-lg-4">
                            <label>วัน/เดือน/ปี:</label>
                            <input type="text" class="form-control" name="meeting_date" placeholder="วัน/เดือน/ปี ที่ประชุม" />
                        </div>
                        <div class="col-lg-12 margin_top">
                            <label>สถานที่ประชุม:</label>
                            <input type="text" class="form-control" name="location" placeholder="สถานที่ประชุม" />
                        </div>
                    </div>
                    
                    <div class="col-lg-12"><b>ผู้มาประชุม (ให้ลงเฉพาะสมาชิกสภาสันติสุข)</b></div>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_president" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (ประธานสภาสันติสุขตำบล)</label>
                            <input type="text" class="form-control" name="name_president" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_president" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_president" value="ประธานสภาสันติสุขตำบล" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_vice_president1" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (รองประธาน)</label>
                            <input type="text" class="form-control" name="name_vice_president1" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_vice_president1" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_vice_president1" value="รองประธาน" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_vice_president2" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (รองประธาน)</label>
                            <input type="text" class="form-control" name="name_vice_president2" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_vice_president2" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_vice_president2" value="รองประธาน" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_group_plan" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านแผนงานและพัฒนา)</label>
                            <input type="text" class="form-control" name="name_group_plan" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_group_plan" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_group_plan" value="กลุ่มภารกิจด้านแผนงานและพัฒนา" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_group_budget" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ)</label>
                            <input type="text" class="form-control" name="name_group_budget" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_group_budget" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_group_budget" value="กลุ่มภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_group_environment" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านพัฒนาสังคม สาธารณสุขและสิ่งแวดล้อม)</label>
                            <input type="text" class="form-control" name="name_group_environment" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_group_environment" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_group_environment" value="กลุ่มภารกิจด้านพัฒนาสังคม สาธารณสุขและสิ่งแวดล้อม" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_group_edu" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านการพัฒนาการศึกษาศาสนาและวัฒนธรรม)</label>
                            <input type="text" class="form-control" name="name_group_edu" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_group_edu" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_group_edu" value="กลุ่มภารกิจด้านการพัฒนาการศึกษาศาสนาและวัฒนธรรม" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_group_director" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านอำนวยการ ฯ)</label>
                            <input type="text" class="form-control" name="name_group_director" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_group_director" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_group_director" value="กลุ่มภารกิจด้านอำนวยการ ฯ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_group_stability" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านอำนวยการ ฯ)</label>
                            <input type="text" class="form-control" name="name_group_stability" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_group_stabilit" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_group_stability" value="กลุ่มภารกิจด้านอำนวยการ ฯ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_director1" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กรรมการ)</label>
                            <input type="text" class="form-control" name="name_director1" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_director1" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_director1" value="กรรมการ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_director2" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กรรมการ)</label>
                            <input type="text" class="form-control" name="name_director2" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_director2" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_director2" value="กรรมการ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_director3" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กรรมการ)</label>
                            <input type="text" class="form-control" name="name_director3" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_director3" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_director3" value="กรรมการ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_bailiff" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (เลขานุการ คนที่ 1 ปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล)</label>
                            <input type="text" class="form-control" name="name_bailiff" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_bailiff " placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_bailiff" value="เลขานุการ คนที่ 1 ปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_soldier" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (เลขานุการ คนที่ 2 ผบ.ร้อยเฉพาะกิจประจำตำบล)</label>
                            <input type="text" class="form-control" name="name_soldier" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_soldier" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_soldier" value="เลขานุการ คนที่ 2 ผบ.ร้อยเฉพาะกิจประจำตำบล" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_rule" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (ผู้ช่วยเลขานุการเจ้าหน้าที่ปกครองประจำตำบล)</label>
                            <input type="text" class="form-control" name="name_rule" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_rule" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_rule" value="ผู้ช่วยเลขานุการเจ้าหน้าที่ปกครองประจำตำบล" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_volunteer" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (ผู้ช่วยเลขานุการบัณฑิตอาสา)</label>
                            <input type="text" class="form-control" name="name_volunteer" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_volunteer" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="position_volunteer" value="ผู้ช่วยเลขานุการบัณฑิตอาสา" hidden />
                    </div>






















                    <div class="col-lg-12"><b>ผู้ไม่มาประชุม (ให้ลงเฉพาะสมาชิกสภาสันติสุข)</b></div>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_no_meeting[1]" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="name_no_meeting[1]" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_no_meeting[1]" placeholder="นามสกุล" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>ตำแหน่ง:</label>
                            <input type="text" class="form-control" name="position_no_meeting[1]" placeholder="ตำแหน่ง" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>สาเหตุการไม่เข้าประชุม:</label>
                            <input type="text" class="form-control" name="reason_no_meeting[1]" placeholder="สาเหตุการไม่เข้าประชุม" />
                        </div>

                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_no_meeting[2]" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="name_no_meeting[2]" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_no_meeting[2]" placeholder="นามสกุล" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>ตำแหน่ง:</label>
                            <input type="text" class="form-control" name="position_no_meeting[2]" placeholder="ตำแหน่ง" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>สาเหตุการไม่เข้าประชุม:</label>
                            <input type="text" class="form-control" name="reason_no_meeting[2]" placeholder="สาเหตุการไม่เข้าประชุม" />
                        </div>

                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_no_meeting[3]" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="name_no_meeting[3]" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_no_meeting[3]" placeholder="นามสกุล" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>ตำแหน่ง:</label>
                            <input type="text" class="form-control" name="position_no_meeting[3]" placeholder="ตำแหน่ง" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>สาเหตุการไม่เข้าประชุม:</label>
                            <input type="text" class="form-control" name="reason_no_meeting[3]" placeholder="สาเหตุการไม่เข้าประชุม" />
                        </div>
                    </div>


















                    <div class="col-lg-12"><b>ผู้เข้าร่วมประชุม (เฉพาะผู้ที่ไม่ได้เป็นสมาชิกสภาสันติสุข)</b></div>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_p_meeting[1]" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="name_p_meeting[1]" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_p_meeting[1]" placeholder="นามสกุล" />
                        </div>

                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_p_meeting[2]" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="name_p_meeting[2]" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_p_meeting[2]" placeholder="นามสกุล" />
                        </div>
                        
                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_p_meeting[3]" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="name_p_meeting[3]" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_p_meeting[3]" placeholder="นามสกุล" />
                        </div>
                        
                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="title_p_meeting[4]" style="width: 100%;">
                                <option value="" selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="name_p_meeting[4]" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="lastname_p_meeting[4]" placeholder="นามสกุล" />
                        </div>
                    </div>
                </div>

















                
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-primary mr-2">บันทึก</button>
                            <button type="reset" class="btn btn-secondary">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>

@endsection
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

{{-- Scripts Section --}}
@section('scripts')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Global Theme Bundle-->

<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('js/pages/crud/datatables/data-sources/html.js') }}" type="text/javascript"></script>
<!--end::Page Scripts-->
<!-- upload file -->
<script src="{{ asset('js/upload_file/upload_file.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/upload_file/upload_file_multiples.js') }}" type="text/javascript"></script>
<!-- upload file -->
@endsection