<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/main.svg') }}" alt="image">

        <button type="button" class="btn btn-primary">
            <i class="bi bi-check-circle"></i> Bootstrap berhasil terpasang
        </button>

        <a href="{{ route('portofolio.beranda') }}" class="btn btn-outline-dark">
            <i class="bi bi-person-badge"></i> Buka Web Portofolio
        </a>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
