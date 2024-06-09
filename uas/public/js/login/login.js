const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");
sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
sign_up_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
});
sign_in_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
});

function validateForm() {
    // Lakukan validasi di sini
    var password = document.getElementById("passwordRegister").value;
    var confirmPassword = document.getElementById("confirm").value;

    console.log("Password:", password);
    console.log("Confirm Password:", confirmPassword);
    if (password !== confirmPassword) {
        document.getElementById("passwordError").innerHTML = "Password dan konfirmasi password tidak sesuai.";
        return false; // Mencegah pengiriman formulir
    }

    // Validasi lainnya bisa ditambahkan di sini

    return true; // Formulir akan dikirim jika tidak ada kesalahan
}
