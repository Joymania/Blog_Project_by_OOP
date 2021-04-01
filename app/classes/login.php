<?php

namespace App\classes;
use App\classes\database;

class login{
    public function loginchk($data){
       $email=$data['email'];
       $password=$data['password'];

      $result= mysqli_query(database::con(),"SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
      if(mysqli_num_rows($result)==1){
          $row=mysqli_fetch_assoc($result);
          session_start();
          $_SESSION['id']=$row['id'];
          $_SESSION['email']=$row['email'];
          $_SESSION['name']=$row['name'];
          header('location:index.php');
      }
      else{
        echo "NO";
      }

    }

}