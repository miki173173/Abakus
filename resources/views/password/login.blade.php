

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login form </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">


    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/icon/icofont/css/icofont.css')}}">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/icon/feather/css/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/icon/themify-icons/themify-icons.css')}}">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/css/jquery.mCustomScrollbar.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/icon/font-awesome/css/font-awesome.min.css')}}">

    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/css/component.css')}}">

    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{URL::to('files/bower_components/select2/css/select2.min.css')}}">

    <!-- notify js Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/bower_components/pnotify/css/pnotify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/bower_components/pnotify/css/pnotify.brighttheme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/bower_components/pnotify/css/pnotify.buttons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/bower_components/pnotify/css/pnotify.history.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/bower_components/pnotify/css/pnotify.mobile.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/pages/pnotify/notify.css')}}">

    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/pages/j-pro/css/demo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/pages/j-pro/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/pages/j-pro/css/j-pro-modern.css')}}">

    <!-- jquery file upload Frame work -->
    <link  rel="stylesheet" type="text/css"  href="{{URL::to('files/assets/pages/jquery.filer/css/jquery.filer.css')}}">
    <link  rel="stylesheet" type="text/css"  href="{{URL::to('files/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}">

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">


    <!-- add multile form -->
    <script src="{{URL::to('files/assets/js/jquery-2.2.0-jquery.min.js')}}"></script>


</head>
<style>
    /* The clock */
    #clock {
        background-color: transparent;
        color: black;
        display: inline-block;
        width: auto;
        padding: 0.25em 1em;
        border-radius: 1px;
    }

    /* Paragraph fix */
    #clock p {
        margin: 5px;
    }

    /* Show time units and seprarator in a line */
    #clock .time-unit, #clock .separator {
        display: inline-block;
        text-align: center;
        margin: 0 0.25em;
    }

    /* Show values using large text */
    #clock .time-unit .large {
        display: block;
        font-size: 1.2em;
    }

    /* Show values using smaller text */
    #clock .time-unit .small {
        display: block;
        font-size: 0.5em;
    }

    /* Align the separator with values */
    #clock .separator {
        font-size: 1.2em;
        vertical-align: top;
        margin-top: -0.1em;
    }
    .day {
        color: #23256F;
        padding-left: 10px;
        font-size: 14px;
    }
    .avatar-upload {
        position: relative;
        max-width: 205px;
        margin: 50px auto;
    }
    .avatar-upload .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
    }
    .avatar-upload .avatar-edit input {
        display: none;
    }
    .avatar-upload .avatar-edit input + label {
        display: inline-block;
        margin-top: 3px;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #FFFFFF;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all 0.2s ease-in-out;
    }
    .avatar-upload .avatar-edit input + label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }
    .avatar-upload .avatar-edit input + label:after {
        content: "\f040";
        font-family: 'FontAwesome';
        color: #757575;
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    }
    .avatar-upload .avatar-preview {
        width: 120px;
        height: 120px;
        position: relative;
        border-radius: 100%;
        border: 1px solid #01a9ac;
        padding: 4px;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }
    .avatar-upload .avatar-preview > div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    /* logo image menu bar */
    .header-navbar .navbar-wrapper .navbar-container .nav-right .user-profile img {
        margin-right: 10px;
        width: 40px;
    }
    .img-radius {
        border-radius: 50%;
        border: 1px solid #23256F;
        padding: 2px;
    }
</style>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded load-height">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header auth-header" header-theme="theme1">
                <div class="navbar-wrapper">
                    <div class="navbar-logo" logo-theme="theme1">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="..\files\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-left" id="clock"><!-- clock -->
                            <span class="wrap-time">
                                <span class="time-unit">
                                    <span class="large day">Mon</span>
                                    <span class="small">DAY</span>
                                </span>
                                <span class="time-unit">
                                    <span class="large hours">00</span>
                                    <span class="small">HOURS</span>
                                </span>
                                <span class="separator">:</span>
                                <span class="time-unit">
                                    <span class="large minutes">00</span>
                                    <span class="small">MINUTES</span>
                                </span>
                                <span class="separator">:</span>
                                <span class="time-unit">
                                    <span class="large seconds">00</span>
                                    <span class="small">SECONDS</span>
                                </span>
                                <span class="time-unit">
                                    <span class="large period">AM</span>
                                    <span class="small">PERIOD</span>
                                </span>
                            </span>
                        </ul><!-- clock end -->
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Soeng Souy</h5>
                                                    <p class="notification-msg">Learn and fixing coding.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="..\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>Soeng Souy</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#large-Modal">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <!-- Modal large-->
        <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-xl-12 col-md-12">
                            <div class="user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-3 user-profile">
                                        <div class="user-card">
                                            <div class="card-block text-center">
                                                <!-- <div class="usre-image"> -->
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>

                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" style="background-image: url(../files/assets/images/avatar-4.jpg);"></div>
                                                    </div>
                                                    <h6 class="m-t-25 m-b-10"></h6>
                                                    <p class="text-muted"></p>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-9">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Email</p>
                                                    <h6 class="text-muted f-w-400"><a href="#!" class="cf_email" data-cfemail="1379767d6a53747e727a7f3d707c7e"></a></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Department</p>
                                                    <h6 class="text-muted f-w-400"></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Section</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Division</p>
                                                    <h6 class="text-muted f-w-400"></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Role</p>
                                                    <h6 class="text-muted f-w-400"></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success"><i class="icofont icofont-check-circled"></i>Save</button>
                </div>
            </div>
        </div><!--end Modal large-->

        <!-- Menu header end -->
        <section class="login-block with-header">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->
                        <form action="{{url('post-login')}}" method="POST" id="logForm">
                            {{ csrf_field() }}
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center txt-primary">Sign In</h3>
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="col-md-6">
                                            <button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
                                        </div>
                                    </div>
                                    <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                    <div class="form-group form-primary">
                                        <input type="email" name="email" class="form-control" placeholder="Email address">
                                        <span class="form-bar"></span>
                                        @if ($errors->has('email'))
                                            <span class="error">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <span class="form-bar"></span>
                                        <label class="float-label"></label>
                                        @if ($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                        </div>
                                    </div>
                                    <p class="text-inverse text-left">If you have an account?<a href="{{url('registration')}}"> <b class="f-w-600">Register here </b></a>for free!</p>
                                </div>
                            </div>
                        </form>
                        <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->

    </section>
        <div class="footer bg-inverse">
            <p class="text-center">Copyright &copy; 2020 Soeng Souy , All rights reserved.</p>
        </div>
    </div>
    <!-- Warning Section Starts -->

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script type="text/javascript" src="..\files\assets\js\common-pages.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script>
    // The week days
    const weekDays = [ 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ];
    // The Clock Ticker
    function clockTicker()
    {
        // Clock units
        var date    = new Date();
        var day     = date.getDay();
        var hrs     = date.getHours();
        var mins    = date.getMinutes();
        var secs    = date.getSeconds();

        // Update hours value if greater than 12
        if( hrs > 12 )
        {
            hrs = hrs - 12;
            document.querySelector( '#clock .period' ).innerHTML = 'PM';
        }
        else
        {
            document.querySelector( '#clock .period' ).innerHTML = 'AM';
        }
        // Pad the single digit units by 0
        hrs     = hrs < 10 ? "0" + hrs : hrs;
        mins    = mins < 10 ? "0" + mins : mins;
        secs    = secs < 10 ? "0" + secs : secs;

// Refresh the unit values
        document.querySelector( '#clock .day' ).innerHTML       = weekDays[ day ];
        document.querySelector( '#clock .hours' ).innerHTML     = hrs;
        document.querySelector( '#clock .minutes' ).innerHTML   = mins;
        document.querySelector( '#clock .seconds' ).innerHTML   = secs;

    // Refresh the clock every 1 second
    requestAnimationFrame( clockTicker );
    }
    // Start the clock
    clockTicker();
</script>
</body>
</html>
