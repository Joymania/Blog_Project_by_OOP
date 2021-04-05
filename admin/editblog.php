<?php

use App\classes\database;

require_once('header.php');
        require_once('sidebar.php');
     ?>

     <?php

        $id=$_GET['id'];

        require_once('../vendor/autoload.php');
        $editblog=new \App\classes\blog();
        $editcat=new \App\classes\category();
        $edit=$editcat->all_category();

       $edited= $editblog->edit($id);
       $row1=mysqli_fetch_assoc($edited);


       if(isset($_POST['submit'])){
           $editblog->update($_POST);
          
       }

        ?>

      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <section class="card">
                            <?php
                            if(isset($result)){

                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong><?= $result ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                            }
                            ?>
                          <header class="card-header">
                             Blog Add Forms
                          </header>
                          <div class="card-body">
                              <form action="" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="<?= $row1['id'] ?>">

                              <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Name</label>
                                      <div class="col-md-3">
                                          <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Blog Name" value="<?= isset($row1['name'])? $row1['name']:'' ?>">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="title" class="col-sm-2 col-form-label ">Title</label>
                                      <div class="col-md-3">
                                         <textarea name="title" id="title" cols="100" rows="5"><?= isset($row1['title'])? $row1['title']:'' ?></textarea >
                                      </div>
                                  </div>


                              <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">Category Select</label>
                              <div class="col-md-3">

                                         <select name="cat_id" id="cat_id" class="form-control">
                                      <option value="">Select</option>
                                      <?php
                                      while($row=mysqli_fetch_assoc($edit)){
                                      ?>

                                        <option  <?= ($row1['cat_id']==$row['id'])? 'selected': '' ?> value="<?= $row['id'] ?>"><?= $row['category_name'] ?></option>

                                      <?php
                                      }
                                      ?>

                                      </select>

                              </div>
                                     
                                  </div>

                                 
                                
                                  <div class="form-group row">
                                      <label for="content" class="col-sm-2 col-form-label ">Content</label>
                                      <div class="col-md-6">
                                        <textarea name="content" id="editor" rows="30" cols="10"><?= isset($row1['content'])? $row1['content']:'' ?></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Image</label>
                                      <div class="col-md-3">
                                          <input type="file" name="photo" id="" class="form-control">
                                      </div>
                                  </div>

                                  
                                 
                                  <fieldset class="form-group">
                                      <div class="row">
                                          <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                          <div class="col-sm-10">
                                              <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="status"  id="active" value="1" <?= ($row1['status'])==1 ? 'checked':''  ?> >
                                                  <label class="form-check-label" for="gridRadios1">
                                                      Active
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="status" id="inactive" value="0"  <?= $row1['status']==0 ? 'checked': ''  ?> >
                                                  <label class="form-check-label" for="gridRadios2">
                                                    Inactive
                                                  </label>
                                              </div>
                                              
                                          </div>
                                      </div>
                                  </fieldset>
                                  <div class="form-group row">
                                      <div class="col-md-3">
                                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
             

          </section>
      </section>
      <!--main content end-->

     <?php
        require_once('footer.php');
     ?>