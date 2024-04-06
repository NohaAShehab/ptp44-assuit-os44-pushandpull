<?php
header("Access-Control-Allow-Origin: *");


// echo json_encode($_POST);


// $data = [
//     "name"=>"Ali", 
//     "track"=> "OSAD"
// ];

$data = "My name is Noha";


echo json_encode($data);
