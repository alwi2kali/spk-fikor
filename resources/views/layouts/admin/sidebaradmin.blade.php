<aside class="left-sidebar bg-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="/index.html" title="Sleek Dashboard">
        <svg
          class="brand-icon"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid"
          width="30"
          height="33"
          viewBox="0 0 30 33"
        >
          <g fill="none" fill-rule="evenodd">
            <path
              class="logo-fill-blue"
              fill="#7DBCFF"
              d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
            />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
          </g>
        </svg>
        <span class="brand-name text-truncate">Beranda Pengguna</span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
        <li  class="has-sub active expand" >
          <a  href="{{ route('admin') }}">
            <i class="mdi mdi-view-dashboard-outline"></i>
            <span class="nav-text">Beranda</span>
          </a>
        </li>

        <li  class="has-sub " >
          <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#dashboard"
            aria-expanded="false" aria-controls="dashboard">
            <i class="mdi mdi-pencil-box-multiple"></i>
            <span class="nav-text">Tentang</span> <b class="caret"></b>
          </a>
          <ul  class="collapse show"  id="dashboard"
            data-parent="#sidebar-menu">
            <div class="sub-menu">
                  <li  class="active" >
                    <a class="sidenav-item-link" href="{{ route('mastermekanisme') }}">
                      <span class="nav-text">Mekanisme PKH</span>
                    </a>
                  </li>
                  <li >
                    <a class="sidenav-item-link" href="{{ route('masterkomponen') }}">
                      <span class="nav-text">Komponen PKH</span> 
                    </a>
                  </li>
            </div>
          </ul>
        </li>
    </div>
  </div>
</aside>