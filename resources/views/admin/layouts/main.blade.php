<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Font Awese -->">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionics -->">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css  ">
    <!-- Theme ste -->">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <!-- overlayScrollbs -->">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picr -->">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- не удаляем левый бургер-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    @include('admin.includes.sidebar')

    @yield('content')

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Blog</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

<!-- ./wrapper -->

<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
    $(function () {
        bsCustomFileInput.init();
    });
</script>
</body>
</html>
