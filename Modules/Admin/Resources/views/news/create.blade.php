{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h2 class="card-title">เพิ่มข้อมูลข่าวกิจกรรม</h2>
                </div>
                <!--begin::Form-->
                <form action="{{ route('admin.insert.news') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>หัวข้อ(เรื่อง) :</label>
                                <input name="n_title" type="text"  class="form-control" placeholder="ใส่หัวข้อของข่าวกิจกรรม" />
                                <span class="form-text text-muted">กรุณาใส่หัวข้อของข่าวกิจกรรม</span>
                            </div>
                            <div class="col-lg-12">
                                <label>รายละเอียดข่าว :</label>
                                <input name="n_details" type="text" class="form-control" placeholder="ใส่รายละเอียดข่าว" />
                                <span class="form-text text-muted">กรุณาใส่รายละเอียดของข่าวกิจกรรม</span>
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="field" align="left">
                                    <input type="file" style="display:none" id="upload-image" name="files"></input>
                                    <div id="upload" class="drop-area">
                                        อัปโหลดรูปหน้าปก +
                                    </div>
                                    <span class="form-text text-muted">กรุณาใส่รูปหลัก/รูปหน้าปก 1 รูป</span>
                                    <div id="thumbnail"></div>
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

<!-- upload file -->
<script src="{{ asset('js/upload_file/upload_file.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/upload_file/upload_file_multiples.js') }}" type="text/javascript"></script>
<!-- upload file -->

@endsection