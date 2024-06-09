<div class="container-rekap">
    <div class="bagian-1">
        <div class="clock shadow">
            <div class="left">
                <p id="date"></p>
            </div>
            <div class="right">
                <p id="time"></p>
            </div>
        </div>
    </div>
    <div class="bagian-2" style="display:flex; flex-direction:column;">
        <table class="table table-borderless table-dark">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Tgl Mulai</th>
                    <th scope="col">Tgl Selesai</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Lokasi</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php $counter = 1; ?>
                <?php foreach ($data['rekapitulasibarang'] as $rekap) : ?>
                    <tr>
                        <th scope="row"><?php echo $counter++; ?></th>
                        <td><?php echo $rekap['nama_user']; ?></td>
                        <td><?php echo $rekap['nama_barang']; ?></td>
                        <td><?php echo $rekap['tgl_mulai']; ?></td>
                        <td><?php echo $rekap['tgl_selesai']; ?></td>
                        <td><?php echo $rekap['qty']; ?></td>
                        <td><?php echo $rekap['lokasi_barang']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <ul class="pagination">
            <?php for ($i = 1; $i <= $data['pagination']['totalPages']; $i++) : ?>
                <li class="page-item <?php echo ($i == $data['pagination']['currentPage']) ? 'active' : ''; ?>">
                    <a class="page-link" href="<?php echo BASEURL . '/?controller=RekapitulasiBarang&method=index&key=' . $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>