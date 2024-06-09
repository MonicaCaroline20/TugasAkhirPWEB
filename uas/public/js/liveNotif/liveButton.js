
document.getElementById("liveAlertBtn").addEventListener("click", function () {
    showLogoutConfirmation();
});

function showLogoutConfirmation() {
    var confirmation = confirm("Apakah Anda yakin ingin keluar?");
    if (confirmation) {
        // Jika pengguna mengklik OK, arahkan ke halaman logout
        window.location.href = "http://localhost/Roomie/public/logoutUser/logout"; // Ganti dengan halaman logout Anda
    }
    // Jika pengguna mengklik Cancel, tidak perlu melakukan apa-apa
}