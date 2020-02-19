
  <header>
    <nav class="navbar navbar-expand-xl absolute-nav transparent-nav cp-nav navbar-light bg-light fluid-nav">
        <a class="navbar-brand" href="index.html">
            @include('client.header.logo')
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @include("client.header.header")
      </nav>
      @include('client.header.logined')
      @include('client.inc.login-modal')
    </header>
  @include("client.pages.inc.home.banner")
