<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>

    <title>@yield('title')</title>
    @yield('styles')
</head>

<body>
    

    <div class="container-fluid" style="min-height: 100vh;">
        <div class="d-flex flex-column justify-content-center justify-items-center" style="min-height: 100vh;">


            <div class="container col-5">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>
            <div class="d-flex justify-content-end align-items-center pb-2">
        <a href="/register" class="btn text-white" style="background-color: #294165;">Register</a>
    </div>
            <img src="{{asset('logoImages/lo.png')}}" style="width:200px;height:100px;margin:0 auto 5px auto" />
            <div class=" " style="width:500px;margin:0 auto 0 auto">
                <div class="p-5 shadow" style="background-color: #294165;border-radius:15px">
                    @if (session('error'))
                    <div class="alert alert-danger text-danger text-center">
                        {{ session('error') }}
                    </div>
                    @endif
                    <h2 class="text-white text-center">SIGN IN</h2>
                    <form method="POST" action="{{ route('login_post') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" id="password"
                                name="password" required />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary  text-white" style="background-color: #F8BC1D;">
                            Sign In
                        </button>
                    </form>
                    <div style="text-align: center;">
                        <a href="{{ route('forgot_password') }}" style="text-decoration: none; color: #FFFFFF;">Forgot
                            password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
</body>

</html>