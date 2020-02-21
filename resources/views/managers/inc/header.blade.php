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
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto job-browse">
                        <li class="nav-item dropdown">
                          <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Browse Courses</a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="search-by">
                              <h5>BY Category</h5>
                              <ul>
                                <li><a href="{{url('/search')}}">Accounting / Finance <span>(233)</span></a></li>
                                <li><a href="#">Education <span>(46)</span></a></li>
                                <li><a href="#">Design &amp; Creative <span>(156)</span></a></li>
                                <li><a href="#">Health Care <span>(98)</span></a></li>
                                <li><a href="#">Engineer &amp; Architects <span>(188)</span></a></li>
                                <li><a href="#">Marketing &amp; Sales <span>(124)</span></a></li>
                                <li><a href="#">Garments / Textile <span>(584)</span></a></li>
                                <li><a href="#">Customer Support <span>(233)</span></a></li>
                              </ul>
                            </li>
                            <li class="search-by">
                              <h5>BY LOcation</h5>
                              <ul>
                                <li><a href="#">New York City <span>(508)</span></a></li>
                                <li><a href="#">Washington, D.C <span>(96)</span></a></li>
                                <li><a href="#">Chicago <span>(155)</span></a></li>
                                <li><a href="#">San Francisco <span>(24)</span></a></li>
                                <li><a href="#">Los Angeles <span>(268)</span></a></li>
                                <li><a href="#">Boston <span>(46)</span></a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>

                  <ul class="navbar-nav ml-auto main-nav">
                    <li class="menu-item active"><a title="Home" href="home-1.html">Home</a></li>
                  <li class="menu-item post-job"><a title="Title" href="{{url('/dashboard')}}"><i class="fas fa-plus"></i>Post Course</a></li>

                  </ul>


                    </div>
                    <div class="top-nav">
                        <div class="dropdown header-top-account">
                            <a href="#" class="account-button"><i class="fas fa-graduation-cap"></i></a>
                            <div class="account-card" id="accound-show">
                              <div class="header-top-account-info">
                                <a href="#" class="account-thumb">
                                  <img src="images/account/thumb-1.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="account-body">
                                  <h5><a href="#">Robert Chavez</a></h5>
                                  <span class="mail">chavez@domain.com</span>
                                </div>
                              </div>
                              <ul class="account-item-list">
                                <li><a href="#"><span class="ti-user"></span>Account</a></li>
                                <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                                <li><a href="#"><span class="ti-power-off"></span>Log Out</a></li>
                              </ul>
                            </div>
                          </div>
                    </div>

            </nav>

            <!-- End Main Menu !-->
          </div>
        </div>
      </div>
    </div>
  </header>
     <!-- Modal -->
     @include('visitor.inc.login-modal')
