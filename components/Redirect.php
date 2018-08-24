<?php
namespace Brainster;

abstract class Redirect {
    public static function to($url, $msg='') {
        header("Location: $url" .$msg);
        die();
    }
}