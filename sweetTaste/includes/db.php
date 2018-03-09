<?php ob_start(); ?>
<?php
// security way to access to databse
$db['db_host'] = "localhost";
$db['db_user'] = "cc_cms_user";
$db['db_pass'] = "S00#yq?DxTh%";
$db['db_name'] = "cc_cms_db";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$query = "SET NAMES utf8";
mysqli_query($connection, $query);

/*if($connection){
    echo "connection!";
}*/
?>