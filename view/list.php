<table border="2">
<tr>
    <td>Attribut</td>
    <td>Valeur</td>
    <td>Description</td>
</tr>
            
<?php
    foreach($result as $cle => $valeur):
        echo "<tr><td class=".$result[$cle]->getValeur().">".$result[$cle]->getValeur()."</td><td class=valeur_".$result[$cle]->getValeur().">";
        $result_valeur_css = $valeur_css->Sel($result[$cle]->getId());
        foreach($result_valeur_css as $c => $val):
            echo "<table border='2' class='valeur'><tr><td>".$result_valeur_css[$c]->getValeur()."</td>";
            echo "<td>".$result_valeur_css[$c]->getDescription()."</td></tr></table>";
        endforeach;
        
        echo "</td><td>".$result[$cle]->getDescription()."</td></tr>";
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









