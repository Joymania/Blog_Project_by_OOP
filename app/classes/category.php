<?php

namespace App\classes;
use App\classes\database;

class category{
    public function add_category($data){
        $category_name=$data['category_name'];
        $status=$data['status'];

        $querry="INSERT INTO `category`( `category_name`, `status`) VALUES ('$category_name','$status')";

        $result=mysqli_query(database::con(),$querry);
        if($result){
           return $success='Data Inserted Successfully.';
        }



    }
    public function active_category(){
        $querry="SELECT  `category_name`  FROM `category` WHERE `status`=1";
        $result=mysqli_query(database::con(),$querry);
        return $result;
    }

    public function all_category(){
        $querry="SELECT * FROM `category`";
        $result=mysqli_query(database::con(),$querry);
        return $result;


    }
    public function status($id){
        $id=$id;
        mysqli_query(database::con(),"UPDATE `category` SET `status`=1 WHERE `id`='$id'");
        header('location:manage_category.php');

    }
    public function inactive_status($id){
        $id=$id;
        mysqli_query(database::con(),"UPDATE `category` SET `status`=0 WHERE `id`='$id'");
        header('location:manage_category.php');

    }
    public function delete($id){
        mysqli_query(database::con(),"DELETE FROM `category` WHERE `id`='$id'");
        header('location:manage_category.php');

    }
    public function edit($id){

        $result=mysqli_query(database::con(),"SELECT * FROM `category` WHERE `id`=$id");
        return $result;
        

    }
    public function update($data){
        $id=$data['id'];
        $category_name=$data['category_name'];

        $result= mysqli_query(database::con(),"UPDATE `category` SET `category_name`='$category_name' WHERE `id`='$id'");
        if($result){
            header('location:manage_category.php');
        }
        
    }
}