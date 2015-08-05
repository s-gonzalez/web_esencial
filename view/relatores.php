<?php 
	include"../controller/controller.php";
?>
<!DOCTYPE html>
<html lang="es">
  
<?php 
include"template/head.html"
?>

  <body>

   <?php 
   include"template/navbar.php";
   $control= new Controller;
   ?>

	<!-- INFO SECTION -->
    <a name="masinfo"></a>
    <div class="container w">
        <div class="row centered">
            <div class="page-header">
                <h2 style="COLOR: rgb(186, 10, 52)">RELATORES</h2>
                <p  align="center"  >Destacados relatores de diferentes origenes y disciplinas han desarrollado actividades y temas de conversación y reflexión para presentar en <b>Santiago Despierta</b>, Encuentro de Experiencias, motivados por encontrarse con un público estimulado a explorar y abrirse a nuevas posibilidades de autoconocimiento.</p>
            </div><!--page-header-->
         </div><!--row-->
         
         <div class="row centered"> 
                <br>
                
             <?php
			 	$control->bioRelatores();
			 ?>
         
         </div><!-- row -->
         <br>
           
    </div><!-- info section -->
	
    
	
	<?php 
	include"template/footer.php";
	?>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
