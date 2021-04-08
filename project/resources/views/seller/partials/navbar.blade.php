<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
               <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('seller.pages.index')}}">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Messages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('order.order_total')}}">Total Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('order.order_amount')}}">Cash</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('seller.upcoming.products')}}">Upcoming Products</a>
                  </li>
                </ul>
              </div>                     
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Foyaz Ahmed</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{route('profile')}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav> 
    </div>
  </div>