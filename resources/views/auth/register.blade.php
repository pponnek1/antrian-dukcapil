@extends('auth.mainauth') <!-- Sesuaikan dengan layout utama -->

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-6">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-6">
                        <a href="{{ url('/') }}" class="app-brand-link">
                            <span class="app-brand-logo">
                                <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}" width="55" height="65" alt="kabklaten" srcset="">

                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1">Belum mempunyai akun?</h4>
                    <p class="mb-6">Daftarkan sekarang!</p>

                    <!-- Register Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Username -->
                        <div class="mb-6">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="name" placeholder="Enter your username"
                                value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-6 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required>
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-6 form-password-toggle">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password_confirmation" class="form-control"
                                    name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required>
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="my-8">
                            <div class="form-check mb-0 ms-2">
                                <input class="form-check-input" type="checkbox" id="terms" name="terms">
                                <label class="form-check-label" for="terms">
                                    saya setuju dengan
                                    <a href="javascript:void(0);">kebijakan dan privasi</a>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>
                    </form>

                    <!-- Login Link -->
                    <p class="text-center">
                        <span>Sudah mempunyai akun?</span>
                        <a href="{{ route('login') }}">
                            <span>Login.</span>
                        </a>
                    </p>

                    <!-- Divider and Social Login -->
                </div>
            </div>
            <!-- /Register Card -->
        </div>
    </div>
</div>
@endsection
