
<div class="container-home">
    <div class="wrap-banner">
        <h1><span id="element" style="color:white;"></span></h1>
        <div class="wrap-content">
            <div id="carouselExampleDark" class="carousel carousel-dark slide shadow-lg">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img class="item1 d-block w-75 shadow-lg" >
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Peminjaman Ruangan dan Barang</h3>
                            <h4>Tersedia banyak ruangan dan barang yang dapat anda pinjam disini.</h4>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img class="item2 d-block w-75" >
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Macam Macam Ruangan dan Barang</h3>
                            <h4>Mudah dipahami dan mudah untuk digunakan.</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="item3 d-block w-75" >
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Tersedia Informasi Rekapitulasi</h3>
                            <h4>Tersedia informasi untuk rekapitulasi histori peminjaman.</h4>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span aria-hidden="true"><iconify-icon icon="ic:round-play-arrow" style="color: white;" width="60" height="60" rotate="180deg"></iconify-icon></span>
                    <span class="visually-hidden" style="color:white;">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span aria-hidden="true"><iconify-icon icon="ic:round-play-arrow" style="color: white;" width="60" height="60"></iconify-icon></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-box"></div>
<div class="wrapper-content">
    <div class="wrapper-two">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Peminjaman Ruang</h5>
                <a href="<?php echo BASEURL ."/?controller=PeminjamanRuang"?>" class="btn btn-primary"><iconify-icon icon="fluent:ios-arrow-24-filled" style="color: white;" width="32" height="32"  rotate="180deg"></iconify-icon></a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Peminjaman Barang</h5>
                <a href="<?php echo BASEURL ."/?controller=PeminjamanBarang"?>" class="btn btn-primary"><iconify-icon icon="fluent:ios-arrow-24-filled" style="color: white;" width="32" height="32"  rotate="180deg"></iconify-icon></a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Denah Ruangan</h5>
                <a href="<?php echo BASEURL ."/?controller=DaftarRuang"?>" class="btn btn-primary"><iconify-icon icon="fluent:ios-arrow-24-filled" style="color: white;" width="32" height="32"  rotate="180deg"></iconify-icon></a>
            </div>
        </div>
    </div>
    <div class="wrapper-bottom">
        <div class="picture">
            <img src="public/img/room1.jpg" alt="">
        </div>
        <div class="deskripsi">
            <p>
                Website Roomie dibuat untuk bisa mempermudah 
                mahasiswa dalam melakukan peminjaman ruangan
                dan juga barang dengan akses yang lebih fleksibel
                dan tidak terbatas pada lokasi serta waktu.
            </p>
            <a href="<?php echo BASEURL ."/?controller=TentangKami"?>" class="button">Show more</a>
        </div>
    </div>
</div>

<!-- <h1>Apa itu <span>Roomie</span></h1>
<div class="content">
    
</div> -->