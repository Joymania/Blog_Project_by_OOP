<?php
require_once('header.php');
        require_once('sidebar.php');
     ?>

     <?php
        
        require_once('../vendor/autoload.php');
        $manage=new \App\classes\blog();
        $data=$manage->all_blog();

?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <section class="card">
                                <header class="card-header">
                                    Dynamic Table
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                </header>
                                <div class="card-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                            <thead>
                                                <tr>
                                                    <th>Sl No</th>
                                                    <th>Blog Name</th>
                                                    <th>Category Name</th>
                                                    <th>Title</th>
                                                    <th>Content</th>
                                                    <th>Photo</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $index=0;
                                                while($row=mysqli_fetch_assoc($data)){

                                                ?>
                                                <tr class="gradeX">
                                                    <td><?= ++$index;?></td>
                                                    <td><?= $row['name']?></td>
                                                    <td><?= $row['category_name']?></td>
                                                    <td><?= $row['title']?></td>
                                                    <td><?= $row['content']?></td>
                                                    <td><img width="50px" height="60px" src="../uploads/<?= $row['photo'] ?>" alt=""></td>
                                                    <td><?= $row['status']==1?'Active':'Inactive' ?></td>
                                                    <td>   

                                                        <a  href="editblog.php?id=<?= $row['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>


                                                        <a  href="action.php?id=<?= $row['id']?>&&table=blog" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</a>

                                                        <?php
                                                        if($row['status']==0){
                                                        ?>
                                                        <a  href="action.php?active=<?= $row['id']?>&& table=blog" class="btn btn-success btn-sm"><i class="fa fa-arrow-up"></i> Active</a>

                                                        <?php } ?>
                                                        <?php
                                                        if($row['status']==1){
                                                        ?>
                                                        <a  href="action.php?inactive=<?= $row['id']?>&& table=blog" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i> Inactive</a>
                                                        <?php } ?>

                                                    </td>
                                                   
                                                </tr>
                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
          </section>
      </section>
      <!--main content end-->

     <?php
        require_once('footer.php');
     ?>