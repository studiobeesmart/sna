<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able - Signin</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body >
    
    <div class="auth-wrapper aut-bg-img">
        <div class="auth-content">
            @if (Session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Alert !</strong> {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @if (Session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation !</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            <div class="content"  style="background-color: #f38423; padding-top:0px; ">
                <div class="form-actions">
                        <a href="/"><img src="/assets/images/snalogo1.png" style="width:90px; padding:10px" /></a>
                        <span class="pull-right" style="font-size: 15px; color:#fff"><b>SINGAPORE NATIONAL ACADEMY </b>
                        </span>
                </div>
            </div>    
            <div class="card">


               
                <div class="card-body text-center" style="background-color: #393e4c;margin-top:-5px">
                    <form class="login-form" action="snalogin" method="post" id="login-form">
                        @csrf
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input class="form-control form-control-solid placeholder-no-fix @error('username') is-invalid @enderror" type="text" autocomplete="off" 
                        placeholder="Username" name="username" value="{{ old('username') }}"   style="background-color: #393e4c; color:#fff" /> 
                        @error('username')
                        <div class="invalid-feedback" style="color:red;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        
                        <input class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror" type="password" autocomplete="off" 
                        placeholder="Password" name="password" value="{{ old('password') }}"   style="background-color: #393e4c; color:#fff" /> 
                        @error('password')
                        <div class="invalid-feedback" style="color:red;">
                            {{ $message }}
                        </div>
                        @enderror
                        
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Save credentials</label>

                            <a href="/reset" class="text-mute" style="margin-left:35px; color: #fff">Forgot password</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
                    
                    </form>
                </div>
            </div>
            <div class="content"  style="background-color: #3baa7f; padding:20px; ">
                <div class="form-actions">
                    <p class="mb-0" style="text-align:center; color: #fff">Don’t have an account ? 
                        <a href="/reg"> Signup </a>
                    </p>
                </div>
            </div>    
        </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script><script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
