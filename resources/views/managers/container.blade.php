<!doctype html>
<html lang="en">
  <head>
    @include("visitor.inc.head-info")
  </head>
<body>
    @include('managers.inc.header')
    @yield('content')

    @include("visitor.inc.footer")
    @include("visitor.inc.body-end")

</body>
</html>

