<!DOCTYPE html>
<html lang="fr">
<?php $title; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Présentation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
</head>

<body class="container">




    <!-- offcanvas -->
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Pr%C3%A9sentation/Accueil.php"><strong
                    style="color:darkblue;">Accueil</strong> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/Pr%C3%A9sentation/Accueil.php">
                                <strong>Accueil</strong></a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link active" href="compétences.php"><strong>COMPÉTENCS</strong></a>
                        </li>
                        <a class="nav-link active" href="http://localhost/Pr%C3%A9sentation/%C3%80Propos.php"><strong>À
                                PROPOS</strong>
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
    <br><br><br>
    <div>
        <marquee behavior="scroll" style="color:#2196f3" class="fs-1">
            <h1><strong style="font-size: 50px;">Merhej Roland. </strong></h1>
        </marquee>
    </div>