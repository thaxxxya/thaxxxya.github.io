<?php
// Verifikasi apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Contoh data pengguna yang valid (biasanya disimpan di database)
    $validUsername = "user123";
    $validPassword = "password123";

    // Verifikasi nama pengguna dan kata sandi
    if ($username == $validUsername && $password == $validPassword) {
        // Berhasil login
        echo "Login berhasil! Selamat datang, $username.";
    } else {
        // Gagal login
        echo "Login gagal. Periksa kembali username dan password Anda.";
    }
}
?>
