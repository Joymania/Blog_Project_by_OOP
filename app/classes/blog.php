<?php
namespace App\classes;
use App\classes\database;

class blog{

    public function add_blog($data){
        $name=$data['name'];
        $title=$data['title'];
        $cat_id=$data['cat_id'];
        $content=$data['content'];
        $status=$data['status'];
        $photo=$_FILES['photo']['name'];

        $photo_last=explode('.',$photo);
        $photo_last=end($photo_last);
        $photo=date('Ymdhis').'.'.$photo_last;



        $querry="INSERT INTO `blog`(`cat_id`, `title`, `content`, `photo`, `name`, `status`) VALUES ('$cat_id','$title','$content','$photo','$name','$status')";

        $result=mysqli_query(database::con(),$querry);
        if($result){
            move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$photo);
           return $success='Data Inserted Successfully.';
        }
    }

    public function all_blog(){
        $querry="SELECT `blog`.`title`,`blog`.`id`,`blog`.`content`,`blog`.`photo`,`blog`.`name`,`blog`.`status`,`category`.`category_name`
        FROM blog
        INNER JOIN category ON blog.cat_id=category.id";
        $result=mysqli_query(database::con(),$querry);
        return $result;

    }
    public function status($id){
        $id=$id;
        mysqli_query(database::con(),"UPDATE `blog` SET `status`=1 WHERE `id`='$id'");
        header('location:manage_blog.php');

    }
    public function inactive_status($id){
        $id=$id;
        mysqli_query(database::con(),"UPDATE `blog` SET `status`=0 WHERE `id`='$id'");
        header('location:manage_blog.php');

    }
    public function delete($id){
        mysqli_query(database::con(),"DELETE FROM `blog` WHERE `id`='$id'");
        header('location:manage_blog.php');

    }
    public function edit($id){

        $result=mysqli_query(database::con(),"SELECT * FROM `blog` WHERE `id`=$id");
        return $result;
        

    }
    public function update($data){
        $id=$data['id'];
        $name=$data['name'];
        $title=$data['title'];
        $cat_id=$data['cat_id'];
        $content=$data['content'];
        $status=$data['status'];
        $photo=$_FILES['photo']['name'];

        $photo_last=explode('.',$photo);
        $photo_last=end($photo_last);
        $photo=date('Ymdhis').'.'.$photo_last;

        $result= mysqli_query(database::con(),"UPDATE `blog` SET `cat_id`='$cat_id',`title`='$title',`content`='$content',`photo`='$photo',`name`='$name',`status`='$status' WHERE `id`='$id'");
        if($result){
            move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$photo);
            header('location:manage_blog.php');
        }
        
    }
}


?>