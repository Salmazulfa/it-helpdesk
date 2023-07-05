<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-144808195-1');
    </script>
    <script src="jquery.min.js"></script>

    <link rel="icon" type="image/png" href="favicon.png">
</head>

<body>
    <img class="wave" src="{{ asset('loginbg.png') }}">

    <div align="center">
        @if (session()->has('success'))
            <div class="alert alert-success alert dismissible show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert dismissible show" role="alert">
                {{ session('loginError') }}
            </div>
        @endif

        <div class="container">
            <div class="img">
            </div>
            <div class="login-content">
                <form action="/login" method="post">
                    @csrf
                    <img src="{{ asset('loginuser.png') }}">
                    <h2 class="title">Welcome</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input" @if (Cookie::has('adminuser')) value="{{ Cookie::get('adminuser') }}" @endif name="username" id="username" autofocus required
                                value="{{ old('username') }}">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input" type="text" class="input" @if (Cookie::has('adminpwd')) value="{{ Cookie::get('adminpwd') }}" @endif name="password" required>
                        </div>
                    </div>
                    <div class="checkbox mt-3 float-left">
                        <label>
                          <input type="checkbox" 
                          @if (Cookie::has('adminuser')) checked @endif 
                          value="remember-me" name="rememberme"> Remember me
                        </label>
                      </div>
                    {{-- <a href="#">Forgot Password?</a> --}}

                    <input type="submit" class="btn btn-primary" name="btn-login" value="Login">
                </form>

            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
