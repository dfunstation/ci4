<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title><?= $judul;  ?></title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/Mahasiswa">HOME</a>
            <div class="float-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        <a class="nav-link" href="/Mahasiswa/data">Mahasiswa</a>
                        <a class="nav-link" href="/Mahasiswa/about">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>


    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="/assets/bootstrap/js/popper.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>