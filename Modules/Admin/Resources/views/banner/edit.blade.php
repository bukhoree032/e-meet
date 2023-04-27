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
  background: #f44336;
  padding: 10px 30px;
  border: 2px solid #f44336;
  border-radius: 3px;
  color: #fff;
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
                    <h2 class="card-title">เพิ่มข้อมูลแบนเนอร์</h2>
                </div>
                <!--begin::Form-->
                <form action="{{ route('admin.update.banner',$result->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>เรื่อง (ไทย):</label>
                                <input name="ban_title_th" type="text"  class="form-control" placeholder="ใส่เรื่องของแบนเนอร์ภาษาไทย" value="{{ $result->ban_title_th }}"/>
                                <span class="form-text text-muted">กรุณาใส่เรื่องของแบนเนอร์ภาษาไทย</span>
                            </div>
                            <div class="col-lg-6">
                                <label>เรื่อง (อังกฤษ):</label>
                                <input name="ban_title_en" type="text" class="form-control" placeholder="ใส่เรื่องของแบนเนอร์ภาษาอังกฤษ" value="{{ $result->ban_title_en }}"/>
                                <span class="form-text text-muted">กรุณาใส่รายละเอียดของแบนเนอร์ภาษาอังกฤษ</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>รายละเอียด (ไทย):</label>
                                <input name="ban_detail_th" type="text"  class="form-control" placeholder="ใส่เรื่องของแบนเนอร์ภาษาไทย" value="{{ $result->ban_detail_th }}"/>
                                <span class="form-text text-muted">กรุณาใส่เรื่องของแบนเนอร์ภาษาไทย</span>
                            </div>
                            <div class="col-lg-6">
                                <label>รายละเอียด (อังกฤษ):</label>
                                <input name="ban_detail_en" type="text" class="form-control" placeholder="ใส่รายละเอียดของแบนเนอร์ภาษาอังกฤษ" value="{{ $result->ban_detail_en }}"/>
                                <span class="form-text text-muted">กรุณาใส่รายละเอียดของแบนเนอร์ภาษาอังกฤษ</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="row">
                                  <div class="col-lg-4">
                                      รูปเดิม
                                      <img src="{{$result->file}}" alt="" style="width: 100%">
                                      <input type="file" id="choose-file" name="files" accept="image/*" />
                                      <label for="choose-file">เลือกไฟล์ใหม่</label>
                                  </div>
                                  <div class="col-lg-4">
                                    <div>
                                      <div id="img-preview"></div>
                                    </div>
                                  </div>
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