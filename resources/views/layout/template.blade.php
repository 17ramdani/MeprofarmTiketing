<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('style/assets/images/favicon.ico') }}" type="image/png" />
    <!--plugins-->
    <link rel="stylesheet" href="{{ asset('style/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/plugins/simplebar/css/simplebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/plugins/metismenu/css/metisMenu.min.css') }}">
    <!-- loader-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/pace.min.css') }}" />
    <script src="{{ asset('style/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
    <link rel="stylesheet" href="{{ asset('style/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/icons.css') }}">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/dark-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/semi-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/header-colors.css') }}">
    <title>Tiketing - Meprofarm </title>
</head>

<body>
    @yield('content')

    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('style/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('style/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.j') }}"></script>
    <script src="{{ asset('style/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/chartjs/js/chartjs-custom.js') }}"></script>
    <script src="{{ asset('style/assets/js/index.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('style/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    </div>
    <!--app JS-->
    <script src="{{ asset('style/assets/js/app.js') }}"></script>
</body>

</html>
