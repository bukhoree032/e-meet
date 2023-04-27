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
                    <h2 class="card-title">เพิ่มข้อมูลข่าวกิจกรรม</h2>
                </div>
                <!--begin::Form-->
                <form action="{{ route('admin.update.news',$result->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>หัวข้อ(เรื่อง) :</label>
                                <input name="n_title" type="text"  class="form-control" placeholder="ใส่ชื่อหัวข้อของข่าวกิจกรรม" value="{{ $result->n_title }}"/>
                                <span class="form-text text-muted">กรุณาใส่หัวข้อของข่าวกิจกรรม</span>
                            </div>
                            <div class="col-lg-12">
                                <label>รายละเอียดข่าว :</label>
                                <input name="n_details" type="text" class="form-control" placeholder="ใส่รายละเอียดข่าว" value="{{ $result->n_details }}"/>
                                <span class="form-text text-muted">กรุณาใส่รายละเอียดของข่าวกิจกรรม</span>
                            </div>
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
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="field" align="left">
                                    <input type="file" style="display:none" id="upload-images" name="file_multiples[]" multiple="multiple"></input>
                                    <div id="uploads" class="drop-areas">
                                        เพิ่มรูปภาพดอกไม้ทั้งหมด +
                                    </div>
                                    <span class="form-text text-muted">กรุณาใส่รูปเพิ่มเติมของข่าวสามารถใส่ได้หลายรูปโดยการกด Ctrl+คลิกรูปที่ต้องการใส่</span>
                                    <div id="thumbnails"></div>
                                </div>
                                <div class="row">
                                  @if($result->file_multiple != '')
                                    @foreach ($result->file_multiple as $key => $value)
                                      <div class="col-lg-3" id="{{$key}}">
                                          <input type="text"  name="file_multiples_edit[]" value="{{ $value }}" hidden>
                                          <img src="{{$value}}" alt="" style="width: 100%; margin-top: 5px">
                                          <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction({{$key}})">ลบรูป</button>
                                      </div>
                                    @endforeach
                                  @endif
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