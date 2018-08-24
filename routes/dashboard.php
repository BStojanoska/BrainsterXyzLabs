<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brainster XYZ Labs | Dashboard</title>
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
                <a class="navbar-brand d-flex align-items-center flex-column justify-content-center mr-auto" href="../routes/dashboard.php">
                    <img class="logo justify-self-md-center" src="../public/images/logo_footer_black.png">
                    <p class="logo-text">Brainster</p>
                </a>
                <div class="d-flex flex-column">
                    <h4 class="ml-auto">Администрација</h4>
                    <a href="../components/scripts/logout.php">Одлогирај се <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-3">

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
        require "../components/Product.php";
        require "../components/Redirect.php";
        require "../databases/pdo.php";

        use Brainster\Redirect;
        use Brainster\Product;

        session_start();
        if (!isset($_SESSION['email'])) {
            Redirect::to("admin.php?status=error&msg=", "Ве молиме логирајте се!");
        }
        ?>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="add-new-tab" role="tab" data-toggle="tab" aria-controls="add-new-tab" aria-selected="true"
                    href="#add-new">Додај</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="edit-tab" role="tab" data-toggle="tab" aria-controls="edit-tab" aria-selected="false" href="#edit">Измени</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" role="tabpanel" id="add-new">
                <h4 class="py-3">Додај нов производ:</h4>
                <div class="col-12"></div>

                <form class="col-8 mx-auto" method="POST" action="../components/scripts/add.php">
                    <div class="form-group">
                        <label for="name">Име</label>
                        <input class="form-control" type="text" id="name" name="name" value="<?php echo (isset($_GET['oldName']) ? $_GET['oldName'] : '') ?>" />
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Поднаслов</label>
                        <input class="form-control" type="text" id="subtitle" name="subtitle" value="<?php echo (isset($_GET['oldSubtitle']) ? $_GET['oldSubtitle'] : '') ?>" />
                    </div>
                    <div class="form-group">
                        <label for="photo">Слика</label>
                        <input class="form-control" type="url" id="photo" name="photo" placeholder="http://" value="<?php echo (isset($_GET['oldPhoto']) ? $_GET['oldPhoto'] : '') ?>" />
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input class="form-control" type="url" id="url" name="url" placeholder="http://" value="<?php echo (isset($_GET['oldUrl']) ? $_GET['oldUrl'] : '') ?>" />
                    </div>
                    <div class="form-group">
                        <label for="description">Опис</label>
                        <textarea class="form-control" id="description" name="description" value="<?php echo (isset($_GET['oldDesc']) ? $_GET['oldDesc'] : '') ?>" ></textarea>
                    </div>

                    <button type="submit" class="btn btn-light btn-block">Додај</button>
                </form>
            </div>

            <div class="tab-pane fade" role="tabpanel" id="edit">
                <h4 class="py-3">Измени постоечки производи:</h4>

                <div class="row grid-container">

                    <?php
                    $stmt = Product::getAll();
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch()) { ?>
                            <div class="card d-flex h-100 flex-column justify-content-between" id="<?= $row['id'] ?>">
                                <a href="<?= $row['url'] ?>" target="_blank">
                                    <img class="card-img p-2" src="<?= $row['photo'] ?>" alt="Card image cap">
                                    <div class="card-title text-secondary m-0">
                                        <h5 class="card-title"><?= $row['title'] ?></h5>
                                        <p class="card-text"><?= $row['subtitle'] ?></p>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><?= $row['description'] ?></p>
                                    </div>
                                </a>
                                <div class="card-footer">
                                    <div class="controls">
                                        <button class="edit-button edit-<?= $row['id'] ?> fas fa-pen-square fa-2x"></button> 
                                        <button class="fas fa-times fa-2x delete-button" data-toggle="modal" data-target="#deleteModal"></button>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalTitle">Избриши</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Дали сте сигурни дека сакате да го избришете производот?
                                        </div>
                                        <form class="modal-footer" id="delete-form" method="POST" action="">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Откажи</button>
                                            <button type="submit" class="btn btn-light">Избриши</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }

                    if (isset($_POST['name']) == 'update') { 
                        Product::update($_GET['id']);
                    }
                    ?>                    
                </div>
            </div>
        </div>
    </main>

    <footer class="container-fluid mt-5">
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