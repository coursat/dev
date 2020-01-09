<!doctype html>
<html lang="en">
  <head>
    @include("client.inc.head")
  </head>
<body>

 <!-- Header -->
    <header>

      @include("client.inc.nav")
      @include("client.inc.login-modal")

    </header>
    <!-- Header End -->

    @include("client.pages-section.home.banner")

    <div class="container">
        @yield('content')
    </div>

    @include("client.inc.footer")
</body>
</html>

