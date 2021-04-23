<?php
$config = 'config.conf';
if(file_exists($config)){
    $file = file_get_contents($config,FILE_USE_INCLUDE_PATH);
    $data = explode(';',$file);
    include('connection.php');
}
else{
?>
<p>instalation</p>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <p>host :</p> <input type="text" id ="host" name="host" required>
    <p>user :</p><input type="text" id="usr" name="usr" required>
    <p>password :</p><input type="text" name="pwd" id="pwd" required>
    <p>database :</p><input type="text" id="db" name="db" required>
    <button>Enregistrer</button>
</form>
<?php
}
$text =null;
if(isset($_POST['host'])):
    $text .= $_POST['host'].';';
endif;
if(isset($_POST['usr'])):
    $text .= $_POST['usr'].';';
endif;
if(isset($_POST['pwd'])):
    $text .= $_POST['pwd'].';';
endif;
if(isset($_POST['db'])):
    $text .= $_POST['db'];
    $text .= ';vide';
endif;
if(!is_null($text)):
    file_put_contents('config.conf',$text);
    header('Refresh:0');
endif;