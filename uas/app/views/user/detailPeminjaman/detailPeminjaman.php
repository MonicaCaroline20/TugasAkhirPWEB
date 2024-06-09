<div class="wrapper-content">
    <div class="top">
        <div class="title">
            <h1>Detail Peminjaman</h1>
        </div>
        <div class="content">
            <div class="options">
                <div class="option active" style="--optionBackground: url(../../../img/daftarBarang/1\(2\).jfif);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-walking"></i>
                        </div>
                        <div class="info">
                            <div class="main">Jepretan</div>
                            <div class="sub">Gedung Baru</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarBarang/1\(3\).jfif);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <div class="info">
                            <div class="main">Buku</div>
                            <div class="sub">Gedung Lama/Perpustakan</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarBarang/1\(9\).jfif);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-tree"></i>
                        </div>
                        <div class="info">
                            <div class="main">Bowling</div>
                            <div class="sub">Gedung Lama/Perpustakan</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarBarang/1\(10\).jfif);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div class="info">
                            <div class="main">Bet Tenis</div>
                            <div class="sub">Gedung Lama/Perpustakaan</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarBarang/1\(20\).jfif);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="info">
                            <div class="main">CPU</div>
                            <div class="sub">Gedung Lama/Perpustakaan</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarBarang/1\(98\).jfif);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="info">
                            <div class="main">Kertas</div>
                            <div class="sub">Gedung Lama/Perpustakaan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="buttom">
        <div class="buttom-title">
            <h1>Form Detail Peminjaman</h1>
        </div>
        <div class="buttom-content">
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <div class="row">
                            <div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Create Pinjam Barang</div>
                                    </div>
                                <form method="POST" action="<?php echo BASEURL; ?>/?controller=DetailPeminjaman&method=processForm" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <select class="form-control" id="id_barang" onchange="changeValue(this.value)" name="id_barang" required="">
                                                <option value="" hidden="">-- Pilih Barang --</option>
                                                <?php foreach ($data['barangList'] as $barang) : ?>
                                                    <?php if ($barang['stok'] > 0) : ?>
                                                        <option value="<?php echo $barang['id']; ?>" data-stok="<?php echo $barang['stok']; ?>"><?php echo $barang['nama']; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        
                                        <input type="hidden" readonly="" id="nama_barang" name="nama_barang">

                                        <div class="form-group">
                                            <label>Stok Barang Tersedia</label>
                                            <input type="text" readonly="" id="stok" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            

                        <div class="user-info">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Data Peminjam</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Email Pengirim</label>
                                        <input type="email" name="email_user" placeholder="Email Pengirim ..." class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password Pengirim</label>
                                        <input type="password" name="password_user" placeholder="Password Pengirim ..." class="form-control" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah Pinjam Barang</label>
                                        <input min="1" step="1" value="1" type="number" name="qty" class="form-control" placeholder="Jumlah Pinjam Barang ...">
                                    </div>

                                    <div class="form-group">
                                        <label>Tgl Mulai Pinjam</label>
                                        <input type="text" readonly="" name="tgl_mulai" class="form-control" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                                                                                    echo date('Y-m-d H:i:s') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tgl Selesai Pinjam</label>
                                        <input type="datetime-local" name="tgl_selesai" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Lokasi Barang</label>
                                        <textarea class="form-control" name="lokasi_barang" rows="5" placeholder="Lokasi Barang ..." style="white-space: pre-line;"></textarea>
                                    </div>

                                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['user_id'] ?>">
                                    <input type="hidden" name="status" value="menunggu">

                                    </div>
                                    <div class="card-action">
                                        <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
                                        <a href="<?php echo BASEURL; ?>/?controller=PeminjamanBarang" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>