    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Website Galeri Foto</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <style>
            body {
                background-image: url('assets/img/SMK2.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed; 
            }

            .navbar {
                background-color: #007bff; 
            }
            .navbar-brand, .navbar-nav .nav-link, .btn {
                color: #ffffff !important;
            }

            footer {
                background-color: #343a40;
                color: #ffffff; 
                padding: 10px 0;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
                    <div class="navbar-nav me-auto"></div>
                    <a href="register.php" class="btn btn-outline-danger m-1">Daftar</a>
                    <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
                </div>
            </div>
        </nav>

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img style="height: 12rem;" src="" class="card-img-top" title="">
                        <div class="card-footer text-center">
                            <a href="#"><i class="fa-regular fa-heart m-1"></i></a> 160 Suka
                            <a href="#"><i class="fa-regular fa-comment"></i></a> 3 Komentar
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="d-flex justify-content-center border-top mt-3 fixed-bottom">
            <p>&copy; UKK RPL 2024 | Michael Khanta Dwiyata</p>
        </footer>

        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
    </html>
