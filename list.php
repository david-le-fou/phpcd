<?php
include('modele/attribut_css.php');
include('modele/attribut_css_manager.php');
$connect = file_get_contents('config.conf');
$conf = explode(';',$connect);
$db = new PDO("mysql:host=$conf[0];dbname=$conf[3]",$conf[1],$conf[2]);
$data = array('valeur'=>'display','description'=>'affiche');
$attcss = new Attribut_css($data);
$mng_attcss = new Attribut_css_manager($db);
//$mng_attcss->Add($attcss);
// print_r("<pre>");
// print_r($mng_attcss->Sel());
// print_r("</pre>");
$result = $mng_attcss->Sel();
print_r("<pre>");
print_r($result);
print_r("</pre>");


?>

<table border="2">
<tr>
    <td>Attribut</td>
    <td>Valeur</td>
    <td>Description</td>
</tr>
            
<?php
    foreach($result as $cle=>$valeur):
        echo "<tr><td>".$result[$cle]->getValeur()."</td><td><table border='2'><tr><td>valeur</td><td>".'description'."</td></tr></table></td><td>".$result[$cle]->getDescription()."</td></tr>";
    endforeach;
?>
</table>
<style>
table.valeur {
    width: 100%;
}
table.valeur >tbody> tr > td{
    width: 50%;
}
</style>



















