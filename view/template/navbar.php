<?php 
// Comprobamos la url para marcar en el menú la pestaña activa

	if ($_SERVER['PHP_SELF'] != '/newsite/view/index.php')
	{ $page1 = 'none'; } else { $page1 = 'active'; }
	if ($_SERVER['PHP_SELF'] != '/newsite/view/nosotros.php')
	{ $page2 = 'none'; } else { $page2 = 'active'; }
	if ($_SERVER['PHP_SELF'] != '/newsite/view/programas.php')
	{ $page3 = 'none'; } else { $page3 = 'active'; }
	if ($_SERVER['PHP_SELF'] != '/newsite/view/relatores.php')
	{ $page4 = 'none'; } else { $page4 = 'active'; }
	if ($_SERVER['PHP_SELF'] != '/newsite/view/contacto.php')
	{ $page5 = 'none'; } else { $page5 = 'active'; }
?>


 <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../index.php"><img src="../assets/img/logos/logo_blanco3.png" width="200%"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li class="<?php echo $page1;?>"><a href="index.php">INICIO</a></li>
            <li class="<?php echo $page2;?>"><a href="nosotros.php">NOSOTROS</a></li>
            <li class="<?php echo $page3;?>"><a href="programas.php">PROGRAMAS</a></li>
            <li class="<?php echo $page4;?>"><a href="relatores.php">RELATORES</a></li>
            <li class="<?php echo $page5;?>"><a data-toggle="modal" href="#contacto">CONTACTO</a></li>
            <li><a href="https://www.facebook.com/grupoesencial.santiago"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="https://twitter.com/grupoesencialcl"><i class="fa fa-twitter-square"></i></a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
