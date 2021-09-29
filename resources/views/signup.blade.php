<!DOCTYPE html>
<html lang="en">

<head>
    <title>VAMoS - Signin</title>
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
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="auth-wrapper aut-bg-img">
        <div class="auth-content">
            <div class="content"  style="background-color: #3baa7f; padding-top:0px; ">
                <div class="form-actions">
                        <a href="/"><img src="/assets/images/snalogo1.png" style="width:90px; padding:10px" /></a>
                        <span class="pull-right" style="font-size: 15px; color:#fff"><b>SINGAPORE NATIONAL ACADEMY </b>
                        </span>
                </div>
            </div>    
            <div class="card">
                <div class="card-body text-center" style="background-color: #393e4c;">
                    <div class="mb-4">
                        <i class="feather icon-user-plus auth-icon"></i>
                    </div>
                    <form class="register-form" action="snadaftar" method="post" id="register-form" style="background-color: #393e4c;">
                        @csrf
                        
                    <div class="input-group mb-3">
                        <input class="form-control placeholder-no-fix @error('FullName') is-invalid @enderror" type="text" 
                        placeholder="Full Name" name="FullName"  id="regName" value="{{ old('FullName') }}"  required
                        style="background-color: #393e4c; color:#fff" />
                        @error('FullName')
                            <div class="invalid-feedback" style="margin-top: -10px; color:red; margin-bottom:10px">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>                    
                    <div class="input-group mb-3">
                        <input class="form-control placeholder-no-fix @error('Email') is-invalid @enderror" type="text" 
                    placeholder="School Email" name="Email"  id="regEmail"  required
                    style="background-color: #393e4c; color:#fff"
                    value="{{ old('Email') }}"
                    /> 
                    @error('Email')
                        <div class="invalid-feedback" style="color:red; margin-bottom:10px">
                                {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <p id="email-result" style="margin-top:-10px"></p>
                    <p class="hint"> Enter your account details below: </p>
                    
                    <div class="input-group mb-3">
                        <input class="form-control placeholder-no-fix  @error('Username') is-invalid @enderror" type="text" 
                        autocomplete="off" placeholder="Username" name="Username" id="regUser" value="{{ old('Username') }}"
                        required style="background-color: #393e4c; color:#fff" />
                        
                        @error('Username')
                            <div class="invalid-feedback" style="color:red; margin-bottom:10px">
                                    {{ $message }}
                            </div>
                        @enderror
                        
                    </div>
                    <p id="user-result" style="margin-top:-10px;"></p>
                   
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        
                        $(document).ready(function(){                        
                            // $("#regUser").keydown(function(){
                            //  $("#regUser").css("background-color", "#eaedff");
                            // });
                            // $("#password").keydown(function(){
                            //     $("#password").css("background-color", "#eaedff");
                            // })
                            // $("#rpassword").keydown(function(){
                            //     $("#rpassword").css("background-color", "#eaedff");
                            // })
                            // $("#regEmail").keydown(function(){
                            //     $("#regEmail").css("background-color", "#eaedff");
                            // })
                            // $("#regName").keydown(function(){
                            //     $("#regName").css("background-color", "#eaedff");
                            // })

                          $("#regUser").keyup(function(){
                            var clanname = $(this).val();
                            
                                     if(clanname.length < 5){
                                         
                                         $("#user-result").html('username 5 characters minimum');return;
                                         
                                         //console.log(data);
                                    }
    
                                    if (clanname.length >= 5) {        
                                        $.ajax({
                                            type: "POST",
                                            url: '/espCekUser',
                                            data: { Username: clanname, _token: '{{csrf_token()}}' },
                                            success: function (data) {
                                            //console.log(data);
                                           // alert(data);
                                                if(data=="NO"){
                                                    $("#user-result").html('username is not available');
                                                    $("#user-result").css("color", "red");
                                                }else{
                                                    $("#user-result").html('');return;
                                                }
                                            },
                                            error: function (data, textStatus, errorThrown) {
                                                console.log(data);
                                            },
                                        });
                                    } else if (clanname.length >= 3) { $("#user-result").html('');return;
                                    }
    
                          });
    
                          $("#regEmail").keyup(function(){
                            var clanname = $(this).val();
                            
                                        $.ajax({
                                            type: "POST",
                                            url: '/espCekEmail',
                                            data: { reg_email: clanname, _token: '{{csrf_token()}}' },
                                            success: function (data) {
                                            //console.log(data);
                                                if(data=="NO"){
                                                    $("#email-result").html('email has been registered');
                                                    $("#email-result").css("color", "red");
                                                }else{
                                                    $("#email-result").html('');return;
                                                }
                                            },
                                            error: function (data, textStatus, errorThrown) {
                                                console.log(data);
                                            },
                                        });
                                    
                          });
    
    
    
    
                        });
                        </script>
                    
                
                    
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('Password') is-invalid @enderror" 
                        placeholder="Password" autocomplete="off" id="password" required
                        name="Password" id="password"  style="background-color: #393e4c; color:#fff" /> 
                        @error('Password')
                        <div class="invalid-feedback" style="margin-top: 0px; color:red;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control @error('RPassword') is-invalid @enderror" 
                        placeholder="Re-type Password" autocomplete="off" required
                        name="RPassword" id="rpassword"  style="background-color: #393e4c; color:#fff" /> 
                        @error('RPassword')
                        <div class="invalid-feedback" style="margin-top: 0px; color:red;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="" required>
                            <label for="checkbox-fill-a1" class="cr"> Terms of Service</label>
                        </div>

                        
                    </div>

                  
                    <button type="submit" class="btn btn-primary shadow-2 mb-4">Sign up</button>
                   
                </div>
                <div class="content"  style="background-color: #f38423; padding:20px; margin-top:-30px">
                    <div class="form-actions">
                        <p class="mb-0" style="text-align:center; color: #fff"> Allready have an account?  
                            <a href="/"> Log in </a>
                        </p>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script><script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
