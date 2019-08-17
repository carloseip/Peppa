<?php
  function isActive($menu, $mode="full"){
    global $active_menu;
    if ($mode == "partial")
      echo ($active_menu == $menu? "active": "");
    else
      echo ($active_menu == $menu? "class='active'": "");
  }
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombres']; echo' '; echo $_SESSION['apellidop'];?></p>
          <a href="../tables/data_tables.php"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menú de navegación</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("general_elements") ?>>
              <a href="../forms/general_elements.php"><i class="fa fa-circle-o"></i> General Elements </a>
            </li>
            <li <?php isActive("advanced_elements") ?>>
              <a href="../forms/advanced_elements.php"><i class="fa fa-circle-o"></i> Advanced Elements </a>
            </li>
            <li <?php isActive("editors") ?>>
              <a href="../forms/editors.php"><i class="fa fa-circle-o"></i> Editors </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("simple_tables") ?>>
              <a href="../tables/simple_tables.php"><i class="fa fa-circle-o"></i> Simple Tables </a>
            </li>
          </ul>
          <ul class="treeview-menu">
            <li <?php isActive("data_tables") ?>>
              <a href="../tables/data_tables.php"><i class="fa fa-circle-o"></i> Data Tables </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("invoice") ?>>
              <a href="../examples/invoice.php"><i class="fa fa-circle-o"></i> Invoice</a>
            </li>
            <li <?php isActive("profile") ?>>
              <a href="../examples/profile.php"><i class="fa fa-circle-o"></i> Profile</a>
            </li>
            <li <?php isActive("login") ?>>
              <a href="../examples/login.php"><i class="fa fa-circle-o"></i> Login</a>
            </li>
            <li <?php isActive("register") ?>>
              <a href="../examples/register.php"><i class="fa fa-circle-o"></i> Register</a>
            </li>
            <li <?php isActive("blank") ?>>
              <a href="../examples/blank.php"><i class="fa fa-circle-o"></i> Blank Page</a>
            </li>
            <li <?php isActive("pace") ?>>
              <a href="../examples/pace.php"><i class="fa fa-circle-o"></i> Pace Page</a>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<script>
  var parent = $("ul.sidebar-menu li.active").closest("ul").closest("li");
  if (parent[0] != undefined)
    $(parent[0]).addClass("active");
</script>