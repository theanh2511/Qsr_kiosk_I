<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'AdminLTE 2'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">

{{--Custom CSS--}}
{!! public_url('css/core.css') !!}
{!! public_url('css/jquery.alerts.css')!!}
{!! public_url('css/colorbox.css')!!}
{!! public_url('css/jquery-ui.css')!!}

@if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
@endif

<!-- Theme style -->
{!! public_url('vendor/adminlte/dist/css/AdminLTE.css') !!}
@if(config('adminlte.plugins.datatables'))
    <!-- DataTables with bootstrap 3 style -->
        <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css">
        @endif

    @yield('adminlte_css')

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition @yield('body_class')">

@yield('body')

<script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>

@if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endif

@if(config('adminlte.plugins.datatables'))
    <!-- DataTables with bootstrap 3 renderer -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
@endif

@if(config('adminlte.plugins.chartjs'))
    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
@endif

<script>
    var _sysLocate = '{!! config('app.locale') !!}';
</script>
{!! public_url('js/core/libraries/jquery.min.js')!!}
{!! public_url('js/core/libraries/bootstrap.min.js')!!}
{!! public_url('js/core/libraries/jquery_ui/jquery-ui.min.js')!!}
{!! public_url('js/plugins/ui/moment/moment.min.js')!!}
{!! public_url('js/plugins/loaders/blockui.min.js')!!}
{!! public_url('js/common/jquery.alerts.js')!!}
{!! public_url('js/common/jquery.colorbox.js')!!}
{!! public_url('js/common/jquery.balloon.js')!!}
{!! public_url('js/message/msg.js') !!}
{!! public_url('js/common/common.js') !!}

@yield('adminlte_js')

<div class="hidden">
    @yield('content_hidden')
</div>


</body>
</html>
