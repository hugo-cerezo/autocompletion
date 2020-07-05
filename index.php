<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Autocompletion</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <a class="navbar-brand" href="index.php"><img class="navbar-brand" height="50" src="logo.png" alt="WinePedia"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos Produits
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?country=france">France</a>
                        <a class="dropdown-item" href="index.php?country=italie">Italie</a>
                        <a class="dropdown-item" href="index.php?country=espagne">Espagne</a>
                        <a class="dropdown-item" href="index.php?country=allemagne">Allemagne</a>
                        <a class="dropdown-item" href="index.php?country=us">US</a>
                        <a class="dropdown-item" href="index.php?country=autre">Autre</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?country_all=true">Voir tous les produits</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <main id="main" class="container my-5">
        <img class="navbar-brand col-12 my-5" src="logo.png" alt="WinePedia">
        <form class="my-2 my-lg-0">
            <div class="d-flex flex-column">
                <input class="form-control mr-sm-2 text-center" type="search" placeholder="Recherchez un nom de vin parmis nos produits" aria-label="Search" name="search" id="search" autocomplete="off">
                <div id="data">
                    <?php include('element.php'); ?>
                </div>
            </div>
        </form>
    </main>
    <footer class="">
        <div class="text-center py-3 my-5">© 2020 Copyright</div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>