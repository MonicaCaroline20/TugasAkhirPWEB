<div class="container-content">
    <div class="banner">

    </div>
    <div class="content">
        <div class="title">
            <h1>Data Barang</h1>
        </div>
        <div class="sub-content">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <?php foreach ($data['barang'] as $barang) : ?>
                        <tr>
                            <th scope="row"><?php echo $barang['nomor']; ?></th>
                            <td><?php echo $barang['nama']; ?></td>
                            <td><?php echo $barang['stok']; ?></td>
                            <td><?php echo ($barang['stok'] == 0) ? 'tidak tersedia' : 'tersedia'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <ul class="pagination">
                <?php for ($i = 1; $i <= $data['pagination']['totalPages']; $i++) : ?>
                    <li class="page-item <?php echo ($i == $data['pagination']['currentPage']) ? 'active' : ''; ?>">
                        <a class="page-link" href="<?php echo BASEURL . '/?controller=DaftarBarang&method=index&key=' . $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>