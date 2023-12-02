<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status_nikah = $_POST['status_nikah'];
    $jumlah_anak = $_POST['jumlah_anak'];

    if ($status_nikah == "menikah") {
        $jumlah_anak_minimal = 1;
    } else {
        $jumlah_anak_minimal = 0;
    }

    if ($jumlah_anak < $jumlah_anak_minimal) {
        echo "Anda belum menikah, jadi tidak bisa mengisi input jumlah anak.";
        exit;
    }

    echo "Nama: " . $nama . "<br>";
    echo "Agama: " . $agama . "<br>";
    echo "Jabatan: " . $jabatan . "<br>";
    echo "Status Nikah: " . $status_nikah . "<br>";
    echo "Jumlah Anak: " . $jumlah_anak . "<br>";
}
?>
