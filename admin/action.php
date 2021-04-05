<?php
require_once('../vendor/autoload.php');


 $id=$_GET['id'];

 $edit=$_GET['edit'];
 $table=$_GET['table'];
$status=new App\classes\category();
$bolg_status=new App\classes\blog();


if(isset($_GET['active'])&& $table=='category'){
    $status->status($_GET['active']);
}

if(isset($_GET['inactive'])&& $table=='category'){
    $status->inactive_status($_GET['inactive']);
}

if(isset($_GET['id'])&& $table=='category'){
    $status->delete($_GET['id']);
}


if(isset($_GET['active'])&& $table=='blog'){
    $bolg_status->status($_GET['active']);
}

if(isset($_GET['inactive'])&& $table=='blog'){
    $bolg_status->inactive_status($_GET['inactive']);
}

if(isset($_GET['id'])&& $table=='blog'){
    $bolg_status->delete($_GET['id']);
}



?>
