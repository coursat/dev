<header class="header-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
              @include('visitor.header.logo')
              </div>
              <div class="header-top-toggler">
                <div class="header-top-toggler-button"></div>
              </div>

              <!--  Main Menu !-->
              <nav class="navbar navbar-expand-xl absolute-nav transparent-nav cp-nav navbar-light bg-light fluid-nav">
                 @include('visitor.header.header')
              </nav>
              <!-- End Main Menu !-->
              @include('visitor.header.logined')

            </div>
          </div>
        </div>
      </div>
    </header>
       <!-- Modal -->
       @include('visitor.inc.login-modal')
