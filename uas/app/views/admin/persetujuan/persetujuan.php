

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Persetujuan Barang</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Peminjam</th>
                                            <th>Nama Barang</th>
                                            <th>Tgl Mulai</th>
                                            <th>Tgl Selesai</th>
                                            <th>Jumlah Pinjam</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data['users'] as $pinjambarang) : ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $pinjambarang['nama_peminjam']; ?></td>
                                                    <td><?php echo $pinjambarang['nama_barang']; ?></td>
                                                    <td><?php echo $pinjambarang['tgl_mulai']; ?></td>
                                                    <td><?php echo $pinjambarang['tgl_selesai']; ?></td>
                                                    <td><?php echo $pinjambarang['qty']; ?></td>
                                                    <td>
                                                        <?php if ($pinjambarang['status'] == 'menunggu') { ?>
                                                            <!-- Add buttons for approval and rejection -->
                                                            <form method="POST" action="<?php echo BASEURL; ?>/?controller=Persetujuan&method=approveRequest&key=<?php echo $pinjambarang['id_pinjam']; ?>">
                                                                <button type="submit" class="btn btn-xs btn-success">Disetujui</button>
                                                            </form>
                                                            <form method="POST" action="<?php echo BASEURL; ?>/?controller=Persetujuan&method=rejectRequest&key=<?php echo $pinjambarang['id_pinjam']; ?>">
                                                                <button type="submit" class="btn btn-xs btn-danger">Ditolak</button>
                                                            </form>
                                                        <?php } elseif ($pinjambarang['status'] == 'prosespengembalian') { ?>
                                                            <form method="POST" action="<?php echo BASEURL; ?>/?controller=Persetujuan&method=kembaliPinjaman&key=<?php echo $pinjambarang['id_pinjam']; ?>">
                                                                <button type="submit" class="btn btn-xs btn-success">Barang Sudah Kembali</button>
                                                            </form>
                                                        <?php } else { ?>
                                                            <!-- Display the status if not 'menunggu' -->
                                                            <?php echo $pinjambarang['status']; ?>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
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

