@extends('layouts.app')
@section('title','Авторизация')
@section('content')
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="images/breadcrumb/bg/1-1-1919x388.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">Авторизация</h2>
                            <ul>
                                <li>
                                    <a href="{{ asset('/')}}">Главная</a>
                                </li>
                                <li>Авторизация</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-register-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="login-form">
                                <h4 class="login-title">Авторизоваться</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Адрес электронной почты</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Пароль</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember_me">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-1 mt-md-0">
                                        <div class="forgotton-password_info">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Забыли свой пароль?
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pt-5">
                                        <button class="btn btn-custom-size lg-size btn-pronia-primary">Авторизоваться</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here -->
@endsection
