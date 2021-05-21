<?php 
    include __DIR__ . './database.php';



    // Content type
    header('Content-Type: application/json');

    // preparazione dati Json
    echo json_encode($database);