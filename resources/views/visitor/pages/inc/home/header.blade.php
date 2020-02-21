
  <header>
    <nav class="navbar navbar-expand-xl absolute-nav transparent-nav cp-nav navbar-light bg-light fluid-nav">
        <a class="navbar-brand" href="index.html">
            @include('visitor.header.logo')
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @include("visitor.header.header")
      </nav>
      @include('visitor.header.logined')
      @include('visitor.inc.login-modal')
    </header>
  @include("visitor.pages.inc.home.banner")
