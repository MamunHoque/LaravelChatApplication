<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">

    <title>Chat App</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico" type="image/x-icon">

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:wght@400;500;700"/>

    <!-- Template CSS -->
    <link class="css-lt" rel="stylesheet" href="{{ asset('assets/css/template.bundle.css" media="(prefers-color-scheme: light)">
    <link class="css-dk" rel="stylesheet" href="{{ asset('assets/css/template.dark.bundle.css"
          media="(prefers-color-scheme: dark)">

    <!-- Theme mode -->
    <script>
        if (localStorage.getItem('color-scheme')) {
            let scheme = localStorage.getItem('color-scheme');

            const LTCSS = document.querySelectorAll('link[class=css-lt]');
            const DKCSS = document.querySelectorAll('link[class=css-dk]');

            [...LTCSS].forEach((link) => {
                link.media = (scheme === 'light') ? 'all' : 'not all';
            });

            [...DKCSS].forEach((link) => {
                link.media = (scheme === 'dark') ? 'all' : 'not all';
            });
        }
    </script>
</head>

<body class="bg-light">

<div class="container">
    <div class="row align-items-center justify-content-center min-vh-100 gx-0">

        <div class="col-12 col-md-5 col-lg-4">
            <div class="card card-shadow border-0">
                <div class="card-body">
                    <div class="row g-6">
                        <div class="col-12">
                            <div class="text-center">
                                <h3 class="fw-bold mb-2">Sign In</h3>
                                <p>Login to your account</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="signin-email" placeholder="Email">
                                <label for="signin-email">Email</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="signin-password" placeholder="Password">
                                <label for="signin-password">Password</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-block btn-lg btn-primary w-100" type="submit">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div class="text-center mt-8">
                <p>Don't have an account yet? <a href="signup.html">Sign up</a></p>
                <p><a href="password-reset.html">Forgot Password?</a></p>
            </div>
        </div>
    </div> <!-- / .row -->
</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/vendor.js"></script>
<script src="{{ asset('assets/js/template.js"></script>
</body>

</html>