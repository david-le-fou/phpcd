<?php
// $db = new PDO("mysql:host=$host;dbname=$db",$usr,$pwd);
// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// }
// ////
if($data[4]=='vide'):
    try {
        $conn = new PDO("mysql:host=$data[0]", $data[1], $data[2]);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE $data[3]";
        $conn->exec($sql);
        $file = $data[0].';'.$data[1].';'.$data[2].';'.$data[3].';'.'installed';
        file_put_contents('config.conf',$file);
        include('admin.php');
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
else:
    include('admin.php');
endif;