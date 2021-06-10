<?php 
$connect = file_get_contents('config.conf');
$conf = explode(';',$connect);
$db = new PDO("mysql:host=$conf[0];dbname=$conf[3]",$conf[1],$conf[2]);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$file = file_get_contents('../modele/base_c.sql');
$table_create = explode(';',$file);
foreach($table_create as $valeur):
    $db->exec($valeur);
endforeach;
$url =  'http://'.$_SERVER['HTTP_HOST'] .'/application';
header('location:'.$url);
?>