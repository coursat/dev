<!doctype html>
<html lang="en">
  <head>
    @include("client.inc.head-info")
  </head>
<body>
 

@if(Request::url() === '/')
@else 
  @include("client.inc.header")
@endif



        @yield('content')
 
    @include("client.inc.footer")
    @include("client.inc.body-end")
</body>
</html>

