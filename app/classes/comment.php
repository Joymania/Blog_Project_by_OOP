<?php
namespace App\classes;
use App\classes\database;

class comment{
    public function insert($data){
        $blog_id=$data['id'];
        $comment=$data['comment'];
        $querry="INSERT INTO `commentsection`( `comment`, `blog_id`) VALUES ('$comment','$blog_id')";
        $result=mysqli_query(database::con(),$querry);

    }

    public function show_comment($id){
        $querry="SELECT * FROM `commentsection` WHERE `blog_id`='$id'";
        $result=mysqli_query(database::con(),$querry);
        return $result;

    }

}

?>