<!--- link -->
<link rel="shortcut icon" href="{{ URL::asset('assets/media/logos/favicon.ico') }}" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
<!--end::Fonts-->

<!--begin::Global Stylesheets Bundle(used by all pages)-->
@if (App::getLocale() == 'tr')
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ URL::asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@else
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ URL::asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ URL::asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <link href="{{ URL::asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
@endif
