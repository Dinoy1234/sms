<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool</title>
        <link rel="shortcut icon" href="{{ url('backend/assets/img/pre.png') }}" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
        <link rel="stylesheet" href="{{ url('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('backend/assets/plugins/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ url('backend/assets/css/style.css') }}">
    </head>

    <body>
        <div class="main-wrapper">

            @include('backend.partials.header')
            @include('backend.partials.sidebar')

            <div class="page-wrapper">
                @yield('master_content')
                {{--  @include('backend.admin.partials.dashboard_content')  --}}
                {{--  @include('backend.partials.footer')  --}}
            </div>
        </div>
        <script src="{{ url('backend/assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ url('backend/assets/js/popper.min.js') }}"></script>
        <script src="{{ url('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('backend/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ url('backend/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ url('backend/assets/plugins/apexchart/chart-data.js') }}"></script>
        <script src="{{ url('backend/assets/js/script.js') }}"></script>
    </body>

</html>
