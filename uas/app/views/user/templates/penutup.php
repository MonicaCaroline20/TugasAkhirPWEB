    <!-- barang -->
    <script type="text/javascript">
        document.querySelector('[name="id_barang"]').addEventListener('input', function (event) {
            var selectedOption = event.target.selectedOptions[0];
            var selectedStok = selectedOption.getAttribute('data-stok');
            var selectedDeskripsi = selectedOption.getAttribute('data-deskripsi');

            document.getElementById('stok').value = selectedStok || '';
            document.getElementById('deskripsi').value = selectedDeskripsi || '';
        });
    </script>

    <script>
        function changeValue(selectedValue) {
            var selectedOption = document.querySelector(`#id_barang [value="${selectedValue}"]`);
            var stock = selectedOption.getAttribute('data-stok');
            var submitButton = document.querySelector('[type="submit"]');

            if (stock === '0') {
                submitButton.setAttribute('disabled', 'disabled');
            } else {
                submitButton.removeAttribute('disabled');
            }

        }
    </script>

    <!-- ruang -->

    <script type="text/javascript">
        document.querySelector('[name="id_ruang"]').addEventListener('input', function (event) {
            var selectedOption = event.target.selectedOptions[0];
            var selectedStok = selectedOption.getAttribute('data-stok');
            var selectedDeskripsi = selectedOption.getAttribute('data-deskripsi');

            document.getElementById('stok').value = selectedStok || '';
            document.getElementById('deskripsi').value = selectedDeskripsi || '';
        });
    </script>

    <script>
        function changeValue(selectedValue) {
            var selectedOption = document.querySelector(`#id_ruang [value="${selectedValue}"]`);
            var stock = selectedOption.getAttribute('data-stok');
            var submitButton = document.querySelector('[type="submit"]');

            if (stock === '0') {
                submitButton.setAttribute('disabled', 'disabled');
            } else {
                submitButton.removeAttribute('disabled');
            }

        }
    </script>

    <!-- Image Slader -->
    <script>
        $(".option").click(function () {
            $(".option").removeClass("active");
            $(this).addClass("active");
        });
    </script>
    <script>
        $(".option-bottom").click(function () {
            $(".option-bottom").removeClass("active");
            $(this).addClass("active");
        });
    </script>

    <!-- typed.js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <?php
        if(isset($_SESSION['user_id'])) {
            $db = new Database();
            
            $userId = $_SESSION['user_id'];
            $sql = "SELECT nama FROM users WHERE id = :id";
            $db->query($sql);
            $db->bind(':id', $userId);
            $user = $db->single();
        
        
            if ($user) {
                echo <<<SCRIPT
        <script>
            var typed = new Typed('#element', {
                strings: ['Hello {$user['nama']}','Selamat datang'],
                typeSpeed: 200,
                loop:true,
            });
        </script>
        SCRIPT;
            }
        }
    ?>

    <!-- clock -->
    <script src="<?php echo BASEURL;?>/public/js/clock/clock.js"></script>


    <!-- profile image -->
    <script src="<?php echo BASEURL;?>/public/js/profile/profile.js"></script>

    <!-- iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
    
    <!-- feathericon -->
    <script>
        feather.replace();
    </script>

    <!-- self js -->
    <script src="<?php echo BASEURL;?>/public/js/liveNotif/liveButton.js"></script>
    <script src="<?php echo BASEURL;?>/public/js/login/login.js"></script>
    
    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="<?php echo BASEURL;?>/public/js/bootstrap/bootstrap.js"></script>
</body>
</html>