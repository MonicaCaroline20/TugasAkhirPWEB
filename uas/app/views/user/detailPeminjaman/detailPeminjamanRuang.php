<div class="wrapper-content">
    <div class="top">
        <div class="title">
            <h1>Detail Peminjaman</h1>
        </div>
        <div class="content">
            <div class="options">
                <div class="option active" style="--optionBackground: url(../../../img/daftarRuang/Audit.jpg);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-walking"></i>
                        </div>
                        <div class="info">
                            <div class="main">Audit</div>
                            <div class="sub">Gedung Baru</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarRuang/b1.jpg);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <div class="info">
                            <div class="main">B1</div>
                            <div class="sub">Gedung Lama/Perpustakan</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarRuang/b2.jpg);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-tree"></i>
                        </div>
                        <div class="info">
                            <div class="main">B2</div>
                            <div class="sub">Gedung Lama/Perpustakan</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarRuang/LabAI.jpg);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div class="info">
                            <div class="main">LAB AI</div>
                            <div class="sub">Gedung Lama/Perpustakaan</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarRuang/LabPertanianCerdas.jpg);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="info">
                            <div class="main">LAB Pertanian Cerdas</div>
                            <div class="sub">Gedung Lama/Perpustakaan</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(../../../img/daftarRuang/LabRPL.jpg);">
                    <div class="label">
                        <div class="icon">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="info">
                            <div class="main">Ryper LAB/LAB RPL</div>
                            <div class="sub">Gedung Lama/Perpustakaan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo BASEURL ."/?controller=DaftarRuang"?>" class="btn btn-info" tabindex="-1" role="button" >Show more</a>
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
                            <div class="ruang">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Create Pinjam Ruang</div>
                                    </div>
                                <form method="POST" action="<?php echo BASEURL; ?>/?controller=DetailPeminjamanRuang&method=processForm" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Ruang</label>
                                            <select class="form-control" id="id_ruang" onchange="changeValue(this.value)" name="id_ruang" required="">
                                                <option value="" hidden="">-- Pilih Ruang --</option>
                                                <?php foreach ($data['ruangList'] as $ruang) : ?>
                                                    <?php if ($ruang['stok'] > 0) : ?>
                                                        <option value="<?php echo $ruang['id']; ?>" data-stok="<?php echo $ruang['stok']; ?>"><?php echo $ruang['nama']; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        
                                        <input type="hidden" readonly="" id="nama_ruang" name="nama_ruang">

                                        <div class="form-group">
                                            <label>Stok Ruang Tersedia</label>
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
                                        <label>Jumlah Pinjam Ruang</label>
                                        <input min="1" step="1" value="1" type="number" name="qty" class="form-control" placeholder="Jumlah Pinjam Ruang ...">
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
                                        <label>Lokasi Ruang</label>
                                        <textarea class="form-control" name="lokasi_ruang" rows="5" placeholder="Lokasi Ruang ..." style="white-space: pre-line;"></textarea>
                                    </div>

                                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['user_id'] ?>">
                                    <input type="hidden" name="status" value="menunggu">

                                    </div>
                                    <div class="card-action">
                                        <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
                                        <a href="<?php echo BASEURL; ?>/?controller=PeminjamanRuang" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
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