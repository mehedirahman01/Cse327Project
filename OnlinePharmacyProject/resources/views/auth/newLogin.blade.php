


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    @if(Session::has('error_message'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      {{Session::get('error_message')}}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    @endif

                                    <form method="POST" class="user" action="{{ url('/clogin') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                                        </div>
                                        <div class="form-group">
                                            <input id="password" class="form-control form-control-user"
                                                            type="password"
                                                            name="password"
                                                            placeholder="Password"
                                                            required autocomplete="current-password" />
                                        </div>

                                        <x-button class="btn btn-primary btn-user btn-block">
                                            {{ __('Login') }}
                                        </x-button>
                                        <hr>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                      @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ url('registration-page') }}">Create an Account!</a> <br>
                                        <a class="small" href="{{ url('/') }}">Return to homepage</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
