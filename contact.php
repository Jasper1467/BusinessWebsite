<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepagina</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <script defer src="node_modules/jquery/dist/jquery.js"></script>

    <script defer src="js/script.js"></script>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="preloader">
        <div class="preloader-container">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow p-3">
            <ul class="navbar-nav row justify-content-between">
                <li><a class="nav-link text-white" href="index.html">Home</a></li>
                <li><a class="nav-link text-white" href="overons.html">Over ons</a></li>
                <li><a class="nav-link text-white" href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="container-fluid row justify-content-center align-items-center">
            <form class="w-50 p-3" action="private/contact.php" method="post">
                <h1>Contact</h1>

                <label for="name">Naam</label>
                <input type="text" class="form-control" id="name">

                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">

                <label for="message">Bericht</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                <br>
                <button class="btn btn-primary" type="submit">Verstuur</button>

            </form>
        </div>


    </main>

    <footer class="text-white shadow fixed-bottom p-3">
        <p class="text-center">Copyright &copy; 2024. All rights reserved.</p>
    </footer>
</body>

</html>