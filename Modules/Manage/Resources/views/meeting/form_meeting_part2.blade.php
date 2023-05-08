{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    
<style>
    .specify{
        margin-top: -10px; 
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
                {{-- <form action="{{ route('manage.insert.farme') }}" method="POST" enctype="multipart/form-data">
                    @dd($ID); --}}
                <form action="{{ route('manage.insert.meeting2',$ID) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label>เริ่มประชุมเวลา:</label>
                                <input class="form-control" type="time" name="begin_meet">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-11">
                                <label>ระเบียบวาระที่ 1 ประธานแจ้งให้ทราบ:</label>
                                <input type="text" class="form-control " name="agenda1" placeholder="ระเบียบวาระที่ 1 " />
                            </div >
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4  margin_top">
                                <label>ระเบียบวาระที่ 2 ประชุมครั้งที่:</label>
                                    <select id="pro" class="form-control" name="r_meet_no" style="width: 100%;">
                                        <option selected>--ประชุมครั้งที่--</option>
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
                                <div class="col-lg-4  margin_top">
                                    <label>ประชุมปี:</label>
                                    <select id="pro" class="form-control" name="r_meeting_year" style="width: 100%;">
                                        <option selected>--ประชุมครั้งที่--</option>
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
                                <div class="col-lg-4  margin_top">
                                    <label>วัน/เดือน/ปี:</label>
                                    <input type="date" class="form-control " name="r_meeting_date" placeholder="วัน/เดือน/ปี" value="{{"2566-01-01"}}"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12  margin_top">
                                    <label>มติที่ประชุม	รับรอง/แก้ไขเรื่อง:</label>
                                    <input type="text" class="form-control " name="r_meet_edit" placeholder="มติที่ประชุม	รับรอง/แก้ไขเรื่อง" />
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label><b>ระเบียบวาระที่ 3	เรื่องเสนอให้ที่ประชุมทราบ (เรื่องสืบเนื่อง):</b></label>
                                <br>
                                <label><b>1. ภารกิจด้านความมั่นคงและรักษาความสงบเรียบร้อย (หน่วยทหารในพื้นที่/ตชด/ตำรวจภูธร):</b></label>

                                <div class="col-lg-12  margin_top">
                                    <label>1.1 สถานการณ์ยาเสพติด:</label>
                                    <input type="text" class="form-control " name="narcotics" placeholder="สถานการณ์ยาเสพติด" />
                                </div>
                                <div class="col-lg-12  margin_top">
                                    <label>1.2 สถานการณ์ความไม่สงบ :</label>
                                    <input type="text" class="form-control " name="unrest" placeholder="สถานการณ์ความไม่สงบ" />
                                </div>
                                <div class="col-lg-12  margin_top">
                                    <label>1.3 การปฏิบัติหน้าที่เวรยาม:</label>
                                    <input type="text" class="form-control " name="guard" placeholder="การปฏิบัติหน้าที่เวรยาม" />
                                </div>


                                <label><b>2. ภารกิจด้านแผนงานและการพัฒนาด้านเศรษฐกิจ(พัฒนากรประจำตำบล):</b></label>

                                <div class="col-lg-12  margin_top">
                                    <label>2.1 โครงการเสริมสร้างความเข้มแข็งให้กับตำบล (ศอ.บต.):</label>
                                    <input type="text" class="form-control " name="strength" placeholder="โครงการเสริมสร้างความเข้มแข็งให้กับตำบล" />
                                </div>
                                <div class="col-lg-12" style="margin-top: 20px">
                                    <div class="field" align="left">
                                        <input type="file" style="display:none" id="upload-images" name="pictures[]" multiple="multiple"></input>
                                        <div id="uploads" class="drop-areas">
                                            เพิ่มรูปภาพกลุ่มทั้งหมด +
                                        </div>
                                        <div id="thumbnails"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12  margin_top">
                                    <label>2.2 โครงการของส่วนราชการในตำบล:</label>
                                    <input type="text" class="form-control " name="government" placeholder="โครงการของส่วนราชการในตำบล" />
                                </div>


                                <div class="col-lg-12  margin_top">
                                    <label>3. ภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ (ปลัด อปท.):</label>
                                    <input type="text" class="form-control " name="coordinate" placeholder="ภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ" />
                                </div>


                                <label><b>4.ภารกิจด้านการพัฒนาสังคม สาธารณสุขและสิ่งแวดล้อม (ผอ.รพ.สต.):</b></label>

                                <div class="col-lg-12  margin_top">
                                    <label>4.1 สถานการณ์สุขอนามัย (โควิด 19 และอื่นๆ):</label>
                                    <input type="text" class="form-control " name="covid" placeholder="สถานการณ์สุขอนามัย" />
                                </div>
                                <div class="col-lg-12  margin_top">
                                    <label>4.2 บ้าน/ซ่อมบ้าน (ส่งต่อ พอช.):</label>
                                    <input type="text" class="form-control " name="home" placeholder="บ้าน/ซ่อมบ้าน (ส่งต่อ พอช.)" />
                                </div>
                                <div class="col-lg-12  margin_top">
                                    <label>4.3 ผู้สูงอายุ :</label>
                                    <input type="text" class="form-control " name="elder" placeholder="ผู้สูงอายุ" />
                                </div>
                                


                                <label><b>5. ภารกิจการพัฒนาการศึกษา ศาสนาและวัฒนธรรม (ครู อาสา กศน.):</b></label>

                                <div class="col-lg-12  margin_top">
                                    <label>5.1 สถานการณ์เด็กหลุดจากระบบการศึกษา :</label>
                                    <input type="text" class="form-control " name="education" placeholder="สถานการณ์เด็กหลุดจากระบบการศึกษา" />
                                </div>
                                
                                <div class="col-lg-12  margin_top">
                                    <label>6. กลุ่มภารกิจด้านอำนวยการและการบริหาร(ปลัดอำเภอผู้เป้นหัวหน้าประจำตำบล):</label>
                                    <input type="text" class="form-control " name="executive" placeholder="กลุ่มภารกิจด้านอำนวยการและการบริหาร" />
                                </div>

                                <div class="col-lg-12  margin_top">
                                    <label>มติที่ประชุม:</label>
                                    <input type="text" class="form-control " name="r_meeting" value="รับทราบ" placeholder="ภารกิจด้านประสานแผนงานพัฒนาพื้นที่และงบประมาณ" />
                                </div>
                                

                                <label><b>ระเบียบวาระที่ 4 :</b></label>

                                <div class="col-lg-12  margin_top">
                                    <label>เรื่องเพื่อพิจารณา:</label>
                                    <textarea class="form-control" name="agenda4" rows="3" cols="50"></textarea>
                                </div>
                                <div class="col-lg-12  margin_top">
                                    <label>มติที่ประชุม:</label>
                                    <textarea class="form-control" name="resolution4" rows="3" cols="50"></textarea>
                                </div>
                                


                                <label><b>ระเบียบวาระที่ 5:</b></label>

                                <div class="col-lg-12  margin_top">
                                    <label>เรื่องอื่น ๆ:</label>
                                    <textarea class="form-control" name="agenda5" rows="3" cols="50"></textarea>
                                </div>
                                <div class="col-lg-12  margin_top">
                                    <label>มติที่ประชุม:</label>
                                    <textarea class="form-control" name="resolution5" rows="3" cols="50"></textarea>
                                </div>
                                


                                <label><b>ระเบียบวาระที่ 6:</b></label>

                                <div class="col-lg-12  margin_top">
                                    <label>ข้อสั่งการ/ปิดการประชุม:</label>
                                    <textarea class="form-control" name="agenda6" rows="3" cols="100"></textarea>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>ปิดการประชุมเวลา:</label>
                                        <input class="form-control" type="time" name="end_meet">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>ชื่อผู้จดบันทึกการประชุม:</label>
                                        <input class="form-control" type="" name="name_record">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>ตำแหน่ง:</label>
                                        <input class="form-control" type="" name="position_record">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>ชื่อผู้ตรวจรายงานการประชุม:</label>
                                        <input class="form-control" type="" name="name_reporter">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>ตำแหน่ง:</label>
                                        <input class="form-control" type="" name="position_reporter">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>ชื่อผู้รับรองการประชุม:</label>
                                        <input class="form-control" type="" name="name_guarantee">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>ตำแหน่ง ประธานสภาสันติสุขตำบล:</label>
                                        <input class="form-control" type="" name="position_guarantee">
                                    </div>
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

{{-- Scripts Section --}}
@section('scripts')

<script type="text/javascript">

    $.datetimepicker.setLocale('th'); // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
    // กรณีใช้แบบ input
    $("#testdate5").datetimepicker({
        timepicker:false,
        format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000
        lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
        onSelectDate:function(dp,$input){
            var yearT=new Date(dp).getFullYear()-0;
            var yearTH=yearT+543;
            var fulldate=$input.val();
            var fulldateTH=fulldate.replace(yearT,yearTH);
            $input.val(fulldateTH);
        },
    });

    // กรณีใช้กับ input ต้องกำหนดส่วนนี้ด้วยเสมอ เพื่อปรับปีให้เป็น ค.ศ. ก่อนแสดงปฏิทิน
    $("#testdate5").on("mouseenter mouseleave",function(e){
        var dateValue=$(this).val();
        if(dateValue!=""){
                var arr_date=dateValue.split("-"); // ถ้าใช้ตัวแบ่งรูปแบบอื่น ให้เปลี่ยนเป็นตามรูปแบบนั้น
                // ในที่นี้อยู่ในรูปแบบ 00-00-0000 เป็น d-m-Y  แบ่งด่วย - ดังนั้น ตัวแปรที่เป็นปี จะอยู่ใน array
                //  ตัวที่สอง arr_date[2] โดยเริ่มนับจาก 0
                if(e.type=="mouseenter"){
                    var yearT=arr_date[2]-543;
                }
                if(e.type=="mouseleave"){
                    var yearT=parseInt(arr_date[2])+543;
                }
                dateValue=dateValue.replace(arr_date[2],yearT);
                $(this).val(dateValue);
        }
    });
</script>






<script>
    let addbutton = document.getElementById("addbutton");
    addbutton.addEventListener("click", function() {
    let boxes = document.getElementById("boxes");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttong = document.getElementById("addbuttong");
    addbuttong.addEventListener("click", function() {
    let boxes = document.getElementById("boxesg");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttons = document.getElementById("addbuttons");
    addbuttons.addEventListener("click", function() {
    let boxes = document.getElementById("boxess");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttonc = document.getElementById("addbuttonc");
    addbuttonc.addEventListener("click", function() {
    let boxes = document.getElementById("boxesc");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttonp = document.getElementById("addbuttonp");
    addbuttonp.addEventListener("click", function() {
    let boxes = document.getElementById("boxesp");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttonpr = document.getElementById("addbuttonpr");
    addbuttonpr.addEventListener("click", function() {
    let boxes = document.getElementById("boxespr");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });
</script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    {{-- <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('js/datatable/sc_datatable.js') }}" type="text/javascript"></script> --}}
    
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
    {{-- <script src="{{ asset('js/pages/crud/forms/widgets/select.js') }}" type="text/javascript"></script> --}}



    
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
