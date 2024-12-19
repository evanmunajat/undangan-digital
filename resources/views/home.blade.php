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
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">

    <title>Undangan Ulang Tahun - Kirana</title>
</head>

<body>

    <audio id="background-music" autoplay loop muted>
        <source src="{{ asset('frontend/asset/audio/Selamat Ulang Tahun (feat. Jhelin).mp3') }}" type="audio/mpeg">
    </audio>
    
    <!-- Tombol Musik (hanya untuk Safari) -->
    <div id="music-control" class="music-button" style="display: none;">
        <i id="music-icon" class="fa fa-music"></i>
    </div>




    <div class="content">

        <div class="image-container2">
            <div class="overlay"></div>
            <img src="{{ asset('frontend/asset/avatar/IMG-20241126-WA0003.jpg') }}" alt="image">
        </div>

        <div class="title-home text-center mt-5">
            <h1>6 Tahun</h1>
            <h2>Muhamad Arsyil</h2>
        </div>
        

        <div class="container">
            <div class="countdown text-center mt-5">
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
                        <h3 class="mt-4"> Jam 10 : 00 AM</h3>
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
                        <p>Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="mt-4">
                        <button class="mt-4">
                            <a href="https://maps.app.goo.gl/b4sDVXEggQZPaJE99">
                                <span class="icon"><i class="fa-solid fa-location-dot icon"></i>Lihat Lokasi
                                    Rumah</span>
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
                    <div class="overlay"></div>
                    <img src="{{ asset('frontend/asset/avatar/IMG-20241126-WA0012.jpg') }}" alt="Gambar Bulat" class="rounded-image">
                </div>
                <div class="text-gift">
                    <div class="center-container">
                    </div>
                    <p class="mt-5">Terima Kasih telah menambah semangat kegembiraan ulang tahun anak
                        kami yang ke 4 tehun, dengan kehadiran dan hadiah indah dari temen temen kirana </p>
                </div>


                <div class="btn-gift mt-2">
                    <button class=" btn-gitf mt-4">
                        <a href="https://wa.me/6289658529392">
                            <span class="icon"><i class="fa-solid fa-gift"></i>Kirim Kado</span>
                        </a>
                    </button>
                </div>
            </div>



        <div class="form-container mt-5">
             <!-- Comment Section -->
<section class="w-full h-auto min-h-screen flex flex-col items-center px-10 py-20 text-black bg-fixed bg-cover bg-no-repeat bg-center font-light" style="background-image: url('{{ asset('images/theme_01_bg_comments.webp') }}');">
    <h2> Pesan & Doa </h2>

    <!-- Form Komentar -->
    <form action="{{ route('send.comment') }}" method="POST" class="flex flex-col w-1/2 mt-10">
        @csrf
        <input class="input-field" id="name" name="name" type="text" maxlength="50" placeholder="Masukan Nama Anda" class="p-3 outline-none rounded-md mt-2 drop-shadow-md" required/>
        <textarea id="comment" name="comment" rows="5" maxlength="500" class=" p- outline-none rounded-md mt-2 resize-none drop-shadow-md" placeholder=" Masukan Pesan & Doa" required></textarea>
        <button class="submit-btn mt-3" type="submit">
            Kirim Ucapan
        </button>
    </form>
    <hr>
    <h5 class="text-center text-white mb-3">Pesan & Doa</h5>
    <!-- Daftar Komentar -->
    <div class="message-container">
        <div class="message-list">
            <div class="message-item flex flex-col w-1/2 mt-10 gap-5">
                @foreach($comments as $comment)
                <div class="flex flex-col w-full bg-white rounded-md drop-shadow-md p-3" style="border-radius: 10px">
                <span class="font-medium"><strong>{{ $comment->name }}</strong> | {{ $comment->created_at->format('j M Y H:i') }}</span>
                <hr>
                <span class="font-light">{{ $comment->comment }}</span>
            </div>
        @endforeach
    </div>
</section>
<!-- ./Comment Section -->
</div>
</div>
</div>






        <div class="thank text-center mt-5">
            <h2>terima kasih Temen temen <br> atas perhatiannya sampai <br> jumpa di acara tersebut</h2>
        </div>

        <footer class="footer text-center mt-5 text-white">
            <hr class="mt-4">
            <p>&copy; 2024 All Rights Reserved | <a href="https://wa.me/6289603382868">EvanDevs</a></p>
        </footer>

    </div>
    </div>

    <script src="{{ asset('frontend/asset/js/script.js') }}"></script>
</body>

</html>