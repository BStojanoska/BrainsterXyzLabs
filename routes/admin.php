<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brainster XYZ Labs | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../public/css/custom.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="//cdn.brainster.co/assets/images/favicon_dark/apple-icon-180x180.png">
    <link rel="icon" type="image/png" href="//cdn.brainster.co/assets/images/favicon_dark/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="//cdn.brainster.co/assets/images/favicon_dark/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="//cdn.brainster.co/assets/images/favicon_dark/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="//cdn.brainster.co/assets/images/favicon_dark/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="//cdn.brainster.co/assets/images/favicon_dark/manifest.json">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
</head>
    
<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-light row">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand d-flex align-items-center flex-column justify-content-center mr-auto" href="../routes/index.php">
                    <img class="logo justify-self-md-center" src="../public/images/logo_footer_black.png">
                    <p class="logo-text">Brainster</p>
                </a>
                <h4 class="ml-auto">Администрација</h4>
            </div>
        </nav>
    </header>
    
    <main class="container py-3">
        <div class="row">
            <form class="col-lg-6 col-md-8 col-sm-11 mx-auto" method="POST" action="../components/scripts/login.php">

                <?php if (isset($_GET['status']) && $_GET['status'] == "success") { 
                ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_GET['msg'] ?>
                    </div>
                <?php 
                } elseif (isset($_GET['status']) && $_GET['status'] == "error") {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?= explode("oldName", $_GET['msg'])[0] ?>
                    </div>

                <?php
                }
                ?>

                <div class="form-group">
                    <label for="email">Е-мејл</label>
                    <input type="email" class="form-control" id="email" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="password">Пасворд</label>
                    <input type="password" class="form-control" id="password" name="password" value="">
                </div>
                <button type="submit" class="btn btn-light btn-block">Логирај се</button>
            </form>
        </div>
    </main>


    <footer class="container-fluid mt-5 fixed-bottom">
        <div class="row">
            <div class="container">
                <div class="row">
                    <p class="col d-flex justify-content-end align-items-center text-muted">Made with &#x2764 by</p>
                    <div class="col-1 align-items-center d-flex flex-column">
                        <img class="logo" src="../public/images/logo_footer_black.png">
                        <p class="logo-text">Brainster</p>
                    </div>
                    <p class="col d-flex justify-content-start align-items-center">-
                        <a class="p-2" href="https://www.facebook.com/brainster.co/?ref=br_rs" target="_blank">Say Hi!</a>
                        -
                        <span class="text-muted pl-2"> Terms</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="../public/main.js"></script>
</body>

</html>