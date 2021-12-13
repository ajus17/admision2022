<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    
   
      <div class="logo"><a href="../../" class="logo-normal">
          <img src="../../img/logo-test.png" alt="Test Psicométrico UNAN-Managua">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php  echo( $_SERVER['SCRIPT_NAME']=='/dashboard.php' ? 'active':'') ?>">
            <a class="nav-link" href="../../dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Escritorio</p>
            </a>
          </li>
          <li class="nav-item <?php  echo( $_SERVER['SCRIPT_NAME']=='/users.php' ? 'active':'') ?>">
            <a class="nav-link" href="../../users.php">
              <i class="material-icons">person</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item <?php  echo( $_SERVER['SCRIPT_NAME']=='/tests.php' ? 'active':'') ?>">
            <a class="nav-link" href="../../tests.php">
              <i class="material-icons">content_paste</i>
              <p>Test Psicométrico</p>
            </a>
          </li>
          <li class="nav-item <?php  echo( $_SERVER['SCRIPT_NAME']=='/results-test.php' ? 'active':'') ?>">
            <a class="nav-link" href="../../results-test.php">
              <i class="material-icons">receipt_long</i>
              <p>Resultados</p>
            </a>
          </li>

          <li class="nav-item active-pro">
            <a class="nav-link" href="https://www.unan.edu.ni" target="_blank">
              <i class="material-icons">language</i>
              <p class="simple-text">www.unan.edu.ni</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
        <?php
            include('navbar.php');
        ?>