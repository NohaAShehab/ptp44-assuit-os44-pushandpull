

<?php
header("Access-Control-Allow-Origin: *");


$filename = 'myinfo.txt';


$clientTime = isset($_POST['lastmod']) ? $_POST['lastmod'] :0;

$servertime = filemtime("myinfo.txt");

while($clientTime >= $servertime){

    sleep(10);
    clearstatcache();
    $servertime = filemtime("myinfo.txt");


}

$file_data = file_get_contents($filename);

$data = [
    "clinetTime"=> $clientTime,
    "lastmod"=>$servertime,
    "data"=>$file_data, 
    "servertime"=>$servertime

];

echo json_encode($data);
