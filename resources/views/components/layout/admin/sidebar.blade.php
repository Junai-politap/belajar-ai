<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="index.html" class="b-brand">
                <img src="{{ url('public/admin') }}/assets/images/logo.png" style="object-fit: cover; position: static; width: 20%;" class="logo images">
                <img src="{{ url('public/admin') }}/assets/images/logo.png" style="object-fit: cover; position: static; width: 100%;" class="logo-thumb images">
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/pengguna') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">Data User</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/dataset') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-list"></i></span><span class="pcoded-mtext">Kelola Dataset</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/training') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-list"></i></span><span class="pcoded-mtext">Training Model</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/riwayat-prediksi') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-activity"></i></span><span class="pcoded-mtext">Riwayat Prediksi</span></a>
                </li>

                
               
            </ul>
            
        </div>
    </div>
</nav>
