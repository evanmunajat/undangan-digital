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

    <title>Undangan Ulang Tahun - Arsyil</title>
</head>

<body>
    <div class="container-full">
        <div class="image-container mt-3">
            <img src="{{ asset('frontend/asset/avatar/IMG-20241126-WA0003.jpg') }}" alt="Gambar Bulat"
                class="rounded-image">
        </div>
        <h1 class="title">Happy Birthday</h1>
        <h2 class="subtitle mt-5">Muhamad Arsyil</h2>
        <div class="card text-center card-custom mt-5">
            <div class="card-body">
                <h5 class="card-title mb-4">Yang Terhormat</h5>
                <p class="card-text">Teman - teman Arsyil</p>
            </div>
        </div>
        <div class="button mt-5">
            <a href="{{ route('home') }}" class="btn btn-primary"> <i class="fa-solid fa-cake-candles"></i> <span> Buka
                    Undangan</span></a>
        </div>
    </div>

    <footer class="footer text-center mt-5 text-white">
        <hr class="mt-4">
        <p>&copy; 2024 All Rights Reserved | <a href="https://wa.me/6289603382868">EvanDevs</a></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Custom JS -->
    <script src="{{ asset('frontend/asset/js/script.js') }}"></script>
    </div>
</body>

</html>
