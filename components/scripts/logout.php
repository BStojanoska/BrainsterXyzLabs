<?php
require "../Redirect.php";
use Brainster\Redirect;

Session_start();
session_destroy();
Redirect::to("../../routes/admin.php");