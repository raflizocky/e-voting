<!DOCTYPE html>
<html lang="en">

<x-header>{{ $title }}</x-header>

<body class="bg-gradient-light">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
        style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; max-width: 100vw;">
        </div>
    </nav>

    <div class="container" style="min-height: 80vh; display: flex; flex-direction: column;">
        <div class="row justify-content-center align-items-center flex-grow-1">
            <div class="col-xl-10 col-lg-12 col-md-9">

                @include('login.components.alert')

                @include('login.components.form')

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('template/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }} async></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}" defer></script>

</body>

</html>
