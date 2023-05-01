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
                        <h3 class="card-label">ข้อมูลบันทึกการประชุม</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{ route('manage.create.meeting') }}" class="btn btn-primary font-weight-bolder">
                        <i class="la la-plus"></i>เพิ่ม</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    {{-- @dd($result) --}}
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ตำบล</th>
                                <th>ครั้งที่</th>
                                {{-- <th>lat/สถานที่</th> --}}
                                <th>ว/ด/ป</th>
                                <th>สถานที่</th>
                                <th>เวลาแก้ไข</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $item =>$value)
                            <tr>
                                <td>{{ $item+1 }}</td>
                                <td>{{ $value->district }}</td>
                                <td>{{ $value->round }}</td>
                                <td>{{ $value->meeting_date }}</td>
                                <td>{{ $value->location }}</td>
                                <td>{{ $value->updated_at }}</td>
                                <td>
                                    <a class="fas fa-eye pointer" href="#"></a>
                                    <a class="fas fa-edit pointer" href="#" style="margin-left: 15px" ></a>
                                    <a onclick="return confirm('ท่านต้องการลบข้อมูลใช่หรือไม่ ?')" class="far fa-trash-alt pointer" href="#" style="margin-left: 15px"></a>
                                
                                    {{-- <a class="fas fa-eye pointer" href="{{ route('manage.page.detail_meeting',$value->id) }}"></a>
                                    <a class="fas fa-edit pointer" href="{{ route('manage.edit.meeting',$value->id) }}" style="margin-left: 15px" ></a>
                                    <a onclick="return confirm('ท่านต้องการลบข้อมูลใช่หรือไม่ ?')" class="far fa-trash-alt pointer" href="{{ route('manage.delet.meeting',$value->id) }}" style="margin-left: 15px"></a> --}}
                                </td>
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