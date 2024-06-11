<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
<style></style>

<body>
    @if (!empty($_SESSION['error']))
        <div id="errorAlert" class="alert alert-warning alert-dismissible fade show" role="alert">
            <div class="d-flex justify-content-center align-items-center">
                {{ $_SESSION['error'] }}
            </div>
            <button id="closeErrorAlert" type="button" class="btn-close" aria-label="Close"></button>
        </div>

        @php
            unset($_SESSION['error']);
        @endphp
    @endif

    <script>
        // Đóng thông báo khi nhấn nút đóng
        document.getElementById('closeErrorAlert').addEventListener('click', function() {
            document.getElementById('errorAlert').style.display = 'none';
        });
    </script>

    <img class="wave" src="{{ asset('assets/login/img/wave.png') }}">
    <div class="container">
        <div class="img">
            <img src="{{ asset('assets/login/img/bg.svg') }}">
        </div>
        <div class="login-content">
            <form action="{{ url('auth/handle-login') }}" method="POST"">
                <img src="{{ asset('assets/login/img/avatar.svg') }}">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" id="email" class="input" name="email">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <button type="submit" class="btn btn-primary">Log In</button>
                {{-- <input type="submit" class="btn"> --}}
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/login/js/main.js') }}"></script>
</body>

</html>
