<?php 
$file = file_get_contents('modele/base_c.sql');
print_r('<pre>');
print_r(explode(';',$file));
print_r('</pre>');
?>