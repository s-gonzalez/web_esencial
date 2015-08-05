<?php
require_once"../common/functionConect.php";
class Controller{
	
	/*---eventoDestacado----
	consulta y loop que me genera las imágenes y título del evento destacado --------*/
	function eventoDestacado(){//
		
		conectar();
		mysql_query("SET NAMES 'utf8'");
		$consulta='select * from eventos Where destacado="true"';
		$resultado=mysql_query($consulta);

        while($fila=mysql_fetch_array($resultado)){?>
		
			<div class=" col-lg-4" style="padding-bottom:15px; padding-top:15px;">
				<a href="#<?php echo $fila['alias'];?>"><img class="img-rounded" src="../assets/img/eventos/<?php echo $fila['alias'];?>.jpg" width="100%">
                <div id="ellipsis2">
                	<p><strong><?php echo $fila['nombre']." ".$fila['fecha'];?></strong></p></a>
                </div>
			</div>
		<?php }

	}//---FIN-----eventoDestacado----
	
	
	/*---proximosEventos----
	consulta y loop que me genera las imágenes y título de cada evento --------*/
	
	function proximosEventos(){
		
		conectar();
		mysql_query("SET NAMES 'utf8'");
		$consulta='select * from eventos';
		$resultado=mysql_query($consulta);

        while($fila=mysql_fetch_array($resultado)){?>
		
			<div class=" col-lg-4" style="padding-bottom:15px; padding-top:15px;">
				<a  href="#<?php echo $fila['alias'];?>"><img class="img-rounded" src="../assets/img/eventos/<?php echo $fila['alias'];?>.jpg" width="100%">
                <div id="ellipsis2">
                	<p><strong><?php echo $fila['nombre']." ".$fila['fecha'];?></strong></p></a>
                </div>
			</div>
            
		<?php }

	}//---FIN----proximosEventos----
	
	
	/*---bioRelatores---selecciona desde relatores la información del nombre,
	 imagen y biografía para ser desplegada de manera modal (BOOTSTRAP)----*/
	
	function bioRelatores(){
		
		 conectar();
		 mysql_query("SET NAMES 'utf8'");
		 $consulta='select * from relatores order by apellido';
		 $resultado=mysql_query($consulta);
		
		 
		 while($fila=mysql_fetch_array($resultado)){
		
	 ?>
            <div class="col-lg-3" style="margin-bottom:30px; float:left">
            
                <a  id="relator" href="#relatorModal<?php echo $fila['id']; ?>" data-toggle="modal" >	 					<img class="img-circle" src="../assets/img/relatores/<?php echo $fila['id'];?>.jpg" width="150" height="150" alt="<?php echo $fila['nombre']." ".$fila['apellido'];?>">
                </a>
                <h4><?php echo $fila['nombre']." ".$fila['apellido'];?></h4>
                      
            </div><!-- col-lg-3 -->
	
            <!--Modal for Relatores-->
            <div class="modal fade" id="relatorModal<?php echo $fila['id'];?>" tabindex="-1" role="dialog" aria-labelledby="relatorModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="relatorModalLabel" align="center"><?php echo $fila['nombre']." ".$fila['apellido'];?></h4>
                  </div>
                  <div class="modal-body">
                  <img class="img-rounded center-block" src="../assets/img/relatores/<?php echo $fila['id'];?>.jpg" width="200" height="200" alt="<?php echo $fila['nombre']." ".$fila['apellido'];?>"></a><br>
                      <p align="justify"><?php echo $fila['bio'];?></p>
                        
                  </div>
                </div><!--content-->
              </div><!--Dialog-->
            </div><!--Modal-Relatores-->
            
		<?php } //end while 

		
	}/*--FIN---bioRelatores-------*/
	
	
	/*---testRelatores---selecciona desde relatores la información del nombre,
	 imagen, testimonios y Biografías para ser desplegada de manera modal (BOOTSTRAP)----*/
	function testRelatores(){
		
		 conectar();
		 mysql_query("SET NAMES 'utf8'");
		 $consulta='select * from relatores order by apellido';
		 $resultado=mysql_query($consulta);
		
		 
		 while($fila=mysql_fetch_array($resultado)){ //loop 
		
	 ?>
            <div class="col-lg-3 centered" style="margin-top:15px; float:left">
            
					<h4><?php echo $fila['nombre']." ".$fila['apellido'];?></h4>
                    
                	<img class="img-rounded " src="../assets/img/relatores/<?php echo $fila['id'];?>.jpg" width="150" height="150" alt="<?php echo $fila['nombre']." ".$fila['apellido'];?>">
                	<br /><br />
                	
               		<p> <a  id="relator" href="#relatorModal<?php echo $fila['id']; ?>" data-toggle="modal" style="margin-bottom:10px;">
                        <button class="btn" style="margin-bottom: 10px;">Biografía</button>
                        
                        </a>&nbsp;<a  id="relator" href="#relatorTest<?php echo $fila['id']; ?>" data-toggle="modal" >
                        <button class="btn"  style="margin-bottom: 10px;">Testimonio</button>
                    </p></a>
                  
            </div><!-- col-lg-3 -->
	
            <!--Modal for Testimonios-->
            <div class="modal fade" id="relatorTest<?php echo $fila['id'];?>" tabindex="-1" role="dialog" aria-labelledby="relatorModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header"> <!--Header ventana popup-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="relatorModalLabel" align="center">Testimonio de <?php echo $fila['nombre']." ".$fila['apellido'];?></h4>
                  </div>
                  <div class="modal-body" align="justify"><!--Cuerpo de la ventana popup-->
                        
                    <img class="img-rounded center-block" src="../assets/img/relatores/<?php echo $fila['id'];?>.jpg" width="200" height="200" alt="<?php echo $fila['nombre']." ".$fila['apellido'];?>"></a><br>
                 
                    <p align="justify"><?php echo $fila['testimonio'];?></p> 
                       
                  </div><!--body-->
                </div><!--content-->
              </div><!--Dialog-->
            </div><!--Modal-Test-Relatores-->
            
             <!--Modal for biografia-->
            <div class="modal fade" id="relatorModal<?php echo $fila['id'];?>" tabindex="-1" role="dialog" aria-labelledby="relatorModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header"><!--Header de la ventana popup-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="relatorModalLabel" align="center">Biografía de <?php echo $fila['nombre']." ".$fila['apellido'];?></h4>
                  </div>
                  <div class="modal-body"><!--Cuerpo de la ventana popup-->
                  <img class="img-rounded center-block" src="../assets/img/relatores/<?php echo $fila['id'];?>.jpg" width="200" height="200" alt="<?php echo $fila['nombre']." ".$fila['apellido'];?>"></a><br>
                      <p align="justify"><?php echo $fila['bio'];?></p>
                        
                  </div><!--body-->
                </div><!--content-->
              </div><!--Dialog-->
            </div><!--Modal-BIO-Relatores-->
            
		<?php } //end while 

		
	}/*--FIN---testRelatores-------*/
	
}
?>