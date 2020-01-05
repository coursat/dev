<!doctype html>
<html lang="en">
  <head>
    @include("client.inc.head")
  </head>
<body>
 
    @if(Request::path() === '/')
         @include("client.inc.header")
    @else
    
    @endif
 

        @yield('content')
 

    @include("client.inc.footer")
</body>
</html>

