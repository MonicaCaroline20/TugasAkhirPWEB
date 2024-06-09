<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Detail Pinjam Barang</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Nama Peminjam</td>
                            <td>:</td>
                            <td><?php echo $data['detail']['nama_user'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td>:</td>
                            <td><?php echo $data['detail']['nama_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pinjam</td>
                            <td>:</td>
                            <td><?php echo $data['detail']['qty'] ?></td>
                        </tr>
                        <tr>
                            <td>Tgl Mulai</td>
                            <td>:</td>
                            <td><?php echo $data['detail']['tgl_mulai'] ?></td>
                        </tr>
                        <tr>
                            <td>Tgl Selesai</td>
                            <td>:</td>
                            <td><?php echo $data['detail']['tgl_selesai'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php echo $data['detail']['status'] ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi Barang</td>
                            <td>:</td>
                            <td><?php echo $data['detail']['lokasi_barang'] ?></td>
                        </tr>
<!-- 
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td><?php echo $data['detail']['deskripsi'] ?></td>
                        </tr> -->

                        <tr>
                            <td>Foto</td>
                            <td>:</td>
                            <td><img src="public/img/<?php echo $data['detail']['foto_barang']?>" width="400" height="200"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <a href="<?php echo BASEURL; ?>/?controller=PeminjamanBarang" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>
</div>