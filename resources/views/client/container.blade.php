<!doctype html>
<html lang="en">
  <head>

    @include("client.inc.header")
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
    </div>

@include("client.inc.footer")
</body>
</html>

