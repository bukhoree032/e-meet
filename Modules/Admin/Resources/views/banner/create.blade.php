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
                <form action="{{ route('admin.insert.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>เรื่อง (ไทย):</label>
                                <input name="ban_title_th" type="text"  class="form-control" placeholder="ใส่เรื่องของแบนเนอร์ภาษาไทย" />
                                <span class="form-text text-muted">กรุณาใส่เรื่องของแบนเนอร์ภาษาไทย</span>
                            </div>
                            <div class="col-lg-6">
                                <label>เรื่อง (อังกฤษ):</label>
                                <input name="ban_title_en" type="text" class="form-control" placeholder="ใส่เรื่องของแบนเนอร์ภาษาอังกฤษ" />
                                <span class="form-text text-muted">กรุณาใส่รายละเอียดของแบนเนอร์ภาษาอังกฤษ</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>รายละเอียด (ไทย):</label>
                                <input name="ban_detail_th" type="text"  class="form-control" placeholder="ใส่เรื่องของแบนเนอร์ภาษาไทย" />
                                <span class="form-text text-muted">กรุณาใส่เรื่องของแบนเนอร์ภาษาไทย</span>
                            </div>
                            <div class="col-lg-6">
                                <label>รายละเอียด (อังกฤษ):</label>
                                <input name="ban_detail_en" type="text" class="form-control" placeholder="ใส่รายละเอียดของแบนเนอร์ภาษาอังกฤษ" />
                                <span class="form-text text-muted">กรุณาใส่รายละเอียดของแบนเนอร์ภาษาอังกฤษ</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="field" align="left">
                                    <input type="file" style="display:none" id="upload-image" name="files"></input>
                                    <div id="upload" class="drop-area">
                                        อัปโหลดรูปแบนเนอร์ +
                                    </div>
                                    <span class="form-text text-muted">กรุณาใส่รูปแบนเนอร์</span>
                                    <div id="thumbnail"></div>
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

<script src="{{ asset('js/upload_file/upload_file.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/upload_file/upload_file_multiples.js') }}" type="text/javascript"></script>

@endsection