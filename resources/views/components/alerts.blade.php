    <!-- Alert -->
    @if ($errors->any() || session('message'))
        <div class="alert alert-{{ $errors->any() ? 'danger' : 'success' }} alert-dismissible fade show mx-auto my-4"
            role="alert">
            @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong><br>
            @endforeach
            @if (session('message'))
                {{ session('message') }}
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
