<?php

namespace App\classes;

class database{
    public  function  con(){
        $host='localhost';
        $name='root';
        $password='';
        $db_name='blogoop';

        $link=mysqli_connect($host,$name,$password,$db_name);
        return $link;
    }
}