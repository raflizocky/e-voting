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

                <!-- Alert -->
                @if ($errors->any() || session('success'))
                    <div class="alert alert-{{ $errors->any() ? 'danger' : 'success' }} alert-dismissible fade show mx-auto my-4"
                        role="alert">
                        @if ($errors->has('loginError'))
                            <strong>{{ $errors->first('loginError') }}</strong><br>
                        @else
                            @foreach ($errors->all() as $error)
                                <strong>{{ $error }}</strong><br>
                            @endforeach
                        @endif
                        @if (session('success'))
                            {{ session('success') }}
                        @endif
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"
                                            style="font-family: 'Montserrat', sans-serif;">Login</h1>
                                    </div>
                                    <!-- Login form -->
                                    <form class="user" method="POST" action="{{ route('authenticate') }}">
                                        @csrf
                                        <!-- Email input field -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail" class="sr-only">Email</label>
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="Email..."
                                                value="{{ old('email') }}" required>
                                        </div>
                                        <!-- Password input field -->
                                        <div class="form-group">
                                            <label for="exampleInputPassword" class="sr-only">Password</label>
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password..." value="{{ old('password') }}" required>
                                        </div>
                                        <!-- Login button -->
                                        <button type="submit"
                                            class="btn btn-primary btn-user btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
