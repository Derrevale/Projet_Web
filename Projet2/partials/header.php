<!-- Derreumaux Valentin -  20/04/2020  11:55 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websites</title>
    <!--    CSS-->
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/Bonus.js"></script>
</head>
<body>
<header>
    <!--    NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://www.ephec.be/">Websites</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Connection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" id="clair" onclick="modeJour('antiquewhite')"> Mode Jour </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  id="nuit"  onclick="modeNuit('#474747')"> Mode Nuit </a>
                </li>
            </ul>



            <form class="form-inline my-2 my-lg-0" action="?" method="get">

                <input class="form-control mr-sm-2" type="search" placeholder="Search"id="Search" aria-label="Search" name="search" <?php if (isset($_GET['search'])) echo  'value='.$_GET['search'] ?> >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <button class="btn btn-outline-success my-2 my-sm-0" onclick="aleatoire()">Au hasard </button>
            </form>





        </div>
    </nav>
</header>
