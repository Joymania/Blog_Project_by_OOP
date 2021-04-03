<?php

use App\classes\database;

require_once('header.php');
        require_once('sidebar.php');
     ?>

     <?php

        $id=$_GET['id'];

        require_once('../vendor/autoload.php');
        $edit=new \App\classes\category();
       $edited= $edit->edit($id);
       $row=mysqli_fetch_assoc($edited);

       if(isset($_POST['submit'])){
           $edit->update($_POST);
          
       }

        ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <section class="card">
                          <header class="card-header">
                              Update Category
                          </header>
                          <div class="col-md-3">
                              <form action="" method="POST">
                                  <div class="form-group">
                                      <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                      <label for="exampleInputEmail1">Category Name</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name" value="<?= $row['category_name']  ?>">
                                      
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                              </form>

                          </div>
                      </section>
      </section>
      <!--main content end-->

     <?php
        require_once('footer.php');
     ?>