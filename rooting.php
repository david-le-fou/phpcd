<?php
include 'controlleur/Control.php';
$root = new Controll();
$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$param = parse_url(urldecode($_SERVER['REQUEST_URI']),PHP_URL_QUERY);
print_r($root->traite_controle($page));
print_r($root->traite_param($param));
