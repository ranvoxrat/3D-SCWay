
<ul class="nav">
          <li class="nav-item nav-profile">
            <a href="{{ route('profil') }}" class="nav-link">
              <div class="nav-profile-image">
            
                <img src="{{asset('img/faces/'.Auth::user()->profile) }}" alt="profile">
              
                <span class="login-status online"></span>
 
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{Auth::user()->fname}} {{Auth::user()->lname}}</span>
                <span class="text-secondary text-small">{{Auth::user()->type}}</span>
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
              <i class="fa-solid fa-user-pen menu-icon"></i>
            </a>
          
            <div class="collapse" id="Accounts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{ Request::routeIs('createAccountUser') ? 'active' : '' }}"> 
                    <a class="nav-link" href="{{ route('createAccountUser')}}">Create Account</a>
                  </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('changePass')}}">Update Password</a>
                </li>
              </ul>
            </div>    
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ManageAccounts" aria-expanded="false"
              aria-controls="ManageAccounts">
              <span class="menu-title">Manage Account</span>
              <i class="menu-arrow"></i>
              <i class="fa-solid fa-user-shield menu-icon"></i>
            </a>
          
            <div class="collapse" id="ManageAccounts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{ Request::routeIs('adminAccount') ? 'active' : '' }}"> 
                    <a class="nav-link" href="{{ route('adminAccount')}}">Admin</a>
                  </li>
                <li class="nav-item"> <a class="nav-link" href="">Staff</a>
                </li>
              </ul>
            </div>    
          </li>
          <li class="nav-item  {{ Request::routeIs('minimap') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('minimap')}}">
              <span class="menu-title">Upload Campus Map</span>
              <i class="fa-solid fa-map menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#buidlings" aria-expanded="false"
              aria-controls="ManageAccounts">
              <span class="menu-title">Manage Campus</span>
              <i class="menu-arrow"></i>
              <i class="fa-solid fa-building menu-icon"></i>
            </a>
            <div class="collapse" id="buidlings">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{ Request::routeIs('uploadMinimap') ? 'active' : '' }}"> <a class="nav-link" href="{{ route('uploadMinimap')}}">Campus Map</a></li>
                <li class="nav-item {{ Request::routeIs('config') ? 'active' : '' }}"> <a class="nav-link" href="{{ route('config')}}">Scene</a></li>
                <li class="nav-item {{ Request::routeIs('configHotspot') ? 'active' : '' }}"> <a class="nav-link" href="{{ route('configHotspot')}}">hotspot</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-title">Sign out</span>
              <i class="mdi mdi-arrow-right-bold menu-icon"></i>
            </a>
          </li>
          </li>

        </ul>