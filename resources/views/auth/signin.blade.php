@extends('auth.layouts.main')

@section('title', 'Login Form')

@section('content')

<div class="container">
        <div class="cover">
            <div class="front">
                <div class="text">
                </div>
                <div class="text2">
                </div>
                <div class="infoText">
                        <h1>SC-Way</h1>
                        <h4>A <span>3D</span> Campus Guide</h4>
                        <h5>In BULSU-SC</h5>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">
                        <h1>Login<i class="fa-solid fa-arrow-right"></i></h1>
                   </div>
                   <p class="t1">Login your account</p>
                    <form method="POST" >
                    @csrf
                    @method('POST')
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fa-sharp fa-solid fa-lock"></i>
                                <input type="text" placeholder="Enter Username" name="username" id="username" value="{{ old('username') }}"required
                                    autocomplete="off">
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-key"></i>
                                <input type="password" placeholder="Enter Password" name="password" id="password"
                                    required autocomplete="off">
                            </div>
                            @if ($errors->any())
                                <div class="alert-dismiss">
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first() }}</strong>
                                    </div>
                                </div>
                            @endif
                            @if ($message = Session::get('success'))
                               @include('sweetalert::alert')
                            @endif

               


                           

                            <button id="form_submit" type="submit" onclick="confirmDelete()">Login
                                <div class="star-1">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-2">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-3">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-4">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-5">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-6">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- <div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Login</h4>
                    <p>Halo, Login untuk Kelola Virtual Tour Anda</p>
                </div>

                <div class="login-form-body">

                

                    <div class="form-gp">
                        <label for="username">Username</label>
                        <input id="username" type="username"
                            name="username" value="{{ old('username') }}" required>
                        <i class="ti-user"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required>
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">{{ __('Masuk') }} <i class="ti-arrow-right"></i></button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Tidak Punya Akun? <a href="{{ route('register') }}">Registrasi</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->

@endsection
