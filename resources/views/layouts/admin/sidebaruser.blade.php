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
              <a  href="{{ route('user') }}">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Beranda</span>
              </a>
            </li>

            <li  class="has-sub " >
              <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#dashboard1"
                aria-expanded="false" aria-controls="dashboard1">
                <i class="mdi mdi-book-open-page-variant"></i>
                <span class="nav-text">Tentang</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard1"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('usermekanisme') }}">
                          <span class="nav-text">Mekanisme PKH</span>
                        </a>
                      </li>
                      <li >
                        <a class="sidenav-item-link" href="{{ route('userkomponen') }}">
                          <span class="nav-text">Komponen PKH</span> 
                        </a>
                      </li>
                </div>
              </ul>
            </li>

                            
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables"
                aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-pencil-box-multiple"></i>
                <span class="nav-text">Apps Vikor</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="tables"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#data-tables1"
                      aria-expanded="false" aria-controls="data-tables1">
                      <span class="nav-text">Kesejahteraan Sosial</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="data-tables1">
                      <div class="sub-menu">
        
                        <li >
                          <a href="{{ route('alternatifkesejahteraan') }}">Data Alternatif</a>
                        </li>

                        <li >
                          <a href="{{ route('kriteriakesejahteraan') }}">Kriteria</a>
                        </li>

                        <li >
                          <a href="{{ route('skripkesejahteraan') }}">Sub Kriteria</a>
                        </li>

                        <li >
                          <a href="{{ route('nilai.alternatifkesejahteraan') }}">Nilai</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Perhitungan</a>
                        </li>
                
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#data-tables2"
                      aria-expanded="false" aria-controls="data-tables2">
                      <span class="nav-text">Pendidikan</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="data-tables2">
                      <div class="sub-menu">
        
                        <li >
                          <a href="basic-data-table.html">Data Alternatif</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Kriteria</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Sub Kriteria</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Rating Kecocokan</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Perhitungan</a>
                        </li>
                
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#data-tables3"
                      aria-expanded="false" aria-controls="data-tables3">
                      <span class="nav-text">Kesehatan</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="data-tables3">
                      <div class="sub-menu">
        
                        <li >
                          <a href="basic-data-table.html">Data Alternatif</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Kriteria</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Sub Kriteria</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Rating Kecocokan</a>
                        </li>

                        <li >
                          <a href="basic-data-table.html">Perhitungan</a>
                        </li>
                
                      </div>
                    </ul>
                  </li>
                </div>
              </ul>
            </li>
        </ul>
      </div>
    </div>
  </aside>