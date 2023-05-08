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
                <h3 class="card-title">เพิ่มข้อมูลรายงานการประชุม</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('manage.insert.report') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                        
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>รายงานครั้งที่</label><select id="pro" class="form-control" name="round" style="width: 100%;">
                                <option value="" selected>--ประชุมครั้งที่--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>พ.ศ:</label>
                            <select id="pro" class="form-control" name="year_round" style="width: 100%;">
                                <option selected>-- ปี --</option>
                                <option value="2560">2560</option>
                                <option value="2561">2561</option>
                                <option value="2562">2562</option>
                                <option value="2563">2563</option>
                                <option value="2564">2564</option>
                                <option value="2565">2565</option>
                                <option value="2566">2566</option>
                                <option value="2567">2567</option>
                                <option value="2568">2568</option>
                                <option value="2569">2569</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>แบบรายงานผลการดำเนินงานประจำเดือน:</label>
                            <select id="pro" class="form-control" name="month" style="width: 100%;">
                                <option selected>--เดือน--</option>
                                <option value="มกราคม">มกราคม</option>
                                <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                <option value="มีนาคม">มีนาคม</option>
                                <option value="เมษายน">เมษายน</option>
                                <option value="พฤษภาคม">พฤษภาคม</option>
                                <option value="มิถุนายน">มิถุนายน</option>
                                <option value="กรกฎาคม">กรกฎาคม</option>
                                <option value="สิงหาคม">สิงหาคม</option>
                                <option value="กันยายน">กันยายน</option>
                                <option value="ตุลาคม">ตุลาคม</option>
                                <option value="พฤศจิกายน">พฤศจิกายน</option>
                                <option value="ธันวาคม">ธันวาคม</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>พ.ศ:</label>
                            <select id="pro" class="form-control" name="year" style="width: 100%;">
                                <option value="" selected>- ปี --</option>
                                <option value="2560">2560</option>
                                <option value="2561">2561</option>
                                <option value="2562">2562</option>
                                <option value="2563">2563</option>
                                <option value="2564">2564</option>
                                <option value="2565">2565</option>
                                <option value="2566">2566</option>
                                <option value="2567">2567</option>
                                <option value="2568">2568</option>
                                <option value="2569">2569</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>ประจำปีงบประมาณ พ.ศ.:</label>
                            <select id="pro" class="form-control" name="year_budget" style="width: 100%;">
                                <option value="" selected>--ปี--</option>
                                <option value="2560">2560</option>
                                <option value="2561">2561</option>
                                <option value="2562">2562</option>
                                <option value="2563">2563</option>
                                <option value="2564">2564</option>
                                <option value="2565">2565</option>
                                <option value="2566">2566</option>
                                <option value="2567">2567</option>
                                <option value="2568">2568</option>
                                <option value="2569">2569</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>สภาสันติสุขตำบล:</label>
                            <input type="text" class="form-control" name="district" value="สะเตง" placeholder="สภาสันติสุขตำบล" />
                        </div>
                        <div class="col-lg-4">
                            <label>สภาสันติสุขอำเภอ:</label>
                            <input type="text" class="form-control" name="amphur" value="เมือง" placeholder="สภาสันติสุขอำเภอ" />
                        </div>
                        <div class="col-lg-4">
                            <label>สภาสันติสุขจังหวัด:</label>
                            <input type="text" class="form-control" name="province" value="ยะลา" placeholder="สภาสันติสุขจังหวัด" />
                        </div>
                    </div>
                    
                    <div class="col-lg-12"><b>แบบรายงานผลการดำเนินงานประจำเดือน : ส่วนที่ 1</b></div>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>รายงานการประชุมสภาสันติสุขตำบล:</label>
                            <input type="text" class="form-control" name="district1" value="สะเตง"  placeholder="รายงานการประชุมสภาสันติสุขตำบล" />
                        </div>
                        <div class="col-lg-6">
                            <label>ประจำเดือน</label>
                            <select id="pro" class="form-control" name="month1" style="width: 100%;">
                                <option selected>--เดือน--</option>
                                <option value="มกราคม">มกราคม</option>
                                <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                <option value="มีนาคม">มีนาคม</option>
                                <option value="เมษายน">เมษายน</option>
                                <option value="พฤษภาคม">พฤษภาคม</option>
                                <option value="มิถุนายน">มิถุนายน</option>
                                <option value="กรกฎาคม">กรกฎาคม</option>
                                <option value="สิงหาคม">สิงหาคม</option>
                                <option value="กันยายน">กันยายน</option>
                                <option value="ตุลาคม">ตุลาคม</option>
                                <option value="พฤศจิกายน">พฤศจิกายน</option>
                                <option value="ธันวาคม">ธันวาคม</option>
                            </select>
                        </div>
                        <div class="col-lg-6 margin_top">
                            <label>วันที่/เดือน/ปี:</label>
                            <input type="date" class="form-control" name="date_report" placeholder="วันที่/เดือน/ปี" value="{{"2566-01-01"}}"/>
                        </div>

                        <div class="col-lg-6  margin_top">
                            <label>สถานที่:</label>
                            <input type="text" class="form-control" name="location" placeholder="สถานที่" />
                        </div>
                            <div class="col-lg-4 margin_top">
                                <label>ตำบล:</label>
                                <input type="text" class="form-control" name="district2" value="สะเตง" placeholder="" />
                            </div>
                            <div class="col-lg-4 margin_top">
                                <label>อำเภอ:</label>
                                <input type="text" class="form-control" name="amphur2" value="เมือง" placeholder="" />
                            </div>
                            <div class="col-lg-4 margin_top">
                                <label>จังหวัด:</label>
                                <input type="text" class="form-control" name="province2" value="ยะลา" placeholder="" />
                            </div>
                        </div>

                        <div class="col-lg-12"><b>ตามระเบียบวาระที่ 3 เรื่องเสนอให้ที่ประชุมทราบ (เรื่องสืบเนื่อง)</b></div>
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>1. ภารกิจด้านความมั่นคงและรักษาความสงบเรียบร้อย (หน่วยทหารในพื้นที่/ตชด/ตำรวจภูธร):</label>
                                <select id="pro" class="form-control" name="secure" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>2. ภารกิจด้านแผนงานและการพัฒนาด้านเศรษฐกิจ(พัฒนากรประจำตำบล):</label>
                                <select id="pro" class="form-control" name="economy" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>3. ภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ (ปลัด อปท.):</label>
                                <select id="pro" class="form-control" name="budget" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>4. ภารกิจด้านการพัฒนาสังคม สาธารณสุขและสิ่งแวดล้อม (ผอ.รพ.สต.):</label>
                                <select id="pro" class="form-control" name="environment" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>5. ภารกิจการพัฒนาการศึกษา ศาสนาและวัฒนธรรม (ครู อาสา กศน.):</label>
                                <select id="pro" class="form-control" name="education" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>6. กลุ่มภารกิจด้านอำนวยการและการบริหาร(ปลัดอำเภอผู้เป้นหัวหน้าประจำตำบล):</label>
                                <select id="pro" class="form-control" name="director" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                        </div>    
                        
                        
                        <div class="col-lg-12"><b>แบบรายงานผลการดำเนินงานประจำเดือน : ส่วนที่ 2</b></div>
                        <br>
                        <h3>กิจกรรมที่ 1</h3>
                        <div class="form-group row">
                            <div class="col-lg-6 margin_top">
                                <label>ชื่อโครงการ/กิจกรรม:</label>
                                <input type="text" class="form-control" name="activity[0][activity]" placeholder="ชื่อโครงการ/กิจกรรม" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ):</label>
                                <input type="text" class="form-control" name="activity[0][approve]" placeholder="การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (เบิก-จ่าย):</label>
                                <input type="text" class="form-control" name="activity[0][withdraw]" placeholder="การเบิกจ่ายงบประมาณ (เบิก-จ่าย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน)):</label>
                                <input type="text" class="form-control" name="activity[0][target]" placeholder="ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท)):</label>
                                <input type="text" class="form-control" name="activity[0][income]" placeholder="ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย):</label>
                                <input type="text" class="form-control" name="activity[0][quality]" placeholder="ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ):</label>
                                <input type="text" class="form-control" name="activity[0][problem]" placeholder="ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ)" />
                            </div>
                            
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ</label>
                                <input type="text" class="form-control" name="activity[0][note]" placeholder="หมายเหตุ" />
                            </div>
                            {{-- <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ:</label>
                                <div class="col-lg-12" style="margin-top: 20px">
                                    <div class="field" align="left">
                                        <input type="file" style="display:none" id="upload-images1" name="activity[0][pictures]" multiple="multiple"></input>
                                        <div id="uploads1" class="drop-areas">
                                            เพิ่มรูปภาพกลุ่มทั้งหมด +
                                        </div>
                                        <div id="thumbnails"></div>
                                    </div>
                                </div>
                            </div> --}}

                        <h3 style="margin-top: 30px">กิจกรรมที่ 2</h3>
                        <div class="form-group row">
                            <div class="col-lg-6 margin_top">
                                <label>ชื่อโครงการ/กิจกรรม:</label>
                                <input type="text" class="form-control" name="activity[1][activity]" placeholder="ชื่อโครงการ/กิจกรรม" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ):</label>
                                <input type="text" class="form-control" name="activity[1][approve]" placeholder="การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (เบิก-จ่าย):</label>
                                <input type="text" class="form-control" name="activity[1][withdraw]" placeholder="การเบิกจ่ายงบประมาณ (เบิก-จ่าย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน)):</label>
                                <input type="text" class="form-control" name="activity[1][target]" placeholder="ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท)):</label>
                                <input type="text" class="form-control" name="activity[1][income]" placeholder="ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย):</label>
                                <input type="text" class="form-control" name="activity[1][quality]" placeholder="ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ):</label>
                                <input type="text" class="form-control" name="activity[1][problem]" placeholder="ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ)" />
                            </div>
                            
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ</label>
                                <input type="text" class="form-control" name="activity[1][note]" placeholder="หมายเหตุ" />
                            </div>
                            <div class="col-lg-12 margin_top">
                                {{-- <label>หมายเหตุ:</label>
                                <div class="col-lg-12" style="margin-top: 20px">
                                    <div class="field" align="left">
                                        <input type="file" style="display:none" id="upload-images" name="activity[1][pictures]" multiple="multiple"></input>
                                        <div id="uploads" class="drop-areas">
                                            เพิ่มรูปภาพกลุ่มทั้งหมด +
                                        </div>
                                        <div id="thumbnails"></div>
                                    </div>
                                </div> --}}

                        <h3 style="margin-top: 30px">กิจกรรมที่ 3</h3>
                        <div class="form-group row">
                            <div class="col-lg-6 margin_top">
                                <label>ชื่อโครงการ/กิจกรรม:</label>
                                <input type="text" class="form-control" name="activity[2][activity]" placeholder="ชื่อโครงการ/กิจกรรม" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ):</label>
                                <input type="text" class="form-control" name="activity[2][approve]" placeholder="การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (เบิก-จ่าย):</label>
                                <input type="text" class="form-control" name="activity[2][withdraw]" placeholder="การเบิกจ่ายงบประมาณ (เบิก-จ่าย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน)):</label>
                                <input type="text" class="form-control" name="activity[2][target]" placeholder="ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท)):</label>
                                <input type="text" class="form-control" name="activity[2][income]" placeholder="ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย):</label>
                                <input type="text" class="form-control" name="activity[2][quality]" placeholder="ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ):</label>
                                <input type="text" class="form-control" name="activity[2][problem]" placeholder="ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ)" />
                            </div>
                            
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ</label>
                                <input type="text" class="form-control" name="activity[2][note]" placeholder="หมายเหตุ" />
                            </div>
                            {{-- <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ:</label>
                                <div class="col-lg-12" style="margin-top: 20px">
                                    <div class="field" align="left">
                                        <input type="file" style="display:none" id="upload-images2" name="activity[2][pictures]" multiple="multiple"></input>
                                        <div id="uploads2" class="drop-areas">
                                            เพิ่มรูปภาพกลุ่มทั้งหมด +
                                        </div>
                                        <div id="thumbnails"></div>
                                    </div>
                                </div>
                            </div> --}}



                            
                            <div class="col-lg-12 margin_top">
                                <label>ลงชื่อปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล:</label>
                                <input type="text" class="form-control" name="name_head" placeholder="ลงชื่อปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล" />
                            </div>
                                <input type="text" class="form-control" value="ปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล" name="position_head" placeholder="สาเหตุการไม่เข้าประชุม" hidden/>

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