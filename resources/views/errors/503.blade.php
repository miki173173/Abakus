<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>503 | Service Unavailable</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" href="{{URL::to('src/files/extra-pages/404/1/img/favicon.ico')}}" type="image/x-icon">
	<!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::to('files/extra-pages/404/1/css/style.css')}}">

	<body>

        <div class="image"></div>

        <!-- Your logo on the top left -->
        <a href="{{url('login')}}" class="logo-link" title="back home">

            <img src="{{URL::to('files/extra-pages/404/1/img/logo.png')}}" class="logo" alt="Soeng Souy" width="250em;">

        </a>

        <div class="content">

            <div class="content-box">

                <div class="big-content">

                    <!-- Main squares for the content logo in the background -->
                    <div class="list-square">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>

                    <!-- Main lines for the content logo in the background -->
                    <div class="list-line">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>

                    <!-- The animated searching tool -->
                    <i class="fa fa-search" aria-hidden="true"></i>

                    <!-- div clearing the float -->
                    <div class="clear"></div>

                </div>

                <!-- Your text -->
                <h1>Oops! Error 503 Service Unavailable.</h1>

                <p>The page you were looking for doesn't exist.<br>
                    We think the page may have moved.</p>
            </div>

        </div>

        <footer class="light">

            <ul>
                <li><a href="{{url('login')}}">Home</a></li>

                <li><a href="{{url('login')}}">Search</a></li>

                <li><a href="{{url('login')}}">Help</a></li>

                <li><a href="{{url('login')}}">Trust & Safety</a></li>

                <li><a href="{{url('login')}}">Sitemap</a></li>

                <li><a href="https://www.facebook.com/soengsouy.com.kh/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC3hmSvBOttz62UEkfHLxu5Q"><i class="fa fa-youtube"></i></a></li>
            </ul>

        </footer>
	    <script src="{{URL::to('files/extra-pages/404/2/js/jquery.min.js')}}"></script>
	    <script src="{{URL::to('files/extra-pages/404/2/js/bootstrap.min.js')}}"></script>
    </body>

</html>

