<?php
header("Content-Type:application/json");
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") ."://".$_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI']);
try {
    $tour = new stdClass();
    $tour->company = 'MAROKKO-GRUPPENREISE';
    $tour->count = '2-12 Personen';
    $tour->pleace = 'MAROKKOS CHARME';
    $tour->subtitle = '11-tägige Erlebnisreise';
    $tour->logo = $link."/assets/img/logo.png";
    $tour->guide_name = "Mostafa Benzouaa";
    $tour->email = "m.benzouaa@dein-marokko.de";
    $tour->phone = '+49 341 92713615';
    $tour->background = $link."/assets/img/background.jpg";
    $tour->guide_img = $link."/assets/img/author.jpg";
    $data = $tour;    
} catch (Exception $e) {
   response(404,"User Not Found", null);
} finally {
    response(200,"User Found", $data);
}


function response($status,$status_message,$data)
{
    header("HTTP/1.1 ".$status);
    
    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['data']=$data;
    
    $json_response = json_encode($response);
    echo $json_response;
}
?>