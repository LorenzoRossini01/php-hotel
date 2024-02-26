<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];



    
    
    $form_sent=!empty($_GET);
    
    
    if($form_sent){
        
        $parking_filter=$_GET['parking_filter']??'';
        $vote_filter=$_GET['vote_filter']??'';
        
        if($parking_filter=='on'){
            $parking_filter=true;
        } else{
            $parking_filter=false;
        };
        
            // var_dump($parking_filter);
            // var_dump($vote_filter);
            
            foreach ($hotels as $hotel) {
                if($hotel['parking']==$parking_filter && $hotel['vote'] >= $vote_filter){
                    $filter_hotels[]=$hotel;
                }
            }
            // var_dump($filter_hotels);
    } else{
        $filter_hotels = $hotels;
    }
    
?>


