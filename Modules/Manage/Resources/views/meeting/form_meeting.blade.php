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
                <h3 class="card-title">เพิ่มข้อมูลดอกไม้กลุ่มเกษตรกร และฟาร์ม</h3>
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
                            <input type="text" class="form-control" name="" placeholder="ตำบล" />
                        </div>
                        <div class="col-lg-4">
                            <label>ครั้งที่:</label>
                            <input type="text" class="form-control" name="" placeholder="ประชุมครั้งที่" />
                        </div>
                        <div class="col-lg-4">
                            <label>วัน/เดือน/ปี:</label>
                            <input type="text" class="form-control" name="" placeholder="วัน/เดือน/ปี ที่ประชุม" />
                        </div>
                        <div class="col-lg-12 margin_top">
                            <label>สถานที่ประชุม:</label>
                            <input type="text" class="form-control" name="" placeholder="สถานที่ประชุม" />
                        </div>
                    </div>
                    
                    <div class="col-lg-12"><b>ผู้มาประชุม (ให้ลงเฉพาะสมาชิกสภาสันติสุข)</b></div>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (ประธานสภาสันติสุขตำบล)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="ประธานสภาสันติสุขตำบล" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (รองประธาน)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="รองประธาน" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (รองประธาน)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="รองประธาน" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านแผนงานและพัฒนา)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กลุ่มภารกิจด้านแผนงานและพัฒนา" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กลุ่มภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านพัฒนาสังคม สาธารณสุขและสิ่งแวดล้อม)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กลุ่มภารกิจด้านพัฒนาสังคม สาธารณสุขและสิ่งแวดล้อม" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านการพัฒนาการศึกษาศาสนาและวัฒนธรรม)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กลุ่มภารกิจด้านการพัฒนาการศึกษาศาสนาและวัฒนธรรม" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านอำนวยการ ฯ)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กลุ่มภารกิจด้านอำนวยการ ฯ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กลุ่มภารกิจด้านอำนวยการ ฯ)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กลุ่มภารกิจด้านอำนวยการ ฯ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กรรมการ)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กรรมการ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กรรมการ)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กรรมการ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (กรรมการ)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="กรรมการ" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (เลขานุการ คนที่ 1 ปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="เลขานุการ คนที่ 1 ปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (เลขานุการ คนที่ 2 ผบ.ร้อยเฉพาะกิจประจำตำบล)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="เลขานุการ คนที่ 2 ผบ.ร้อยเฉพาะกิจประจำตำบล" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (ผู้ช่วยเลขานุการเจ้าหน้าที่ปกครองประจำตำบล)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="ผู้ช่วยเลขานุการเจ้าหน้าที่ปกครองประจำตำบล" hidden />
                        
                        <div class="col-lg-2  margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>ชื่อ (ผู้ช่วยเลขานุการบัณฑิตอาสา)</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5  margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <input type="text" class="form-control" name="" value="ผู้ช่วยเลขานุการบัณฑิตอาสา" hidden />
                    </div>






















                    <div class="col-lg-12"><b>ผู้ไม่มาประชุม (ให้ลงเฉพาะสมาชิกสภาสันติสุข)</b></div>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>ตำแหน่ง:</label>
                            <input type="text" class="form-control" name="" placeholder="ตำแหน่ง" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>สาเหตุการไม่เข้าประชุม:</label>
                            <input type="text" class="form-control" name="" placeholder="สาเหตุการไม่เข้าประชุม" />
                        </div>

                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>ตำแหน่ง:</label>
                            <input type="text" class="form-control" name="" placeholder="ตำแหน่ง" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>สาเหตุการไม่เข้าประชุม:</label>
                            <input type="text" class="form-control" name="" placeholder="สาเหตุการไม่เข้าประชุม" />
                        </div>

                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-2 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>ตำแหน่ง:</label>
                            <input type="text" class="form-control" name="" placeholder="ตำแหน่ง" />
                        </div>
                        <div class="col-lg-3 margin_top">
                            <label>สาเหตุการไม่เข้าประชุม:</label>
                            <input type="text" class="form-control" name="" placeholder="สาเหตุการไม่เข้าประชุม" />
                        </div>
                    </div>


















                    <div class="col-lg-12"><b>ผู้เข้าร่วมประชุม (เฉพาะผู้ที่ไม่ได้เป็นสมาชิกสภาสันติสุข)</b></div>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>

                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        
                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
                        </div>
                        
                        <div class="col-lg-2 margin_top">
                            <label>คำนำหน้า:</label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>-- คำนำหน้า --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>ชื่อ:</label>
                            <input type="text" class="form-control" name="" placeholder="ชื่อ" />
                        </div>
                        <div class="col-lg-5 margin_top">
                            <label>นามสกุล:</label>
                            <input type="text" class="form-control" name="" placeholder="นามสกุล" />
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