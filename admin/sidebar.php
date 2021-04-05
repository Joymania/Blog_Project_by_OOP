<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li >
                      <a <?= $url=='index.php' ? 'class="active"':'' ?> href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" <?= $url=='add_category.php' ? 'class="active"':'' ?> || <?= $url=='manage_category.php' ? 'class="active"':'' ?>>
                          <i class="fa fa-laptop"></i>
                          <span> Categories</span>
                      </a>
                      <ul class="sub">
                          <li <?= $url=='add_category.php' ? 'class="active"':'' ?> ><a  href="add_category.php">Add Category</a></li>
                          <li <?= $url=='manage_category.php' ? 'class="active"':'' ?> ><a  href="manage_category.php">Manage Category</a></li>
                         
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" <?= $url=='add_blog.php' ? 'class="active"':'' ?> || <?= $url=='manage_blog.php' ? 'class="active"':'' ?>>
                          <i class="fa fa-laptop"></i>
                          <span> Blog</span>
                      </a>
                      <ul class="sub">
                          <li <?= $url=='add_blog.php' ? 'class="active"':'' ?> ><a  href="add_blog.php">Add Blog</a></li>
                          <li <?= $url=='manage_blog.php' ? 'class="active"':'' ?> ><a  href="manage_blog.php">Manage Blog</a></li>
                         
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>