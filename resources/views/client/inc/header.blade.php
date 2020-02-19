<header class="header-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
              @include('client.header.logo')
              </div>
              <div class="header-top-toggler">
                <div class="header-top-toggler-button"></div>
              </div>

              <!--  Main Menu !-->
              <nav class="navbar navbar-expand-xl absolute-nav transparent-nav cp-nav navbar-light bg-light fluid-nav">
                 @include('client.header.header')
              </nav>
              <!-- End Main Menu !-->
              @include('client.header.logined')

            </div>
          </div>
        </div>
      </div>
    </header>
       <!-- Modal -->
       @include('client.inc.login-modal')
