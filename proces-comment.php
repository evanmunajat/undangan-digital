<?php
// Konfigurasi koneksi database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'undangan-ultah';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses data form jika ada input POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $comment = $conn->real_escape_string($_POST['comment']);

    $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

    if ($conn->query($sql) === TRUE) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Ambil komentar dari database
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);
$comments = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
}

$conn->close();
?>
