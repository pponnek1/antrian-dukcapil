@extends('layouts.mainauth') <!-- Jika Anda menggunakan layout utama -->

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-6">
            <!-- Login -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-6">
                        <a href="{{ url('/') }}" class="app-brand-link">
                            <span class="app-brand-logo">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}" width="55" height="65" alt="kabklaten" srcset="">
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1">Sistem Antrian Dukcapil Klaten</h4>
                    <p class="mb-6">Mohon Untuk login terlebih dahulu</p>

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="mb-6">
                            <label for="email" class="form-label">Email or Username</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                                value="{{ old('email') }}" required autofocus>
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

                        <!-- Remember Me -->
                        <div class="my-8">
                            <div class="d-flex justify-content-between">
                                <div class="form-check mb-0 ms-2">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                    <label class="form-check-label" for="remember_me"> ingat saya </label>
                                </div>
                                <a href="{{ route('password.request') }}">
                                    <p class="mb-0">lupa password?</p>
                                </a>
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="mb-6">
                            <button class="btn btn-warning d-grid w-100" type="submit">Masuk</button>
                        </div>
                    </form>

                    <!-- Registration Link -->
                    <p class="text-center">
                        <span>Belum punya akun?</span>
                        <a href="{{ route('register') }}">
                            <span class="warning">Buat akun</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>
</div>
@endsection
