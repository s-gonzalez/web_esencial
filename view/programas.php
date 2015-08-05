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
    
   	 <!-- Info evento principal-->
     
	 <a name="sd1"></a>
     <!--SD1-->   
     <div id="dg">
     	<div class="container">
            <div class="row centered">
                <br><br>
                 <div class="col-lg-5 centered">
                    <img  class="img-rounded" src="../assets/img/relatores_final/ncruz.jpg" style=" margin-top:10px; max-width:300px; width:100%"><br><br><b>INVITADO ESPECIAL</b> NICOLÁS CRUZ
                    
                </div><!-- col-lg-6 -->
                <div class=" col-lg-1">
                </div>
                <div class="col-lg-5">
                
                    <h2 style="COLOR: rgb(186, 10, 52)">SANTIAGO DESPIERTA</h2>
                    <h3>PROGRAMA EXCLUSIVO: <br>	
                    1ER ENCUENTRO DE EXPERIENCIAS DE CHILE </h3> 
                    <br><p>ACTIVIDADES, TALLERES Y EXPERIENCIAS QUE ESTIMULAN TUS TALENTOS Y NECESIDADES.
                    <br>
                    <b>HOTEL GRAND HYATT SANTIAGO<br>
					MIÉRCOLES 3 DE JUNIO 2015<br> </b>*Inscripciones hasta cubrir máximo de cupos</p>
                    <a data-toggle="modal" href="#mailchimp"  class="btn btnaction2" >INSCRIBIRME</a>
                    <?php  include"mailchimp.php";?>
                    
                     
                </div><!-- col-lg-6 -->
            </div><!-- row -->
   		 </div><!-- container -->
     </div><!--SD1-->
    <br>
    
	 <div class="container">
    
		<div class="row centered">
        	
            <h2 style="color:rgb(186, 10, 52)">SANTIAGO DESPIERTA PRIMER ENCUENTRO DE EXPERIENCIAS</h2>
                <br><br>
            
            <div class="col-lg-4">
				
                <img  data-toggle="modal" href="#programa" class="img-rounded" src="../assets/img/fotoprograma2.png" width="100%" style="max-width:350px;">
			</div><!-- col-lg-4 -->

			<div class="col-lg-8" align="justify">
            	
                <div class="col-lg-6">
                
                    <h4 align="center"><strong>¿QUÉ ES?</strong></h4>
                    
                    <p>Es un evento de liderazgo y motivación basado en experiencias que permiten que cada asistente encuentre sus capacidades naturales y se conecte con su propio potencial de liderazgo y con sus propiostalentos. La fecha de realización de la primera versión de Santiago Despierta es el 3 de junio de 2015.</p>
                </div><!-- col-6 -->
                
                <div class="col-lg-6">
                
                    <h4 align="center"><strong>CONTENIDO</strong></h4>
                    <p>Es un día de experiencias diversas, talleres, conversaciones, actividades, desarrolladas y guiadas por expertos locales, con una conferencia del Director Ejecutivo de Base Pública, Nicolás Cruz, destacado movilizador de personas. En este día las experiencias ofrecerán a los asistentes la oportunidad de despertar a su propio liderazgo y a sus propias capacidades: "Santiago Despierta".</p>
                
                </div><!-- col-lg-6 -->
            </div><!-- col-8 -->
          
          <div class="col-lg-8" align="justify">
          
			<div class="col-lg-6">
            
				<h4 align="center"><strong>BENEFICIOS</strong></h4>
				<p>Los asistentes vivirán experiencias únicas que abrirán la conciencia sobre sus propios talentos y capacidades, mostrando distintos caminos hacia el liderazgo que pueden ejercer en sus propios ámbitos.La profundidad de la experiencia ayudará a que las personas, compartiendo con otros, puedan mejorar la calidad de sus relaciones. Serán vivencias significativas que quedarán guardadas en sus recuerdos y sensaciones, como un regalo a su propio bienestar.</p>
            </div>
            
            <div class="col-lg-6">
            
                <h4 align="center"><strong>QUIÉN DEBE ASISTIR</strong></h4>
				<p>Profesionales, ejecutivos y empresarios  que buscan mejorar su condición como seres humanos y que deben abordar desafíos profesionales y personales de alta exigencia. Ellos, vistos como individuos y como parte de grupos que tienen una tarea y un fin común, se beneficiarán de esta apertura de conciencia sobre sí mismos, beneficiando también a las organizaciones donde pertenecen.</p>
                
			</div><!-- col-lg-6 -->
            
            <p align="center"><a data-toggle="modal" href="#programa" class="btn btnaction " > VER PROGRAMA</a></p>
            
          </div><!-- col-8 -->
          
        </div><!-- row centered -->
        <br><br>
	 </div><!-- container -->

	<?php include"template/programacion.html"; ?>
    
    <!--Valores-->
    <a name="evento2"></a>
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
                	
                    <h2>VALORES DE PARTICIPACIÓN</h2><br><br>
                	
					<div class=" col-lg-6">
                        <div id="blue" class="img-rounded" style=" margin-bottom:10px;"><br>
                            <p>Asistencia día completo 3 de junio<br>
                            <b>Especial amigos de Desafío de Humanidad*</b><br>
                            (Día completo incluye conferencia y almuerzo)</p><br>
                            <h4>$ 250.000</h4><br>
                   
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-6">
                    	
                        <div id="blue" class="img-rounded" ><br>
                            <p>Asistencia día completo 3 de junio<br>
                            <b>Entrada general</b><br>
                            (Día completo incluye conferencia y almuerzo)</p><br>
                            <h4>$ 312.500</h4><br>
                        </div>
                    </div>
				</div>
                <a data-toggle="modal" href="#mailchimp"  class="btn btnaction " style="margin-top:15px;">INSCRIBIRME</a>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- dg -->
    <!--valores-->
    
    <!--Testimonios-->
     <div class="container w">
    	<h2 style="color:rgb(186, 10, 52); text-align:center">TESTIMONIOS DE RELATORES</h2>
                <br><br>
        <div class="container">
        	<?php $control->testRelatores();?>
        </div>
		
      </div><!-- container w --><br>
      <!--Testimonios--><!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <?php include"template/footer.php";?>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
