{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    
    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-favourite text-primary"></i>
                        </span>
                        <h3 class="card-label">ข้อมูลแบนเนอร์</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{ route('admin.create.banner') }}" class="btn btn-primary font-weight-bolder">
                        <i class="la la-plus"></i>เพิ่มแบนเนอร์</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                    <thead>
                            <tr>
                                <th width='5%'>ลำดับ</th>
                                <th width='15%'>แบนเนอร์</th>
                                <th width='20%'>เรื่อง</th>
                                <th width='50%'>รายละเอียด</th>
                                <th width='10%'>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $item => $value)
                            <tr>
                                <td>{{ $item+1 }}</td>
                                <td><img src="{{ $value->file }}" alt="" style="width: 100%"></td>
                                @php $value->ban_title_th = __substr($value->ban_title_th,'50') @endphp
                                <td>{{ $value->ban_title_th }}</td>
                                @php $value->ban_detail_th = __substr($value->ban_detail_th,'100') @endphp
                                <td>{{ $value->ban_detail_th }}</td>
                                <td><i class="fas fa-eye pointer" onclick="window.location='{{ route('admin.detail.banner',$value->id) }}'"></i> <i class="fas fa-edit pointer" onclick="window.location='{{ route('admin.edit.banner',$value->id) }}'" style="margin-left: 15px"></i><i class="far fa-trash-alt pointer" onclick="window.location='{{ route('admin.delet.banner',$value->id) }}'" style="margin-left: 15px"></i></td>
                            </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->                 
        </div>
    </div>
    {{-- @dd($result) --}}
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
@endsection
