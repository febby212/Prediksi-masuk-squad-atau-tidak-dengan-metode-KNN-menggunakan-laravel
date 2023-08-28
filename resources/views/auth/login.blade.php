<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicons -->
    <link href={{ asset('assets/img/logo-icon.png') }} rel="icon">
    <link href={{ asset('assets/img/logo-nav.png') }} rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="asetLogin/css/login.css">
    <title>Squad Predict | {{ $title }}</title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">
                    <div class="brand-wrapper">
                        <img src="{{ asset('assets/img/logo-nav.png') }}" alt="logo" class="logo">
                    </div>
                    <div class="login-wrapper my-auto">
                        <h1 class="login-title">Sign in</h1>

                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="/auth" method="post" class="row g-3">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="email@example.com">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="enter your passsword">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block login-btn">Sign in</button>
                        </form>
                        <a href="#!" class="forgot-password-link">Forgot password?</a>
                        <p class="login-wrapper-footer-text">Don't have an account? <a href="/regis"
                                class="text-reset">Register here</a> Or <a href="/" class="text-reset">Home</a></p>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="asetLogin/images/squad.jpg" alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
