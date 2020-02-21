<!doctype html>
<html lang="en">
  <head>
    @include("visitor.inc.head-info")
  </head>
<body>


@if(!(isset($meta['is_home_page'])))
    @include('visitor.inc.header')
@endif


        @yield('content')


    @include("visitor.inc.footer")
    @include("visitor.inc.body-end")
</body>
</html>

