<x-guest-layout>
    <section class="auth-page-wrapper p-2 p-lg-4 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="card mb-0 w-100 p-3 p-lg-2" style="background-image: url('{{ asset('public/assets/images/auth/auth.jpg') }}'); background-size: cover; background-position: center;">
            <div class="effect-one"></div>
            <div class="row g-0 align-items-center">
                <div class="col-xxl-8 order-last order-xl-first">
                    <div class="card auth-card border-0 shadow-none mb-0 bg-transparent">
                        <div class="card-body p-4 p-xl-5 d-flex justify-content-between flex-column h-100">
                            <div class="text-center mt-auto">
                                <p class="mb-0 mt-3 text-white">
                                    &copy; <script>document.write(new Date().getFullYear())</script> Dosix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Login Form -->
                <div class="col-lg-8 col-xxl-4 mx-auto order-first order-xl-last">
                    <div class="card shadow-lg border-none m-lg-5">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <div class="mb-4 pb-2">
                                    <a href="/" class="auth-logo">
                                        <img src="{{ asset('public/assets/images/logo-dark.png') }}" alt="logo" height="30" class="auth-logo-dark mx-auto">
                                        <img src="{{ asset('public/assets/images/logo-light.png') }}" alt="logo" height="30" class="auth-logo-light mx-auto">
                                    </a>
                                </div>
                                <h5 class="fs-3xl">Welcome Back</h5>
                                <p class="text-muted">Sign in to continue to Dosix.</p>
                            </div>
    
                            <!-- Laravel Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
    
                            <!-- Laravel Login Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
    
                                <!-- Email Address -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                </div>
    
                                <!-- Password -->
                                <div class="mb-3">
                                    <div class="float-end">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                                        @endif
                                    </div>
                                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                </div>
    
                                <!-- Remember Me -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>
    
                                <!-- Submit Button -->
                                <div>
                                    <button class="btn btn-primary w-100" type="submit">Log in</button>
                                </div>
                            </form>
    
                            <!-- Optional Social Login Buttons -->
                            <div class="mt-4 pt-2 text-center">
                                <h5 class="fs-md mb-4 title">Sign In with</h5>
                                <div class="pt-2 hstack gap-2 justify-content-center">
                                    <button type="button" class="btn btn-subtle-primary btn-icon"><i class="ri-facebook-fill fs-lg"></i></button>
                                    <button type="button" class="btn btn-subtle-danger btn-icon"><i class="ri-google-fill fs-lg"></i></button>
                                    <button type="button" class="btn btn-subtle-dark btn-icon"><i class="ri-github-fill fs-lg"></i></button>
                                    <button type="button" class="btn btn-subtle-info btn-icon"><i class="ri-twitter-fill fs-lg"></i></button>
                                </div>
                            </div>
    
                            <div class="text-center mt-5">
                                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="fw-semibold text-secondary text-decoration-underline">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Login Form -->
            </div>
        </div>
    </section>
</x-guest-layout>