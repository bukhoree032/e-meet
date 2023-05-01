{{--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
 --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
    <head>
        <meta charset="utf-8"/>

        {{-- Title Section --}}
        <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

        {{-- Meta Data --}}
        <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        {{-- Global Theme Styles (used by all pages) --}}
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Datatable --}}
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{ asset('js/datatable/datatable.cssplugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
        <link href="{{ asset('css/selecttwo.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/input-file.css') }}" rel="stylesheet" type="text/css" />
        <!-- upload file -->
        <link href="{{ asset('css/upload_file/upload_file.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/upload_file/upload_file_multiples.css') }}" rel="stylesheet" type="text/css" />
        <!-- upload file -->
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        {{-- Includable CSS --}}
        <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('frontend/editor/ckeditor/ckeditor.js') }}"></script>
        <script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        
        {{-- datetime --}}
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        {{-- <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> --}}

        <link rel="stylesheet" href="https://www.ninenik.com/js/jquery.datetimepicker.css">
        <script src="https://www.ninenik.com/js/jquery.datetimepicker.full.js"></script>
        {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/datePS.css') }}">
        <script src="{{ asset('frontend/assets/js/datePS.js') }}"></script> --}}
      {{-- datetime --}}
      
      <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
      <link href="{{ asset('frontend/assets/css/image_size.css') }}" rel="stylesheet">
        <style>
            .pointer {cursor: pointer;}
        </style>
        @yield('styles')
    </head>

    <body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>

        @if (config('layout.page-loader.type') != '')
            @include('layout.partials._page-loader')
        @endif

        @include('layout.base._layout')

        <script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        {{-- Global Theme JS Bundle (used by all pages)  --}}
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach

        {{-- Includable JS --}}
        @yield('scripts')

    </body>
</html>

