<html >
<!--begin::Head-->
<head>
    <title>@yield("title")</title>

    <link rel="shortcut icon" href="{{ URL::asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    @if (App::getLocale() == 'tr')

        <link href="{{ URL::asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{ URL::asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet">
    @endif

    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
