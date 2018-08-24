<?php
require "../Product.php";
require "../Redirect.php";
require "../../databases/pdo.php";

use Brainster\Product;
use Brainster\Redirect;

$product = new Product($_POST['name'], $_POST['subtitle'], $_POST['photo'], $_POST['url'], $_POST['description']);

try {
    $product->save();
    $msg = "Производот е успешно внесен!";
    Redirect::to("../../routes/dashboard.php?status=success&msg=" .urldecode($msg));
} catch (\Exception $e) {
    $msg = $e->getMessage();
    Redirect::to("../../routes/dashboard.php?status=error&msg=" . $msg);
}