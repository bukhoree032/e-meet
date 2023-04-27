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
                        <h3 class="card-label">ข้อมูลข่าวกิจกรรม</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{ route('index.banner') }}" class="btn btn-primary font-weight-bolder"><i class="la la-eye"></i>แบนเนอร์</a>
                        <!--end::Button-->
                    </div>
                </div>
                {{-- @dd($result) --}}
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        </thead>
                        <tbody>
                          <tr>
                            <th style="width: 20%">เรื่อง</th>
                            <td style="width: 80%"> {{ $result->ban_title_th ?? null}}</td>
                          </tr>
                          <tr>
                            <th>เรื่อง (อังกฤษ)</th>
                            <td> {{ $result->ban_title_en ?? null}}</td>
                          </tr>
                          <tr>
                            <th >รายละเอียด</th>
                            <td>{{ $result->ban_detail_th ?? null}}</td>
                          </tr>
                          <tr>
                            <th >รายละเอียด (อังกฤษ)</th>
                            <td>{{ $result->ban_detail_en ?? null}}</td>
                          </tr>
                          <tr>
                            <th >รูปปก</th>
                            <td>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{$result->file ?? null}}" alt="" style="width: 100%">
                                    </div>
                                </div>
                            </td>
                          </tr>
                        </tbody>
                    </table>
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
    <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
  
   
    <script src="{{ asset('js/pages/crud/forms/widgets/select2.js') }}"></script>
@endsection