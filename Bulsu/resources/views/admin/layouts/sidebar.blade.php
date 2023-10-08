<ul class="nav">
          <li class="nav-item nav-profile">
            <a href="{{ route('profil') }}" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{asset('img/faces/mark.png')}}" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Mark Feliciano</span>
                <span class="text-secondary text-small">Admin</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home')}}">
              <span class="menu-title">Dashboard</span>
              <i class="fa-solid fa-house menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Accounts" aria-expanded="false"
              aria-controls="Accounts">
              <span class="menu-title">Account</span>
              <i class="menu-arrow"></i>
              <i class="fa-solid fa-user menu-icon"></i>
            </a>
            <div class="collapse" id="Accounts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> 
                    <a class="nav-link" href="">Create Account</a>
                  </li>
                <li class="nav-item"> <a class="nav-link" href="">Update Password</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item  {{ Request::routeIs('addHotspots') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('addHotspots')}}">
              <span class="menu-title">Hotspot</span>
              <i class="fa-solid fa-location menu-icon"></i>
            </a>
          </li>
          <li class="nav-item {{ Request::routeIs('addScenes') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('addScenes')}}">
              <span class="menu-title">Scene</span>
              <i class="fa-solid fa-location menu-icon"></i>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#buidlings" aria-expanded="false"
              aria-controls="Accounts">
              <span class="menu-title">Manage Campus</span>
              <i class="menu-arrow"></i>
              <i class="fa-solid fa-building menu-icon"></i>
            </a>
            <div class="collapse" id="buidlings">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{ Request::routeIs('config') ? 'active' : '' }}"> <a class="nav-link" href="{{ route('config')}}">Scene</a></li>
                <li class="nav-item {{ Request::routeIs('configHotspot') ? 'active' : '' }}"> <a class="nav-link" href="{{ route('configHotspot')}}">hotspot</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-title">About</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-title">Sign out</span>
              <i class="mdi mdi-arrow-right-bold menu-icon"></i>
            </a>
          </li>
          </li>

        </ul>