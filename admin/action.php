<?php
require_once('../vendor/autoload.php');


 $id=$_GET['id'];
 $edit=$_GET['edit'];
$status=new App\classes\category();


if(isset($_GET['active'])){
    $status->status($_GET['active']);
}
if(isset($_GET['inactive'])){
    $status->inactive_status($_GET['inactive']);
}
if(isset($_GET['id'])){
    $status->delete($_GET['id']);
}



?>
