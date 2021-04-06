<?php 
  require_once('header.php');
  session_start();
  require_once('vendor/autoload.php');
  $category= new App\classes\category();
  $category_name=$category->active_category();
  $blog=new App\classes\blog();
  $blog_post=$blog->active_blog();



?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        <?php
        while($row1=mysqli_fetch_assoc($blog_post)){
        ?>
        <div class="card mb-4">
          <img class="card-img-top" src="uploads/<?= $row1['photo'] ?>" width="700px" height="350px" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?= $row1['title'] ?></h2>
            <p class="card-text"><?= $row1['content'] ?></p>
            <a href="single_post.php?id=<?= $row1['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?= date('d M Y',strtotime($row1['created_at'])) ?> by
            <a href="#"><?= $_SESSION['name'] ?></a>
          </div>
        </div>
        <?php } ?>

        <!-- Blog Post -->
       

        <!-- Blog Post -->
      

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <?php 
                while($row=mysqli_fetch_assoc($category_name)){
                ?>
                  <li>
                    <a href="category.php?id=<?= $row['id']?>"><?= $row['category_name'] ?></a>
                  </li>
                  <?php } 
                  
                  ?>
                  

                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 <?php
  require_once('footer.php');
 ?>