<?php
include('../modele/attribut_css.php');
include('../modele/attribut_css_manager.php');
include('../modele/valeur_css.php');
include('../modele/valeur_css_manager.php');
$connect = file_get_contents('config.conf');
$conf = explode(';',$connect);
$db = new PDO("mysql:host=$conf[0];dbname=$conf[3]",$conf[1],$conf[2]);
$mng_attcss = new Attribut_css_manager($db);
$valeur_css = new Valeur_css_manager($db);
$result = $mng_attcss->Sel();
include('../view/insert.php');
if (isset($_POST['attribut'])&& isset($_POST['description_attr'])):
    $data_attribut = array('valeur'=>$_POST['attribut'],
                    'description'=>$_POST['description_attr']);
    $attcss = new Attribut_css($data_attribut);
    $mng_attcss->Add($attcss);  
    header('refresh:0');
endif;
if(isset($_POST['valeur'])&& isset($_POST['description_val']) && isset($_POST['attr_select'])):
    $idattr_css = $mng_attcss->Sel_id_val($_POST['attr_select']);
    $data = array('valeur'=>$_POST['valeur'],
            'description'=>$_POST['description_val'],
            'id_attribut_css'=>$idattr_css->getId());
            $val_css = new Valeur_css($data);
            $valeur_css->Add($val_css);
endif;
include('../view/list.php');
?>