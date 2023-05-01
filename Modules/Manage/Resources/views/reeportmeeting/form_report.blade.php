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
            <form action="{{ route('manage.insert.meeting') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                        
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>รายงานครั้งที่</label><select id="pro" class="form-control" name="" style="width: 100%;">
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
                            <select id="pro" class="form-control" name="" style="width: 100%;">
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
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>--เดือน--</option>
                                <option value="2560">2560ๅๅๅๅๅๅๅๅๅๅๅๅๅๅๅๅๅๅ</option>
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
                            <label>พ.ศ:</label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
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
                            <select id="pro" class="form-control" name="" style="width: 100%;">
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
                        <div class="col-lg-12">
                            <label>สภาสันติสุขตำบล:</label>
                            <input type="text" class="form-control" name="" placeholder="สภาสันติสุขตำบล" />
                        </div>
                    </div>
                    
                    <div class="col-lg-12"><b>แบบรายงานผลการดำเนินงานประจำเดือน : ส่วนที่ 1</b></div>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>รายงานการประชุมสภาสันติสุขตำบล:</label>
                            <input type="text" class="form-control" name="" placeholder="รายงานการประชุมสภาสันติสุขตำบล" />
                        </div>
                        <div class="col-lg-4 ">
                            <label>ประจำเดือน</label>
                            <select id="pro" class="form-control" name="" style="width: 100%;">
                                <option selected>--เดือน--</option>
                                <option value="2560">2560ๅๅๅๅๅๅๅๅๅๅๅๅๅๅๅๅๅๅ</option>
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
                        <div class="col-lg-4 ">
                            <label>วันที่/เดือน/ปี:</label>
                            <input type="text" class="form-control" name="lastname_president" placeholder="วันที่/เดือน/ปี" />
                        </div>

                        <div class="col-lg-6  margin_top">
                            <label>สถานที่:</label>
                            <input type="text" class="form-control" name="lastname_president" placeholder="สถานที่" />
                        </div>
                            <div class="col-lg-6 margin_top">
                                <label>ตำบล/อำเภอ/จังหวัด:</label>
                                <input type="text" class="form-control" name="" placeholder="" />
                            </div>
                        </div>

                        <div class="col-lg-12"><b>ตามระเบียบวาระที่ 3 เรื่องเสนอให้ที่ประชุมทราบ (เรื่องสืบเนื่อง)</b></div>
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>1. ภารกิจด้านความมั่นคงและรักษาความสงบเรียบร้อย (หน่วยทหารในพื้นที่/ตชด/ตำรวจภูธร):</label>
                                <select id="pro" class="form-control" name="" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>2. ภารกิจด้านแผนงานและการพัฒนาด้านเศรษฐกิจ(พัฒนากรประจำตำบล):</label>
                                <select id="pro" class="form-control" name="" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>3. ภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ (ปลัด อปท.):</label>
                                <select id="pro" class="form-control" name="" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>4. ภารกิจด้านการพัฒนาสังคม สาธารณสุขและสิ่งแวดล้อม (ผอ.รพ.สต.):</label>
                                <select id="pro" class="form-control" name="" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>5. ภารกิจการพัฒนาการศึกษา ศาสนาและวัฒนธรรม (ครู อาสา กศน.):</label>
                                <select id="pro" class="form-control" name="" style="width: 100%;">
                                    <option value="" selected>--ดำเนินการหรือยัง--</option>
                                    <option value="ดำเนินการแล้ว">ดำเนินการแล้ว</option>
                                    <option value="ไม่ดำเนินการ">ไม่ดำเนินการ</option>
                                </select>
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>6. กลุ่มภารกิจด้านอำนวยการและการบริหาร(ปลัดอำเภอผู้เป้นหัวหน้าประจำตำบล):</label>
                                <select id="pro" class="form-control" name="" style="width: 100%;">
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
                                <input type="text" class="form-control" name="" placeholder="ชื่อโครงการ/กิจกรรม" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ):</label>
                                <input type="text" class="form-control" name="" placeholder="การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (เบิก-จ่าย):</label>
                                <input type="text" class="form-control" name="" placeholder="การเบิกจ่ายงบประมาณ (เบิก-จ่าย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน)):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท)):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ)" />
                            </div>
                            
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ</label>
                                <input type="text" class="form-control" name="" placeholder="หมายเหตุ" />
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ:</label>
                                <div class="col-lg-12" style="margin-top: 20px">
                                    <div class="field" align="left">
                                        <input type="file" style="display:none" id="upload-images" name="pictures[]" multiple="multiple"></input>
                                        <div id="uploads" class="drop-areas">
                                            เพิ่มรูปภาพกลุ่มทั้งหมด +
                                        </div>
                                        <div id="thumbnails"></div>
                                    </div>
                                </div>
                            </div>

                        <h3 style="margin-top: 30px">กิจกรรมที่ 2</h3>
                        <div class="form-group row">
                            <div class="col-lg-6 margin_top">
                                <label>ชื่อโครงการ/กิจกรรม:</label>
                                <input type="text" class="form-control" name="" placeholder="ชื่อโครงการ/กิจกรรม" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ):</label>
                                <input type="text" class="form-control" name="" placeholder="การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (เบิก-จ่าย):</label>
                                <input type="text" class="form-control" name="" placeholder="การเบิกจ่ายงบประมาณ (เบิก-จ่าย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน)):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท)):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ)" />
                            </div>
                            
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ</label>
                                <input type="text" class="form-control" name="" placeholder="หมายเหตุ" />
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ:</label>
                                <div class="col-lg-12" style="margin-top: 20px">
                                    <div class="field" align="left">
                                        <input type="file" style="display:none" id="upload-images" name="pictures[]" multiple="multiple"></input>
                                        <div id="uploads" class="drop-areas">
                                            เพิ่มรูปภาพกลุ่มทั้งหมด +
                                        </div>
                                        <div id="thumbnails"></div>
                                    </div>
                                </div>
                            </div>

                        <h3 style="margin-top: 30px">กิจกรรมที่ 3</h3>
                        <div class="form-group row">
                            <div class="col-lg-6 margin_top">
                                <label>ชื่อโครงการ/กิจกรรม:</label>
                                <input type="text" class="form-control" name="" placeholder="ชื่อโครงการ/กิจกรรม" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ):</label>
                                <input type="text" class="form-control" name="" placeholder="การเบิกจ่ายงบประมาณ (ได้รับอนุมัติ)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>การเบิกจ่ายงบประมาณ (เบิก-จ่าย):</label>
                                <input type="text" class="form-control" name="" placeholder="การเบิกจ่ายงบประมาณ (เบิก-จ่าย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน)):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (กลุ่มเป้าหมาย (ประเภท/คน))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท)):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (รายได้ที่ได้รับจากกิจกรรม (บาท))" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (คุณภาพชีวิตกลุ่มเป้าหมาย)" />
                            </div>
                            <div class="col-lg-3 margin_top">
                                <label>ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ):</label>
                                <input type="text" class="form-control" name="" placeholder="ผลการดำเนินงาน (ปัญหา/อุปสรรค/ข้อเสนอแนะ)" />
                            </div>
                            
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ</label>
                                <input type="text" class="form-control" name="" placeholder="หมายเหตุ" />
                            </div>
                            <div class="col-lg-12 margin_top">
                                <label>หมายเหตุ:</label>
                                <div class="col-lg-12" style="margin-top: 20px">
                                    <div class="field" align="left">
                                        <input type="file" style="display:none" id="upload-images" name="pictures[]" multiple="multiple"></input>
                                        <div id="uploads" class="drop-areas">
                                            เพิ่มรูปภาพกลุ่มทั้งหมด +
                                        </div>
                                        <div id="thumbnails"></div>
                                    </div>
                                </div>
                            </div>



                            
                            <div class="col-lg-12 margin_top">
                                <label>ลงชื่อปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล:</label>
                                <input type="text" class="form-control" name="" placeholder="ลงชื่อปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล" />
                            </div>
                                <input type="text" class="form-control" value="ปลัดอำเภอผู้เป็นหัวหน้าประจำตำบล" name="" placeholder="สาเหตุการไม่เข้าประชุม" hidden/>

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







<script>
    function myFunction(data) {
      var myobj = document.getElementById(data);
      myobj.remove();
    }
  </script>
  <script>
  const chooseFile = document.getElementById("choose-file");
  const imgPreview = document.getElementById("img-preview");
  
  chooseFile.addEventListener("change", function () {
    getImgData();
  });
  
  function getImgData() {
    const files = chooseFile.files[0];
    if (files) {
      const fileReader = new FileReader();
      fileReader.readAsDataURL(files);
      fileReader.addEventListener("load", function () {
        imgPreview.style.display = "block";
        imgPreview.innerHTML = 'รูปใหม่<img src="' + this.result + '" />';
      });    
    }
  }
  </script>

<!-- upload file -->
<script src="{{ asset('js/upload_file/upload_file.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/upload_file/upload_file_multiples.js') }}" type="text/javascript"></script>
<!-- upload file -->
@endsection