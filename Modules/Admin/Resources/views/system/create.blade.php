{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<style>
  #img-preview {
  display: none;
  width: 100%;
  border: 2px dashed #333;  
  margin-bottom: 20px;
}
#img-preview img {
  width: 100%;
  height: auto;
  display: block;
}
[type="file"] {
  height: 0;  
  width: 0;
  overflow: hidden;
}
[type="file"] + label {
  width: 100%;
  font-family: sans-serif;
  background: #ffffff;
  padding: 10px 30px;
  border: 2px solid #000000;
  border-radius: 3px;
  color: rgb(0, 0, 0);
  cursor: pointer;
  transition: all 0.2s;
}
[type="file"] + label:hover {
  background-color: #fff;
  color: #f44336;
}

/* -------------------------------------*/
body {padding: 15px;}
p {position:fixed; bottom:0; font-family: monospace; font-weight: bold; font-size:12px;}
p a {color:#000;}

</style>

    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h2 class="card-title">ตั้งค่าพื้นฐาน</h2>
                </div>
                <!--begin::Form-->
                <form action="{{ route('admin.insert.system') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        
                        <input name="id" hidden value="{{ $result[0]->id ?? null }}"/>
                        <div class="form-group row">
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{$result[0]->file_icon ?? null}}" alt="" style="width: 150px">
                                        <input type="file" id="choose-file_icon" name="files_icon" accept="image/*" />
                                        <label for="choose-file_icon">อัปโหลดไอคอน +</label>
                                    </div>
                                    <div class="col-lg-4">
                                      <div>
                                        <div id="img-preview_icon" style="width: 150px"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{$result[0]->file_logo ?? null}}" alt="" style="width: 350px">
                                        <input type="file" id="choose-file_logo" name="files_logo" accept="image/*" />
                                        <label for="choose-file_logo">อัปโหลดโลโก้ +</label>
                                    </div>
                                    <div class="col-lg-4">
                                      <div>
                                        <div id="img-preview_logo"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{$result[0]->file_background ?? null}}" alt="" style="width: 400px">
                                        <input type="file" id="choose-file_background" name="files_background" accept="image/*" />
                                        <label for="choose-file_background">อัปโหลดพื้นหลัง +</label>
                                    </div>
                                    <div class="col-lg-4">
                                      <div>
                                        <div id="img-preview_background" style="width: 400px"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>ชื่อระบบ (ไทย) :</label>
                                <input name="sys_nameweb_th" type="text"  class="form-control" placeholder="ชื่อระบบภาษาไทย" value="{{ $result[0]->sys_nameweb_th ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่ชื่อระบบภาษาไทย</span>
                            </div>
                            <div class="col-lg-6">
                                <label>ชื่อระบบ (อังกฤษ) :</label>
                                <input name="sys_nameweb_en" type="text" class="form-control" placeholder="ชื่อระบบภาษาอังกฤษ" value="{{ $result[0]->sys_nameweb_en ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่ชื่อระบบภาษาอังกฤษ</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>ชื่อหน่วยงาน (ไทย) :</label>
                                <input name="sys_name_th" type="text"  class="form-control" placeholder="ชื่อหน่วยงานภาษาไทย" value="{{ $result[0]->sys_name_th ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่ชื่อหน่วยงานภาษาไทย</span>
                            </div>
                            <div class="col-lg-6">
                                <label>ชื่อหน่วยงาน (อังกฤษ) :</label>
                                <input name="sys_name_en" type="text" class="form-control" placeholder="ชื่อหน่วยงานภาษาอังกฤษ" value="{{ $result[0]->sys_name_en ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่ชื่อหน่วยงานภาษาอังกฤษ</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>สังกัด (ไทย) :</label>
                                <input name="sys_subname_th" type="text"  class="form-control" placeholder="สังกัดหน่วยงานภาษาไทย" value="{{ $result[0]->sys_subname_th ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่สังกัดหน่วยงานภาษาไทย</span>
                            </div>
                            <div class="col-lg-6">
                                <label>สังกัด (อังกฤษ) :</label>
                                <input name="sys_subname_en" type="text" class="form-control" placeholder="สังกัดหน่วยงานภาษาอังกฤษ" value="{{ $result[0]->sys_subname_en ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่สังกัดหน่วยงานภาษาอังกฤษ</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Facebookหน่วยงาน :</label>
                                <input name="sys_facebook" type="text" class="form-control" placeholder="ชื่อFacebookของหน่วยงาน" value="{{ $result[0]->sys_facebook ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่ชื่อFacebookของหน่วยงาน</span>
                            </div>
                            <div class="col-lg-6">
                                <label>Link Facebookหน่วยงาน :</label>
                                <input name="sys_facebook_link" type="text" class="form-control" placeholder="Link Facebookของหน่วยงาน" value="{{ $result[0]->sys_facebook_link ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่Link Facebookของหน่วยงาน</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>เบอร์โทรศัพท์ :</label>
                                <input name="sys_phon" type="text" class="form-control" placeholder="เบอร์โทรศัพท์ของหน่วยงาน" value="{{ $result[0]->sys_phon ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่เบอร์โทรศัพท์ของหน่วยงาน</span>
                            </div>
                            <div class="col-lg-6">
                                <label>อีเมล์ :</label>
                                <input name="sys_mail" type="text" class="form-control" placeholder="อีเมล์ของหน่วยงาน" value="{{ $result[0]->sys_mail ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่อีเมล์ของหน่วยงาน</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>ข้อมูลติดต่อ (ไทย) :</label>
                                <input name="sys_address_th" type="text" class="form-control" placeholder="ชื่อหน่วยงานภาษาไทย" value="{{ $result[0]->sys_address_th ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่ข้อมูลติดต่อหน่วยงานภาษาไทย</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>ข้อมูลติดต่อ (อังกฤษ) :</label>
                                <input name="sys_address_en" type="text" class="form-control" placeholder="ชื่อหน่วยงานภาษาอังกฤษ" value="{{ $result[0]->sys_address_en ?? null }}"/>
                                <span class="form-text text-muted">กรุณาใส่ข้อมูลติดต่อหน่วยงานภาษาอังกฤษ</span>
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
<script>
const chooseFile_icon = document.getElementById("choose-file_icon");
const imgPreview_icon = document.getElementById("img-preview_icon");

chooseFile_icon.addEventListener("change", function () {
  getImgData_icon();
});

function getImgData_icon() {
  const files = chooseFile_icon.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      imgPreview_icon.style.display = "block";
      imgPreview_icon.innerHTML = 'รูปใหม่<img src="' + this.result + '"  style="width: 150px"/>';
    });    
  }
}
</script>
<script>
const chooseFile_logo = document.getElementById("choose-file_logo");
const imgPreview_logo = document.getElementById("img-preview_logo");

chooseFile_logo.addEventListener("change", function () {
  getImgData();
});

function getImgData() {
  const files = chooseFile_logo.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      imgPreview_logo.style.display = "block";
      imgPreview_logo.innerHTML = 'รูปใหม่<img src="' + this.result + '"  style="width: 350px"/>';
    });    
  }
}
</script>
<script>
const chooseFile_background = document.getElementById("choose-file_background");
const imgPreview_background = document.getElementById("img-preview_background");

chooseFile_background.addEventListener("change", function () {
  getImgData_background();
});

function getImgData_background() {
  const files = chooseFile_background.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      imgPreview_background.style.display = "block";
      imgPreview_background.innerHTML = 'รูปใหม่<img src="' + this.result + '"  style="width: 400px"/>';
    });    
  }
}
</script>
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/sc_datatable.js') }}" type="text/javascript"></script>

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

<script src="{{ asset('js/upload_file/upload_file.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/upload_file/upload_file_multiples.js') }}" type="text/javascript"></script>

@endsection