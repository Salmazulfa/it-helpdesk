<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->

<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <a href="/AdminDashboard"><img src="{{ asset('logoputih.png') }}" alt="ithelpdesk" width="100%"></a>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ Request::is('AdminDashboard*') ? 'active' : ''}}">
                        <a href="/AdminDashboard">Dashboard</a>
                    </li>

                    <li class="{{ Request::is('form*') ? 'active' : ''}}">
                        <a href="/form">Data Ajuan</a>                       
                        <ul class="sub-menu">
                            <li class="{{ Request::is('form/KelolaWifi*') ? 'active' : '' }}"><a href="/form/KelolaWifi"><i class="bi bi-wifi"></i><span>Permasalahan Wifi</span></a></li>

                            <li class="{{ Request::is('form/KelolaSubdomain*') ? 'active' : '' }}" ><a href="/form/KelolaSubdomain"><i class="bi bi-globe"></i><span>Permohonan Subdomain</span></a></li>

                            <li class="{{ Request::is('form/KelolaMigrasiServer*') ? 'active' : '' }}"><a href="/form/KelolaMigrasiServer"><i class="bi bi-hdd-stack"></i><span>Permohonan Migrasi Server</span></a></li>

                            <li class="{{ Request::is('form/KelolaPembuatanAplikasi*') ? 'active' : '' }}"><a href="/form/KelolaPembuatanAplikasi"><i class="bi bi-pc-display-horizontal"></i><span>Permohonan Pembuatan Aplikasi</span></a></li>

                            <li class="{{ Request::is('form/KelolaPengembanganAplikasi*') ? 'active' : '' }}"><a href="/form/KelolaPengembanganAplikasi"><i class="bi bi-pc-display"></i><span>Permohonan Pengembangan Aplikasi</span></a></li>
                            
                            <li class="{{ Request::is('form/KelolaNarasumberPendampingan*') ? 'active' : '' }}"><a href="/form/KelolaNarasumberPendampingan"><i class="bi bi-people-fill"></i><span>Permohonan Narasumber dan Pendamping</span></a></li>

                            <li class="{{ Request::is('form/KelolaFasilitasZoom*') ? 'active' : '' }}"><a href="/form/KelolaFasilitasZoom"><i class="bi bi-camera-video-fill"></i><span>Permohonan Fasilitas Zoom</span></a></li>
                        </ul>
                    </li>

                    <li class="{{ Request::is('md*') ? 'active' : ''}}">
                        <a href="/md">Master Data</a>                       
                        <ul class="sub-menu">
                            <li class="{{ Request::is('md/ViewKecamatan*') ? 'active' : ''}}"><a href="/md/ViewKecamatan"><span>Kecamatan</span></a></li>
                            <li class="{{ Request::is('md/ViewKelurahan*') ? 'active' : ''}}"><a href="/md/ViewKelurahan"><span>Kelurahan</span></a></li>
                            <li class="{{ Request::is('md/ViewInstansi*') ? 'active' : ''}}"><a href="/md/ViewInstansi"><span>Instansi Daerah</span></a></li>
                        </ul>
                    </li>

                    <li class="{{ Request::is('KelolaUser*') ? 'active' : ''}}">
                        <a href="/KelolaUser">Data User</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- sidebar menu area end -->
