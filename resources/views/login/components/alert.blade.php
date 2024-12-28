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
