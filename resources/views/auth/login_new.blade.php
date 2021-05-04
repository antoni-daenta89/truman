<!doctype html>
<html lang="en">
<head>
<title>IPI Customer Tracking Order System</title>
</head>
<link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
<link href="{{asset('css/logintheme.css')}}" rel="stylesheet" media="all">
<body>
  <div class="stars"></div>
  <div class="twinkling"></div>
  <div class="clouds"></div>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content boxshadow">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('images/logologin.png')}}" alt="IPI Website">
                            </a>
                        </div>
                        @if(count($errors))
                            @foreach($errors->all() as $error)
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                              {{$error}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @endforeach
                        @endif

                        <div class="login-form">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                  <label>Username</label>
                                  <input id="username" type="text" class="form-control au-input au-input--full" name="username" value="{{ old('username') }}" required autofocus>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                    <label>
                                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>IPI PAS is Developed and Powered by System Development Division.<br/> Copyright © 2019 PT. Industri Pembungkus Internasional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
