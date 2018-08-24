<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brainster XYZ Labs</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-light row">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand d-flex align-items-center flex-column justify-content-center mx-auto" href="../routes/index.php">
                    <img class="logo justify-self-md-center" src="../public/images/logo_footer_black.png">
                    <p class="logo-text">Brainster</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav d-flex align-items-center ml-auto justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.codepreneurs.co">Академија за Програмирање
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.brainster.io/marketpreneurs">Академија за Маркетинг</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://blog.brainster.co/">Блог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal">Вработи наши студенти</a>
                        </li>
                    </ul>

                    <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title py-2">Вработи наши студенти</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-muted py-2">Внесете Ваши информации за да стапиме во контакт:</p>
                                    <form>
                                        <div class="form-group">
                                            <label for="email">Е-мејл</label>
                                            <input class="form-control" type="email" id="email" name="email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="tel">Телефон</label>
                                            <input class="form-control" type="tel" id="tel" name="tel" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="company">Компанија</label>
                                            <input class="form-control" type="text" id="company" name="company" value="" />
                                        </div>

                                        <button type="submit" class="btn btn-light btn-block">Испрати</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col hero text-white text-center d-flex align-items-center justify-content-center flex-column">
                <h1 class="title">Brainster.xyz Labs</h1>
                <p class="p-2">Проекти на студентите на академиите за програмирање и маркетинг на Brainster</p>
            </div>
        </div>
    </header>

    <main class="container p-5">
        <div class="row grid-container faded-cards hide">

            <?php
            require "../components/Product.php";
            require "../components/Redirect.php";
            require "../databases/pdo.php";

            use Brainster\Redirect;
            use Brainster\Product;

            $stmt = Product::getAll();
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch()) { ?>
                    <div class="card">
                        <a href="<?= $row['url'] ?>" target="_blank">
                            <img class="card-img-top p-2" src="<?= $row['photo'] ?>" alt="Card image cap">
                            <div class="card-title text-secondary m-0">
                                <h5 class="card-title"><?= $row['title'] ?></h5>
                                <p class="card-text"><?= $row['subtitle'] ?></p>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?= $row['description'] ?></p>
                            </div>
                        </a>
                    </div>
                <?php
                }
            }
            ?>
        </div>
    </main>

    <div class="fixed-bottom p-3 message-bubble">
        <div class="wrapper ml-auto">
            <a href="../routes/contact.php">
                <i class="fas fa-comment-alt fa-2x" data-fa-transform="shrink-8"></i>
            </a>
        </div>
    </div>

    <footer class="container-fluid">
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