<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4" style="font-family: 'Montserrat', sans-serif;">Login</h1>
                    </div>
                    <!-- Login form -->
                    <form class="user" method="POST" action="{{ route('authenticate') }}">
                        @csrf
                        <!-- Email input field -->
                        <div class="form-group">
                            <label for="exampleInputEmail" class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control form-control-user"
                                id="exampleInputEmail" placeholder="Email..." value="{{ old('email') }}" required>
                        </div>
                        <!-- Password input field -->
                        <div class="form-group">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control form-control-user"
                                id="exampleInputPassword" placeholder="Password..." value="{{ old('password') }}"
                                required>
                        </div>
                        <!-- Login button -->
                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
