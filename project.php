$koneksi = new mysqli("localhost", "root", "", "dbproject");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Tangkap data dari formulir
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tahun_selesai = $_POST['tahun_selesai'];
$url_projek = $_POST['url_projek'];

// Query untuk menyimpan data ke dalam tabel projek
$query = "INSERT INTO project (judul, deskripsi, tahun_selesai, url_projek) VALUES ('$judul', '$deskripsi', $tahun_selesai, '$url_projek')";

// Eksekusi query
if ($koneksi->query($query) === TRUE) {
    echo "Projek berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>