<?php
    require __DIR__ . '/database.php';

    $filter = $_GET["genre"];

    $albums =  getAlbums($database, $filter);

    function getAlbums($database, $filter = 'all') {
        if( $filter === 'all') {
            return $database;
        } else {
            $filteredAlbums = [];
            
            foreach( $database as $album ) {
                if($album["genre"] === ucfirst($filter)) {
                    $filteredAlbums[] = $album;
                }
            };

            return $filteredAlbums;
        };
    } 

    header('Content-Type: application/json');
    if($filter) {
        echo json_encode($albums);
    } else {
        echo json_encode($database);
    }
    
?>
