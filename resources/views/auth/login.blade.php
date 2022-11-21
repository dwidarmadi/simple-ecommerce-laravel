<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script>
        tailwind.config = {
            module.exports = {
                prefix: 'tw-',
            }
        }
    </script> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background: #7d2ae8; */
            padding: 30px;
        }

        .container-x {
            position: relative;
            max-width: 850px;
            width: 100%;
            background: #fff;
            padding: 40px 30px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            perspective: 2700px;
        }

        .container-x .cover {
            position: absolute;
            top: 0;
            left: 50%;
            height: 100%;
            width: 50%;
            z-index: 98;
            transition: all 1s ease;
            transform-origin: left;
            transform-style: preserve-3d;
        }

        .container-x #flip:checked~.cover {
            transform: rotateY(-180deg);
        }

        .container-x .cover .front,
        .container-x .cover .back {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .cover .back {
            transform: rotateY(180deg);
            backface-visibility: hidden;
        }

        .container-x .cover::before,
        .container-x .cover::after {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            background: #28a745;
            opacity: 0.2;
            z-index: 12;
        }

        .container-x .cover::after {
            opacity: 0.3;
            transform: rotateY(180deg);
            backface-visibility: hidden;
        }

        .container-x .cover img {
            position: absolute;
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: 10;
        }

        .container-x .cover .text {
            position: absolute;
            z-index: 130;
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .cover .text .text-1,
        .cover .text .text-2 {
            font-size: 26px;
            font-weight: 600;
            color: #fff;
            text-align: center;
        }

        .cover .text .text-2 {
            font-size: 15px;
            font-weight: 500;
        }

        .container-x .forms {
            height: 100%;
            width: 100%;
            background: #fff;
        }

        .container-x .form-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-content .login-form,
        .form-content .signup-form {
            width: calc(100% / 2 - 25px);
        }

        .forms .form-content .title {
            position: relative;
            font-size: 24px;
            font-weight: 500;
            color: #333;
        }

        .forms .form-content .title:before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 25px;
            background: #28a745;
        }

        .forms .signup-form .title:before {
            width: 20px;
        }

        .forms .form-content .input-boxes {
            margin-top: 0px;
        }

        .forms .form-content .input-box {
            display: flex;
            align-items: center;
            height: 50px;
            width: 100%;
            margin: 10px 0;
            position: relative;
        }

        .form-content .input-box input {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 500;
            border-bottom: 2px solid rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .form-content .input-box input:focus,
        .form-content .input-box input:valid {
            border-color: #28a745;
        }

        .form-content .input-box i {
            position: absolute;
            color: #28a745;
            font-size: 17px;
        }

        .forms .form-content .text {
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }

        .forms .form-content .text a {
            text-decoration: none;
        }

        .forms .form-content .text a:hover {
            text-decoration: underline;
        }

        .forms .form-content .button {
            color: #fff;
            margin-top: 40px;
        }

        .forms .form-content .button input {
            color: #fff;
            background: #28a745;
            border-radius: 6px;
            padding: 0;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .forms .form-content .button input:hover {
            background: #28a745;
        }

        .forms .form-content label {
            color: #28a745;
            cursor: pointer;
        }

        .forms .form-content label:hover {
            text-decoration: underline;
        }

        .forms .form-content .login-text,
        .forms .form-content .sign-up-text {
            text-align: center;
            margin-top: 25px;
        }

        .container-x #flip {
            display: none;
        }

        @media (max-width: 730px) {
            .container-x .cover {
                display: none;
            }

            .form-content .login-form,
            .form-content .signup-form {
                width: 100%;
            }

            .form-content .signup-form {
                display: none;
            }

            .container-x #flip:checked~.forms .signup-form {
                display: block;
            }

            .container-x #flip:checked~.forms .login-form {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container-x">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="{{ asset('assets/shop/images/carousel-1.jpg') }}" />
                {{-- <img src="https://i.ibb.co/LJzrb9J/ales-nesetril-Im7l-Zjxe-Lhg-unsplash.jpg" alt=""> --}}
                <div class="text">
                    <span class="text-1">Selamat Datang <br /> </span>
                    {{-- <span class="text-2">Let's get connected</span> --}}
                </div>
            </div>
            <div class="back">
                <img src="{{ asset('assets/shop/images/carousel-1.jpg') }}" />
                {{-- <img class="backImg" src="https://i.ibb.co/LJzrb9J/ales-nesetril-Im7l-Zjxe-Lhg-unsplash.jpg"
                    alt=""> --}}
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    {{-- <x-auth-validation-errors class="text-red" :errors="$errors" /> --}}

                    <div class="mt-5">
                        @if ($errors->any())
                            <div class="mt-4 font-medium text-red-600">
                                {{ __('Whoops! Something went wrong.') }}
                            </div>

                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Enter your email" required
                                    value="{{ old('email') }}" required autofocus name="email">
                            </div>

                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" required required
                                    autocomplete="current-password" name="password">
                            </div>
                            <div class="text">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        Lupa Password?
                                    </a>
                                @endif
                            </div>
                            {{-- <a href="#">Forgot password?</a> --}}

                            <div class="button input-box">
                                <input type="submit" value="Masuk">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup
                                    now</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="signup-form">
                    <div class="title">Daftar Baru</div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    {{-- <x-auth-validation-errors class="text-red" :errors="$errors" /> --}}

                    <div class="mt-5">
                        @if ($errors->any())
                            <div class="mt-4 font-medium text-red-600">
                                {{ __('Whoops! Something went wrong.') }}
                            </div>

                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input id="name" class="block mt-1 w-full" type="text" name="name"
                                    value="{{ old('name') }}" required autofocus placeholder="Enter your name" />
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input id="email" class="block mt-1 w-full" type="email" name="email"
                                    value="{{ old('email') }}" required placeholder="Enter your email" />
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input id="password" class="block mt-1 w-full" type="password" name="password" required
                                    autocomplete="new-password" placeholder="Enter your password" />
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required placeholder="Enter your password again" />
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Sumbit">
                            </div>
                            <div class="text sign-up-text">Sudah memiliki akun? <label for="flip">Login
                                    Sekarang</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
