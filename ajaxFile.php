<?php

if(isset($_FILES['file']['name'])){
   $filename = $_FILES['file']['name'];
   $location = 'upload/'.$filename;
   $file_extension = pathinfo($location, PATHINFO_EXTENSION);
   $file_extension = strtolower($file_extension);
   $valid_ext = array("jpg","png","jpeg");
   $response = 0;
   if(in_array($file_extension,$valid_ext)){
      if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
         $response = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") ."://".$_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI'])."/".$location;
      } 
   }
   echo $response;
   exit;
}

