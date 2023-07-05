<!-- main content area start -->
<div class="main-content">
    <!-- header area start -->
    <div class="header-area">
        <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- profile info & task notification -->
            <div class="col-md-6 col-sm-4 clearfix">
              <ul class="navbar-nav ms-auto pull-right">
                  @auth
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-solid fa-user fa-lg"></i>
                               {{ $user->perangkat->instansi }}
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              
                              <li>
                                  <form action="/logout" method="post">
                                      @csrf
                                      <button type="submit" class="dropdown-item text-danger"><i
                                              class="bi bi-box-arrow-right"></i> Logout</button>
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endauth
              </ul>
          </div>
        </div>
    </div>
    <!-- header area end -->
