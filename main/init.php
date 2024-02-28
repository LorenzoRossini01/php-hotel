<?php 

include(__DIR__.'/../vars/data.php');

$form_sent=!empty($_GET);
    
    
    $parking_filter=isset($_GET['parking_filter'])?true:false;
    $vote_filter=isset($_GET['vote_filter'])?(int)$_GET['vote_filter']:false;
    

    if($parking_filter==true){
        $hotels=array_filter($hotels, function($hotel){
            return $hotel['parking'] == true;
        }, ARRAY_FILTER_USE_BOTH);
    }
    if($vote_filter>0){
        $hotels=array_filter($hotels, function($hotel) use($vote_filter){

            return $hotel['vote'] >= $vote_filter;
        }, ARRAY_FILTER_USE_BOTH);
    }
    
        // var_dump($vote_filter);
        // var_dump($parking_filter);



?>