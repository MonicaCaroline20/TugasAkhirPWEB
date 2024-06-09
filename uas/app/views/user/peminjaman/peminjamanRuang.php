

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Pinjam Ruang</h4>
                            <a href="<?php echo BASEURL; ?>/?controller=DetailPeminjamanRuang" class="btn btn-primary btn-round ml-auto">
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
                                            <th>Nama Ruang</th>
                                            <th>Tgl Mulai</th>
                                            <th>Tgl Selesai</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data['ruang'] as $pinjamruang) : ?>
                                            <?php if ($_SESSION['user_id'] == $pinjamruang['id_user']) { ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $pinjamruang['nama']; ?></td>
                                                    <td><?php echo $pinjamruang['tgl_mulai']; ?></td>
                                                    <td><?php echo $pinjamruang['tgl_selesai']; ?></td>
                                                    <td>
                                                        <?php if ($pinjamruang['status'] == 'menunggu') { ?>
                                                            <div class="badge badge-danger"><p style='color:black;'><?php echo $pinjamruang['status']; ?></p></div>
                                                        <?php } else { ?>
                                                            <div class="badge badge-success" style='color:black;'><?php echo $pinjamruang['status']; ?></div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
														<?php if ($pinjamruang['status'] == 'menunggu') { ?>
															<a href="<?php echo BASEURL; ?>/?controller=DetailRuang&method=index&key=<?php echo $pinjamruang['id_ruang']; ?>" title="Detail" class="btn btn-xs btn-success"><iconify-icon icon="mdi:eye" style="color: white; padding:0;" width="24" height="15"></iconify-icon></i></a>
														<?php } elseif ($pinjamruang['status'] == 'approve') { ?>
															<a href="<?php echo BASEURL; ?>/?controller=DetailRuang&method=index&key=<?php echo $pinjamruang['id']; ?>" title="Detail" class="btn btn-xs btn-success"><iconify-icon icon="mdi:eye" style="color: white; padding:0;" width="24" height="15"></iconify-icon></i></a>
															<button type="button" class="btn btn-change btn-warning" data-bs-toggle="modal" data-bs-target="#modalKembalikanPinjamRuang<?php echo $pinjamruang['id'] ?>">
                                                                Kembalikan
                                                            </button>
														<?php } else { ?>
															<a href="<?php echo BASEURL; ?>/?controller=DetailRuang&method=index&key=<?php echo $pinjamruang['id']; ?>" title="Detail" class="btn btn-xs btn-success"><iconify-icon icon="mdi:eye" style="color: white; padding:0;" width="24" height="15"></iconify-icon></i></a>
														<?php } ?>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" style="padding-top:5rem;" id="modalKembalikanPinjamRuang<?php echo $pinjamruang['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Kembalikan Pinjaman</h5>
                                                            </div>
                                                            <form id="formKembalikanPinjam<?php echo $pinjamruang['id'] ?>" action="<?php echo BASEURL; ?>/?controller=PeminjamanRuang&method=kembalikanPinjaman&key=<?php echo $pinjamruang['id'] ?>/redirect" method="POST">
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id" value="<?php echo $pinjamruang['id'] ?>">
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

