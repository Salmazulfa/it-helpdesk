<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end --> 

<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <a href="/dashboard"><img src="{{ asset('logoputih.png') }}" alt="ithelpdesk" width="100%"></a>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="/dashboard"><span>Dashboard</span></a></li>

                    <li class="{{ Request::is('LaporanWifi*') ? 'active' : '' }}">
                        <a href="/LaporanWifi"><i class="bi bi-wifi"></i><span>Laporan Permasalahan WI-FI RW</span></a>
                    </li>
                    <li class="{{ Request::is('PermohonanSubdomain*') ? 'active' : '' }}">
                        <a href="/PermohonanSubdomain"><i class="bi bi-globe"></i><span>Permohonan Subdomain</span></a>
                    </li>
                    <li class="{{ Request::is('PermohonanMigrasiServer*') ? 'active' : '' }}">
                        <a href="/PermohonanMigrasiServer"><i class="bi bi-hdd-stack"></i><span>Permohonan Migrasi Server</span></a>
                    </li>
                    <li class="{{ Request::is('PermohonanPembuatanAplikasi*') ? 'active' : '' }}">
                        <a href="/PermohonanPembuatanAplikasi"><i class="bi bi-pc-display-horizontal"></i><span>Permohonan Pembuatan Aplikasi</span></a>
                    </li>
                    <li class="{{ Request::is('PermohonanPengembanganAplikasi*') ? 'active' : '' }}">
                        <a href="/PermohonanPengembanganAplikasi"><i class="bi bi-pc-display"></i><span>Permohonan Pengembangan Aplikasi</span></a>
                    </li>
                    <li class="{{ Request::is('PermohonanNarsumPendampingan*') ? 'active' : '' }}">
                        <a href="/PermohonanNarsumPendampingan"><i class="bi bi-people-fill"></i><span>Permohonan Narasumber dan Pendamping</span></a>
                    </li>
                    <li class="{{ Request::is('PermohonanFasilitasZoom*') ? 'active' : '' }}">
                        <a href="/PermohonanFasilitasZoom"><i class="bi bi-camera-video-fill"></i><span>Permohonan Fasilitas Zoom</span></a>
                    </li>
                    <li>
                        <a href="../logout.php"><span>Logout</span></a>
                    </li> 

                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- sidebar menu area end -->
