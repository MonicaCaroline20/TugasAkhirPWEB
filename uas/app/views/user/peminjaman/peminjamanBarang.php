

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Pinjam Barang</h4>
                            <a href="<?php echo BASEURL; ?>/?controller=DetailPeminjaman" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Tgl Mulai</th>
                                            <th>Tgl Selesai</th>
                                            <th>Jumlah Pinjam</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data['barang'] as $pinjambarang) : ?>
                                            <?php if ($_SESSION['user_id'] == $pinjambarang['id_user']) { ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $pinjambarang['nama']; ?></td>
                                                    <td><?php echo $pinjambarang['tgl_mulai']; ?></td>
                                                    <td><?php echo $pinjambarang['tgl_selesai']; ?></td>
                                                    <td><?php echo $pinjambarang['qty']; ?></td>
                                                    <td>
                                                        <?php if ($pinjambarang['status'] == 'menunggu') { ?>
                                                            <div class="badge badge-danger"><p style='color:black;'><?php echo $pinjambarang['status']; ?></p></div>
                                                        <?php } else { ?>
                                                            <div class="badge badge-success" style='color:black;'><?php echo $pinjambarang['status']; ?></div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
														<?php if ($pinjambarang['status'] == 'menunggu') { ?>
															<a href="<?php echo BASEURL; ?>/?controller=DetailBarang&method=index&key=<?php echo $pinjambarang['id_barang']; ?>" title="Detail" class="btn btn-xs btn-success"><iconify-icon icon="mdi:eye" style="color: white; padding:0;" width="24" height="15"></iconify-icon></i></a>
														<?php } elseif ($pinjambarang['status'] == 'approve') { ?>
															<a href="<?php echo BASEURL; ?>/?controller=DetailBarang&method=index&key=<?php echo $pinjambarang['id_barang']; ?>" title="Detail" class="btn btn-xs btn-success"><iconify-icon icon="mdi:eye" style="color: white; padding:0;" width="24" height="15"></iconify-icon></i></a>
															<button type="button" class="btn btn-change btn-warning" data-bs-toggle="modal" data-bs-target="#modalKembalikanPinjamBarang<?php echo $pinjambarang['id'] ?>">
                                                                Kembalikan
                                                            </button>
														<?php } else { ?>
															<a href="<?php echo BASEURL; ?>/?controller=DetailBarang&method=index&key=<?php echo $pinjambarang['id_barang']; ?>" title="Detail" class="btn btn-xs btn-success"><iconify-icon icon="mdi:eye" style="color: white; padding:0;" width="24" height="15"></iconify-icon></i></a>
															<!-- <div class="badge badge-success"><?php echo $pinjambarang['status'] ?></div> -->
														<?php } ?> 
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="modalKembalikanPinjamBarang<?php echo $pinjambarang['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Kembalikan Pinjaman</h5>
                                                            </div>
                                                            <form id="formKembalikanPinjam<?php echo $pinjambarang['id'] ?>" action="<?php echo BASEURL; ?>/?controller=PeminjamanBarang&method=kembalikanPinjaman&key=<?php echo $pinjambarang['id'] ?>/redirect" method="POST">
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id" value="<?php echo $pinjambarang['id'] ?>">
                                                                    <p>Apakah Anda yakin ingin mengembalikan pinjaman ini?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-danger btn-close-modal" onclick="return confirm('Apakah Anda yakin ingin mengembalikan pinjaman ini?')">Ya, Kembalikan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

