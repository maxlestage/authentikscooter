<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=authentikscooter', 'maxlestage', '18081995Ml');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
