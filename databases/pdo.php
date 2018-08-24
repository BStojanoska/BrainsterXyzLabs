<?php

function connectToDb() {
    try {
        return new PDO('mysql:host=localhost;dbname=brainsterXyzLabsTest', 'root', 'root');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
