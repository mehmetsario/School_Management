<!DOCTYPE html>
@if (App::getLocale() == 'ar')
    <html direction="rtl" dir="rtl" style="direction: rtl">
@else
    <html lang="en">
@endif
<head>
    <meta charset="utf-8">
    @include('layouts._head')
    @yield('css')
    <title>@yield('title')</title>
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    @include('layouts._main-header')

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            @yield('content')
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
    </div>
    <!--end::Content-->
    @include('layouts._footer')
    @include('layouts._footer-scripts')
    @yield('JavaScript')
</body>

</html>
