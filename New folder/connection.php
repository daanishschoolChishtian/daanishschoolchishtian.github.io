<?php
$db = new mysqli('localhost', 'root', 'root', 'daanishdatabase');
if($db->connect_errno > 0){
die('Error : ('. $db->connect_errno .') '. $db->connect_error);
}