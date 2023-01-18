<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link {{ Request::is('dashboard')? 'active' : '' }}" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Aset Menu</div>
                <a class="nav-link {{ Request::is('dashboard/asets*')? 'active' : '' }}" href="/dashboard/asets">
                    <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                    Aset
                </a>
                <a class="nav-link {{ Request::is('dashboard/areas*')? 'active' : '' }}" href="/dashboard/areas">
                    <div class="sb-nav-link-icon"><i class="fas fa-location-arrow"></i></div>
                    Area
                </a>
                <a class="nav-link collapsed {{ Request::is('dashboard/golongan*')? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Kategori
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('dashboard/golongan-1')? 'active' : '' }}" href="/dashboard/golongan-1">Golongan I</a>
                        <a class="nav-link {{ Request::is('dashboard/golongan-2')? 'active' : '' }}" href="/dashboard/golongan-2">Golongan II</a>
                        <a class="nav-link {{ Request::is('dashboard/golongan-3')? 'active' : '' }}" href="/dashboard/golongan-3">Golongan III</a>
                        <a class="nav-link {{ Request::is('dashboard/golongan-4')? 'active' : '' }}" href="/dashboard/golongan-4">Golongan IV</a>
                        <a class="nav-link {{ Request::is('dashboard/golongan-5')? 'active' : '' }}" href="/dashboard/golongan-5">Golongan V</a>
                        <a class="nav-link {{ Request::is('dashboard/golongan-6')? 'active' : '' }}" href="/dashboard/golongan-6">Golongan VI</a>
                        <a class="nav-link {{ Request::is('dashboard/golongan-7')? 'active' : '' }}" href="/dashboard/golongan-7">Golongan VII</a>
                        <a class="nav-link {{ Request::is('dashboard/golongan-8')? 'active' : '' }}" href="/dashboard/golongan-8">Golongan VIII</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Superadmin</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Administrator
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Login Sebagai:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>