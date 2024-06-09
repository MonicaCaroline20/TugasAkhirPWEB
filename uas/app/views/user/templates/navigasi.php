<nav>
    <div class="logo">

    </div>
    <div class="main-menu">
        <div class="menu-1"><a href="<?php echo BASEURL;?>/?controller=Homepage">Beranda</a></div>
        <div class="dropdown-menu-2" style="height: 23px;">
            <a href="#">Peminjaman Ruang & Barang</a>
            <div class="drop-content">
                <a href=<?php echo BASEURL ."/?controller=PeminjamanRuang"?>><div class="menu-1">Peminjaman Ruang</div></a>
                <a href=<?php echo BASEURL ."/?controller=PeminjamanBarang"?>><div class="menu-2">Peminjaman Barang</div></a>
                <a href=<?php echo BASEURL ."/?controller=DaftarRuang"?>><div class="menu-3">Daftar Ruang</div></a>
                <a href=<?php echo BASEURL ."/?controller=DaftarBarang"?>><div class="menu-4">Daftar Barang</div></a>
            </div>
        </div>
        <div class="dropdown-menu-3" style="height: 23px;">
            <a href="#">Rekapitulasi</a>
            <div class="drop-content">
                <a href=<?php echo BASEURL ."/?controller=RekapitulasiBarang"?>><div class="menu-1">Rekapitulasi Barang</div></a>
                <a href=<?php echo BASEURL ."/?controller=RekapitulasiRuang"?>><div class="menu-2">Rekapitulasi Ruang</div></a>
            </div>
        </div>
        <div class="menu-4"><a href="<?php echo BASEURL ."/?controller=TentangKami" ?>">Tentang Kami</a></div>
    </div>
    <div class="profile">
        <div class="dropdown-profile">
            <a href="" style="height: 32px;"><iconify-icon icon="mingcute:user-4-line" style="color: white;" width="32" height="32"></iconify-icon></a>
            <div class="drop-content-profile">
                <a href=<?php echo BASEURL ."/?controller=Profile"?>><div class="menu-1">Profile</div></a>
                <a href=<?php echo BASEURL ."/?controller=LogoutUser&method=logout"?>><div class="menu-3" id="liveAlertBtn">Log Out</div></a>
            </div>
        </div>
    </div>
</nav>
