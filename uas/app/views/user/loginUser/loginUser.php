<div class="container">
    <div class="signin-signup">
        <form action="<?php echo BASEURL; ?>/?controller=LoginUser" method="post" class="sign-in-form">
            <h1 class="title">Sign in</h1>
            <label for="email">Email:</label>
            <div class="input-field">
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <label for="password">Password:</label>
            <div class="input-field">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <?php if (isset($data['loginError'])) : ?>
                <div class="error-message" style="color: red; margin-top: 10px;">
                  <?php echo $data['loginError']; ?>
                </div>
            <?php endif; ?>
            <button class="button-1" type="submit" name="login">Login</button>
        </form>
        <form action="<?php echo BASEURL; ?>/?controller=LoginUser" method="post" class="sign-up-form" onsubmit="return validateForm()">
            <h1 class="title">Sign up</h1>
            <div class="first">
                <div class="input-field first-name">
                    <input type="text" name="firstName" placeholder="First Name" id="firstName`" required>
                </div>
                <div class="input-field last-name">
                    <input type="text" name="lastName" placeholder="Last Name" id="lastName" required>
                </div>
            </div>
            <div class="input-field">
                <input type="text" name="username" placeholder="Username" id="username" required>
            </div>
            <div class="input-field">
                <input type="email" name="email" placeholder="Email" id="email" required>
            </div>
            <div class="input-field">
                <input type="text" name="nim" placeholder="Nim" id="nim" required>
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="Password" id="passwordRegister" required>
            </div>
            <div class="input-field">
                <input type="password" name="confirm" placeholder="Confirm Password" id="confirm" required>
            </div>
            <div class="error-message" id="passwordError"></div>
            <button class="button-1" type="submit" name="register">SignUp</button>
        </form>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h2>Welcome!!</h2>
                <p>Website roomie, dengan roomie peminjaman semakin mudah, login untuk melanjutkan.</p>
                <button id="sign-in-btn">Sign in</button>
            </div>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h2>Welcome!!</h2>
                <p>Apakah anda belum memiliki akun? silahkan daftar terlebih dahulu pada bagian registrasi disamping yaa :D.</p>
                <button id="sign-up-btn">Sign up</button>
            </div>
        </div>
    </div>
</div>