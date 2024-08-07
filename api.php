<?php
// Membuat koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'bei_comp');

// Menerima parameter industri dari permintaan API
$industri = $_GET['industri'];

// Mengambil data perusahaan berdasarkan industri yang dipilih
$queryPerusahaan = "SELECT * FROM comp_desc";
if (!empty($industri)) {
    $queryPerusahaan .= " WHERE industri = '$industri'";
}
$resultPerusahaan = mysqli_query($koneksi, $queryPerusahaan);

// Mengumpulkan data perusahaan dalam array
$perusahaan = array();
while ($row = mysqli_fetch_assoc($resultPerusahaan)) {
    $perusahaan[] = $row;
}

// Mengirimkan respons JSON
header('Content-Type: application/json');
echo json_encode($perusahaan);

// Menutup koneksi ke database
mysqli_close($koneksi);
?>