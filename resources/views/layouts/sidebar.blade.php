<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/home')}}">SURAT GAMPONG</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Sg</a>
          </div>
          <ul class="sidebar-menu">  
              <li class="menu-header">Jenis Pelayanan Surat</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                  <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
              </li>
              <li class="@if (Request::segment(1) == 'sku') active @endif"><a class="nav-link" href="{{ route('sku') }}"><i class="far fa-square"></i> <span>Surat Kurang Mampu</span></a></li>
              <li class="@if (Request::segment(1) == 'sdomisili') active @endif"><a class="nav-link" href="{{ route('sdomisili') }}"><i class="far fa-square"></i> <span>Surat Domisili</span></a></li>
        </aside>
      </div>