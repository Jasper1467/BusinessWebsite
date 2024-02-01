<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PegaSoft ontwikkelt intuïtieve, op maat gemaakte software die
                         bedrijfsprocessen vereenvoudigt en innovatie stimuleert.
                         Hun deskundige team levert gebruiksvriendelijke oplossingen die naadloos
                          in elke bedrijfsomgeving passen.">
    <meta name="keywords" content="software, software development, software engineer, software engineer leuven">
    <meta name="author" content="PegaSoft">

    <title>Contact</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <script defer src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script defer src="js/script.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="icon" type="image/ico" href="img/logo.ico">

</head>

<body class="d-flex flex-column vh-100">
    <div id="preloader">
        <div class="preloader-container">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <?php include 'private/header.php'; ?>

    <main>

        <div class="container-fluid row text-white justify-content-center align-content-center">
            <div class="container text-white p-3 text-center">
                <div class="row">
                    <h1>Contact</h1>
                    <p><b>ADRES:</b> Diestestraat 163, 3000 Leuven</p>
                    <p><b>EMAIL:</b> pegasoft@gmail.com</p>
                    <p><b>TELEFOON:</b> 016 31 90 00</p>
                </div>
            </div>

            <form class="w-50 p-3" action="private/contact.php" method="post">
                <label for="subject">Onderwerp</label>
                <input type="text" class="form-control bg-transparent text-white" id="subject" name="subject">

                <label for="message">Bericht</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control bg-transparent text-white"></textarea>
                <br>
                <button class="btn btn-primary" type="submit">Verstuur</button>
            </form>
        </div>

    </main>

    <?php include 'private/footer.php'; ?>
</body>

</html>