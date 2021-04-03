<?php
    require_once('../vendor/autoload.php');

      $category= new \App\classes\category();
      if(isset($_POST[ 'submit' ])){
         $result= $category->add_category($_POST);  

      }

?>



<?php
        require_once('header.php');
        require_once('sidebar.php');
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
                             Category Add Forms
                          </header>
                          <div class="card-body">
                              <form action="" method="POST">
                                  <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                      <div class="col-md-3">
                                          <input type="text" class="form-control" name="category_name" id="inputEmail3" placeholder="Name">
                                      </div>
                                  </div>
                                 
                                  <fieldset class="form-group">
                                      <div class="row">
                                          <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                          <div class="col-sm-10">
                                              <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="status" id="active" value="1" >
                                                  <label class="form-check-label" for="gridRadios1">
                                                      Active
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="status" id="inactive" value="0">
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