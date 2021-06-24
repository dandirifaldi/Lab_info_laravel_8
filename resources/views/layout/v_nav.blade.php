<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Assets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
                <a href="/barang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All List</p>
                </a>
              </li>
              <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Good Items</p>
                </a>
              </li>
              <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Not Good Items</p>
                </a>
              </li>
              <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Maintenance Items</p>
                </a>
              </li>
              <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Items</p>
                </a>
              </li>
              <!-- <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item {{request()->is('license') ? 'active' : ''}}">
            <a href="/license" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                License
              </p>
            </a>
          </li>
          <li class="nav-item {{request()->is('users') ? 'active' : ''}}">
            <a href="/users" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="{{request()->is('report') ? 'active' : ''}} nav-item">
            <a href="/report" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Report
              </p>
            </a>
          </li>
        </ul>
      </nav>