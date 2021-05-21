<?php 
    include __DIR__ . './database.php';

    $artists = [];
    foreach ($database as $elem) {
        if(!in_array($elem, $artists)){
            $artists[] = $elem['author'];
        }
    }

    $albumFiltered = [];
    if(empty($_GET) || $_GET["author"] == "All" ){
        $albumFiltered = $database;
    }else{
        foreach($database as $item){
            // var_dump($item);
            if($item["author"] === $_GET["author"]){
                $albumFiltered[] = $item;
            }
        }
    }

    
    $res = [
        'artists' => $artists,
        'database' => $albumFiltered,
    ];
    
    
    // Content type
    header('Content-Type: application/json');
    
    // preparazione dati Json
    echo json_encode($res);
    