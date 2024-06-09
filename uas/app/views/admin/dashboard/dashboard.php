            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $data['userCount']; ?></div>
                        <div class="cardName">Akun Terdaftar</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $data['itemCount']; ?></div>
                        <div class="cardName">Data Barang</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $data['roomCount']; ?></div>
                        <div class="cardName">Data Ruang</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $data['borrowCount']; ?></div>
                        <div class="cardName">Data Terpinjam</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentBorrows">
                    <div class="cardHeader">
                        <h2>Peminjaman Terbaru</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Barang Dipinjam</td>
                                <td>Ruang Dipinjam</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($data['users'] as $user) : ?>
                                <tr>
                                    <td><?php echo $user['nama']; ?></td>
                                    <td><?php echo $user['jumlah_barang_dipinjam']; ?></td>
                                    <td><?php echo $user['jumlah_ruang_dipinjam']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentUser">
                    <div class="cardHeader">
                        <h2>Pengguna Baru</h2>
                    </div>

                    <table>
                        <?php foreach ($data['users'] as $user) : ?>
                            <tr>
                                <td width="60px">
                                <?php
                                    $profilePicture = (isset($user['foto']) && !empty($user['foto'])) ? $user['foto'] : 'img/profile/profile.jpg';
                                ?>
                                    <div class="imgBx"><img src="<?php echo $profilePicture; ?>" alt="Profile Picture"></div>
                                </td>
                                <td>
                                    <h4><?php echo $user['nama']; ?> <br> <span><?php echo $user['nim']; ?></span></h4>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
