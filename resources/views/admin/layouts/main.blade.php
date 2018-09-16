<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Admin | CeliacosMendoza</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="{{ asset('webStyle/assset/ico/favicon.png') }}" type="image/x-icon"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('adminStyle/css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
        @include('admin.parts._menu')
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <!-- START X-NAVIGATION VERTICAL -->
        @include('admin.parts._navBar')
        <!-- END X-NAVIGATION VERTICAL -->
        <div class="page-content-wrap">

            @yield('content')

        </div>

    </div>
</div>

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="{{ asset('adminStyle/js/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('adminStyle/js/plugins/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('adminStyle/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type="text/javascript" src="{{ asset('adminStyle/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>

@yield('script')

<!-- START TEMPLATE -->
{{--<script type="text/javascript" src="{{ asset('adminStyle/js/settings.js') }}"></script>--}}

<script type="text/javascript" src="{{ asset('adminStyle/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('adminStyle/js/actions.js') }}"></script>

</body>
</html>