<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>VAMoS | Virtual Administrative Management of School</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #5 for " name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />

        
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login" style="background-image: url('assets/pages/img/bg2.png')">
        <!-- BEGIN LOGO -->
        {{-- <div class="logo">
            <a href="index.php">
                <img src="/assets/img/snalogo.png" alt="" /> </a>
        </div> --}}
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content"  style="background-color: #3baa7f; padding-top:0px; border-radius: 25px;">
           
                <div class="form-actions">
                    <a href="/"><img src="/assets/img/snalogo1.png" style="width:70px" /></a>
                    <span class="pull-right" >
                        <font style="font-size: 15px;"><b>SINGAPORE NATIONAL ACADEMY </b></font><br>
                        <font style="font-size: 13px;">Raya Pepelegi Pondok Maspion IV <br>Blok GH 1-6, Waru - Sidoarjo</font>
                        </span>
                </div>
        </div>    
        <div class="content" style="background-color: #393e4c; margin-top:-40px">
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){   

                    $("#register-form").show();
                    $("#login-form").hide();
                    
                    
                });    
    </script>
            <!-- BEGIN LOGIN FORM -->
            <form class="register-form" action="snadaftar" method="post" id="register-form" style="background-color: #393e4c;">
                @csrf
              
                <h3 class="font-green">Sign Up</h3>
                <p class="hint"> Enter your personal details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                    <input class="form-control placeholder-no-fix @error('FullName') is-invalid @enderror" type="text" 
                    placeholder="Full Name" name="FullName"  id="regName" value="{{ old('FullName') }}"  required /> </div>
                    @error('FullName')
                        <div class="invalid-feedback" style="margin-top: -10px; color:red; margin-bottom:10px">
                                {{ $message }}
                        </div>
                    @enderror
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">School Email</label>
                    <input class="form-control placeholder-no-fix @error('Email') is-invalid @enderror" type="text" 
                    placeholder="School Email" name="Email"  id="regEmail"  required
                    value="{{ old('Email') }}"
                    /> </div>
                    @error('Email')
                        <div class="invalid-feedback" style="margin-top: -10px; color:red; margin-bottom:10px">
                                {{ $message }}
                        </div>
                    @enderror
                    <p id="email-result" style="margin-top:-10px"></p>

                    {{--<div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="type" placeholder="Password" name="password" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Confirm</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Confirm" name="confirm" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Country</label>
                    <select name="country" class="form-control">
                        <option value="">Country</option>
                        <option value="IS">US</option>
                        <option value="IN">UK</option>
                        <option value="ID">Indonesia</option>
                    </select>
                </div> --}}
                <p class="hint"> Enter your account details below: </p>
                
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control placeholder-no-fix  @error('Username') is-invalid @enderror" type="text" 
                    autocomplete="off" placeholder="Username" name="Username" id="regUser" value="{{ old('Username') }}"
                    required /> </div>
                    <p id="user-result" style="margin-top:-10px;"></p>
                    @error('Username')
                        <div class="invalid-feedback" style="margin-top: -10px; color:red; margin-bottom:10px">
                                {{ $message }}
                        </div>
                    @enderror
                    
                    <script>
                        
                    $(document).ready(function(){                        
                       $("#regUser").keydown(function(){
                        // $("#regUser").css("background-color", "yellow");
                         //alert();
                       });
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
                
                
                    <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix @error('Password') is-invalid @enderror" type="password" 
                    placeholder="Password" autocomplete="off" id="register_password" required
                    name="Password" id="password" /> 
                    @error('Password')
                    <div class="invalid-feedback" style="margin-top: 0px; color:red;"">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off"  required
                    placeholder="Re-type Your Password" name="rpassword" /> </div>
                <div class="form-group margin-top-20 margin-bottom-0">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="tnc" id="tnc" value="{{ old('tnc') }}"/> <font style="color:#ddd"> 
                            I agree to the</font>
                        <a href="javascript:;">Terms of Service </a> <font style="color:#ddd">&</font>
                        <a href="javascript:;">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                    <div class="form-actions">
                        <a href="/" id="close-btn"  name="register-btn" class="register-btn">
                            <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button></a>
                        <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
                    </div>
                </div>
                
                <div class="create-account" style="background-color: #f38423; margin-top:-20px">
                    <p>
                        <a href="/" id="register-btn"  name="register-btn" class="register-btn">Already Have Account, Sign In</a>
                    </p>
                </div>   
            </form>
            <!-- END LOGIN FORM -->
          
        </div>

 

        <div class="copyright"> {{ date('Y') }} © VaMOS | Singapore National Academy <a href="http://sna.sch.id" style="color:#000">sna.sch.id</a></div>
        <!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script> 
<script src="/assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>