<h4 class="text-center mb-4">Login</h4>
                    
<form method="POST" action="{{ route('authenticate') }}">
    @csrf
    <div class="mb-4">
        <label for="email" class="form-label">Email Address</label>
        <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-envelope text-secondary"></i>
            </span>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
        </div>
    </div>
    
    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-lock text-secondary"></i>
            </span>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
    </div>
    
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-sign-in-alt me-2"></i> Login
        </button>
    </div>
    
    <hr class="my-4">
    
    <div class="text-center">
        <p>Need an account to vote? Contact your administrator.</p>
    </div>
</form>