<?php
require "../Product.php";
require "../Redirect.php";
require "../../databases/pdo.php";

use Brainster\Product;
use Brainster\Redirect;

$id = $_GET['id'];

Product::delete($id);