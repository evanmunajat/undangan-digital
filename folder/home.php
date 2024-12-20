<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Poppins:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">


    <title>Undangan Ulang Tahun - Kirana</title>
</head>

<style>
.footer p{
    font-size: 13px;
}
</style>

<body>

<audio id="background-music" autoplay loop muted>
        <source src="audio/Selamat Ulang Tahun (feat. Jhelin).mp3" type="audio/mpeg">
    </audio>
    
    <!-- Tombol Musik (hanya untuk Safari) -->
    <div id="music-control" class="music-button" style="display: none;">
        <i id="music-icon" class="fa fa-music"></i>
    </div>

    <div class="content">
        
    <div class="image-container2">
            <div class="overlay"></div>
            <img src="avatar/IMG-20241126-WA0003.jpg" alt="image">
        </div>

        <div class="title-home text-center mt-5 mb-5">
            <h1>6 Tahun</h1>
            <h2>Muhamad Arsyil</h2>
        </div>

        <div class="container">

            <div class="countdown text-center">
                <div class="countdown-item day">
                    <div class="number">
                        <h1 id="days">28</h1>
                    </div>
                    <div class="edit-table">
                        <h1>Tanggal</h1>
                    </div>
                </div>
                <div class="countdown-item second">
                    <div class="number">
                        <h1 id="seconds">12</h1>
                    </div>
                    <div class="edit-table">
                        <h1>Bulan</h1>
                    </div>
                </div>
                <div class="countdown-item minute">
                    <div class="number">
                        <h1 id="minutes">2024</h1>
                    </div>
                    <div class="edit-table">
                        <h1>Tahun</h1>
                    </div>
                </div>
            </div>

            <div class="card-home mt-5">
                <div class="card-body-home">
                    <div class="content-card-home">
                        <h2>Undangan Dari</h2>
                        <hr class="mt-4">
                        <h1>Muhamad Arsyil</h1>
                        <hr class="mt-4">
                        <h3 class="mt-4">Jam 10:00 AM</h3>
                    </div>
                </div>
            </div>

            <div class="card-home3 mt-5">
                <div class="card-body-home3">
                    <div class="content-card-home3">
                        <h2>Lokasi Acara</h2>
                        <hr class="mt-4">
                        <h1 class="mt-4">Rumah Arsyil</h1>
                        <hr class="mt-4">
                        <p>Jl.Kalong II, Kabupaten Bogor, Jawa Barat</p>
                        <hr class="mt-4">
                        <button class="mt-4">
                            <a href="https://maps.app.goo.gl/MWW413wXCDWw6ntM8">
                                <span class="icon"><i class="fa-solid fa-location-dot"></i> Lihat Lokasi Rumah</span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-home3 mt-5">
                <div class="card-body-home3">
                    <div class="content-card-home3">
                        <h2>Hiburan</h2>
                        <hr class="mt-4">
                        <h1 class="mt-4">Badut Sulap</h1>
                    </div>
                </div>
            </div>

            <div class="gift text-center mt-5">
                <div class="image-container3 mt-5">
                    <img src="avatar/IMG-20241126-WA0012.jpg" alt="Gambar Bulat" class="rounded-image">
                </div>
                <div class="text-gift">
                    <p class="mt-5">Terima Kasih telah menambah semangat kegembiraan ulang tahun anak kami yang ke-6 tahun, dengan kehadiran dan hadiah indah dari teman-teman Kirana.</p>
                </div>
                <div class="btn-gift mt-2">
                    <button class="btn-gitf mt-4">
                        <a href="https://wa.me/628580199939">
                            <span class="icon"><i class="fa-solid fa-gift"></i> Kirim Kado</span>
                        </a>
                    </button>
                </div>
            </div>
            <?php
$conn = new mysqli('localhost', 'root', '', 'undangan-ultah');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Menyimpan data ke database
    $stmt = $conn->prepare("INSERT INTO comments (name, comment, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $name, $comment);
    
    if ($stmt->execute()) {
        // Redirect setelah form berhasil disubmit
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Gagal mengirim pesan: " . $stmt->error;
    }

    $stmt->close();
}

// Mengambil data komentar terbaru
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);
$comments = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
}
?>

<div class="form-container mt-5">
    <h2>Pesan & Doa</h2>
    <form action="" method="POST">
        <input class="input-field" id="name" name="name" type="text" maxlength="50" placeholder="Masukkan Nama Anda" required>
        <textarea class="input-pesan mb-2" id="comment" name="comment" maxlength="500" placeholder="Masukkan Pesan & Doa" required></textarea>
        <button class="submit-btn" type="submit">Kirim Ucapan</button>
    </form>
    <hr>
    <h5 class="text-center text-white mb-3">Pesan & Doa</h5>
    <?php if (!empty($comments)): ?>
        <?php foreach ($comments as $comment): ?>
            <div class="message-item">
                <strong><?= htmlspecialchars($comment['name']); ?></strong> | <?= date('j M Y H:i', strtotime($comment['created_at'])); ?>
                <hr>
                <p><?= htmlspecialchars($comment['comment']); ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Belum ada komentar. Jadilah yang pertama memberikan ucapan!</p>
    <?php endif; ?>
</div>




            <div class="thank text-center mt-5">
                <h2>Terima kasih teman-teman atas perhatiannya. Sampai jumpa di acara tersebut.</h2>
            </div>

            <footer class="footer text-center mt-5 text-white">
                <hr class="mt-4">
                <p>&copy; 2024 All Rights Reserved | <a href="https://wa.me/6289603382868">EvanDevs</a></p>
            </footer>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>
