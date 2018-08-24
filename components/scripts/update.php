<?php
require "../Product.php";
require "../Redirect.php";
require "../../databases/pdo.php";

use Brainster\Product;
use Brainster\Redirect;

$product = new Product($_POST['name'], $_POST['subtitle'], $_POST['photo'], $_POST['url'], $_POST['description']);

$id = $_GET['id'];

$product->update($id);