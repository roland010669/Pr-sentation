<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Présentation.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>MERHEJ Roland</title>
</head>

<body class="container">
    <!-- offcanvas -->
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><strong style="color: darkblue">Accueil</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <!--<h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>-->
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/Pr%C3%A9sentation/Accueil.php#">
                                <strong>Accueil</strong></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="compétences.php"><strong>COMPÉTENCS</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                                href="http://localhost/Pr%C3%A9sentation/%C3%80Propos.php"><strong>À PROPOS</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php"><strong>CONTACT</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- offcanvas-->
    <br /><br /><br />

    <marquee behavior="scroll" style="color: #2196f3" class="fs-1">
        <h1><strong style="font-size: 50px">Merhej Roland. </strong></h1>
    </marquee>

    <div id="liens" class="d-flex justify-content-between">
        <!-- <div class="d-grid gap-2 col-6 mx-auto">-->
        <a class="nav-link text-center" href="compétences.php">
            <strong style="color: white; font-style: italic">COMPÉTENCS</strong>
        </a>
        <a class="nav-link text-center" href="http://localhost/Pr%C3%A9sentation/%C3%80Propos.php">
            <strong style="color: white; font-style: italic">À PROPOS</strong>
        </a>
        <a class="nav-link text-center" href="contact.php">
            <strong style="color: white; font-style: italic"> CONTACT</strong>
        </a>
    </div>

    <div class="card bg-dark text-white" height="200px" width="400px">
        <img src="ordi.jpg" class="card-img" alt="desktop" />
        <div class="card-img-overlay">
            <h5 class="card-title" style="color: #2196f3">MERHEJ ROLAND.</h5>
            <p style="color: #2196f3; font-weight:bold" class="card-text">rolandmerhej8@gmail.com</p>
            <p style="color: #2196f3;font-weight:bold" class="card-text">TÉL:06.71.74.66.24</p>
        </div>
    </div><br>

    <div>
        <marquee behavior="scroll" direction="right" style="color: white" class="fs-1">
            <h2>
                <strong style="font-size: 40px">Développeur web et web mobile.</strong>
            </h2>
        </marquee>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>