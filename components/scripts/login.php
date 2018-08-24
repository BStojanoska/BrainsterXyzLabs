<?php
require "../Admin.php";
require "../Redirect.php";
require "../../databases/pdo.php";

use Brainster\Admin;
use Brainster\Redirect;

$admin = new Admin($_POST['email'], $_POST['password']);

try {
    $admin->login();
} catch (\Exception $e) {
    $msg = $e->getMessage();
    Redirect::to("../../routes/admin.php?status=error&msg=" . $msg);
}