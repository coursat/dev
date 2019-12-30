<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Oficiona</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/themify-icons.css" />
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/et-line.css" />
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/plyr.css" />
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/flag.css" />
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/slick.css" />
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('custom')}}/assets/css/jquery.nstSlider.min.css" />
    <link rel="stylesheet" href="{{asset('')}}css/app.css">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('custom')}}/css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('custom')}}/images/favicon.png">
    <link rel="apple-touch-icon" href="{{asset('custom')}}/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('custom')}}/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('custom')}}/images/icon-114x114.png">


    <!--[if lt IE 9]>
    <script src="{{asset('custom')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('custom')}}/js/respond.min.js"></script>
    <![endif]-->

  </head>
<body>
    <div class="header">

           <div class="container">
                <div class="logo">
                    <img src="{{asset("imgs/logo.png")}}">
                </div>
           </div>

       @include("client.inc.menu")
    </div>
    <div class="container">
        @yield('content')
        test 
    </div>

@include("client.inc.footer")
</body>
</html>

