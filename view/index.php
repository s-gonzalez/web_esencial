<!DOCTYPE html>
<html lang="es">

<?php 
include"template/head.html"
?>
  <body>
  
   <?php 
   include"template/navbar.php";
   ?>

    <!-- Slider -->
    <div class="row" style=" border-top: 10px solid #999;">
        <div class=" container">
            <ul class="pgwSlider listOnTheLeft wide">
                
                <li>
                    <a href="programas.php?ev_id=1#evento1">
                    <img src="../assets/img/eventos/sd1.jpg"  alt="Primer Encuentro Santiago Despierta, 3 de junio 2015" data-description="Invitado Especial: Nicolás Cruz"></a>
                    
                    
                    
                </li> 
                <li>
                	<a href="programas.php?ev_id=2#evento2" >
                    <img src="../assets/img/eventos/sd2.jpg" alt="Santiago despierta Segundo Encuentro de Experiencias, 4 de septiembre 2015 "  data-description="Invitado especial: Dr. Mario Alonso Puig" ></a>
                </li>   
                <!--
                <li>
                    <img src="assets/img/bg/fondobanner3.jpg">
                    <span>Shanghai, China</span>
                </li>-->
                <li>
               	    <a href=""  >
                	<img src="../assets/img/eventos/mario2.jpg" alt=" 'MADERA DE LÍDER' La Felicidad a través del Liderazgo" data-description="Sábado 5 de Septiembre de 2015 Dr. Mario Alonso Puig"></a>
                </li>
                
            </ul>
        </div><!-- slider -->
     </div>
  
     <div id="blue" style="margin-top:10px; border-top: 10px solid #999;">
        	
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
                
				<h4>"El Aprendizaje es Experiencia, todo lo demás es sólo información."</h4>
				<p>- Albert Einstein -</p>
				</div>
			</div><!-- row -->
	 </div><!--  bluewrap -->
	
       
     <!--portada-->   
     
     	<div class="container">
            <div class="row centered">
                 
                 <div class="col-lg-5 centered">
                    <img  class="img-rounded" src="../assets/img/portada.jpg" alt="Santiago Despierta" style=" margin-top:45px; max-width:400px; width:100%"><br><br>
                    
                </div><!-- col-lg-6 -->
                <div class=" col-lg-1">
                </div>
                <div class="col-lg-5">
                	<br>
                    <h2 style="COLOR: rgb(186, 10, 52)">SANTIAGO DESPIERTA</h2>
                    <p><b>PROGRAMA EXCLUSIVO: 
                    1ER ENCUENTRO DE EXPERIENCIAS DE CHILE </b><br>
                    Actividades, talleres y experiencias que estimulan tus talentos y capacidades.</p>  
                    
                    <img  class="img-rounded" src="../assets/img/relatores/18.jpg" alt="Nicolás cruz" style="max-width:120px; width:100%">
                    
                    <p><b>Invitado Especial: </b>Nicolás Cruz<br>
                   
                   Hotel Grand Hyatt Santiago<br>
					Miércoles 3 de junio 2015<br>
                   
                    <b> Inscripciones hasta cubrir máximo de cupos</b></p>
                    <a  href="programas.php#sd1" class="btn btnaction2 " >MÁS INFORMACIÓN</a>
                    
                     
                </div><!-- col-lg-6 -->
            </div><!-- row -->
   		 </div><!-- container -->
         <!--Portada-->
    <br>
   
    
    <!-- DETAILS SECTION --> 
    <div id="dg">
       <div class="container">
          <div class="row centered">
             <h2>¿POR QUÉ SANTIAGO DESPIERTA?</h2>
             <br>

              <div class="col-lg-4">
                 <img src="../assets/img/clock.png" style="img-responsive; width:70%; max-width:250px;margin-bottom:15px;" alt="Santiago Despierta">
              </div><!-- col-lg-4 -->
              <div class="col-lg-4" >
                 <h4  style="COLOR: rgb(186, 10, 52); text-align:center;">¿Por qué una invitación a “Despertar”?</h4>
                 <p  style="text-align:justify;">Porque las personas necesitan conectarse consigo mismos y con lo que los rodea, para alcanzar un mejor estado de bienestar y consciencia, que promueva su creatividad y potencie sus capacidades innatas, a través de la intuición más que la razón. </p>               
                 <h4  style="COLOR: rgb(186, 10, 52); align:center;">¿Para quiénes?</h4>
                 <p style="text-align:justify;">Está dirigido a profesionales y ejecutivos que buscan reforzar sus talentos y sus propias capacidades, dispuestos a participar en experiencias  de intercambio, práctica y aprendizaje trascendente.</p>
              </div><!-- col-lg-4 -->
              <div class="col-lg-4">
                <h4 style="COLOR: rgb(186, 10, 52); align:center;">¿Cómo?</h4>
                <p  style="text-align:justify;">Cada uno de los dos días será muy diferente, aunque en ambos buscamos que los participantes dejen de lado, por un momento, el ajetreo de la vida cotidiana para entregarse a la participación, al encuentro y a la sorpresa. <br><br>El diseño del programa ha sido preparado cuidadosamente para ofrecer actividades que benefician cuerpo, mente y espíritu. Cada día finaliza con una celebración entretenida y alegre de lo vivido.</p>
                
              </div><!-- col-lg-4 -->
      	  </div><!-- row -->
       </div><!-- container -->
    </div><!--dg-->
    
    <!-- Partners -->
    <div id="lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <p>ORGANIZA:</p>
                    <img src="../assets/img/logos/logo3.png" alt="Grupo Esencial" style="max-width:100%" alt="Grupo Esencial">
                </div>
                <div class="col-lg-5" >
                    <p>MEDIA PARTNERS:</p>
                    <img src="../assets/img/partners/media-2.png" style="max-width:100%" alt="Media">
                </div>
                <div class="col-lg-5" >
                    <p>PATROCINAN:</p>
                    <img src="../assets/img/partners/patrocinan-2.png" style="max-width:100%" alt="Patrocinan">
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- partners -->
    
    
   <?php 
   include"template/footer.php";
   include"template/programacion.html";
   
   ?>
  
  



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/pgwslider.js"></script>
     
    

    <script type="text/javascript">
        $(document).ready(function() {
        $('.pgwSlider').pgwSlider();});
    </script>
  </body>
</html>
