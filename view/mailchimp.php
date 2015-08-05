<?php 
	include"../common/evento.php";
	
	$ev_id=4;
	$selec_ev = selectEvento($ev_id); //get the result array
	
	foreach($selec_ev as $data) { //loop the array
		
		$nombre_ev=$data['nombre'];
		$precio_ev=$data['precio'];
		$precio2_ev=$data['precio2'];
		$ubicacion_ev=$data['ubicacion'];
		$fecha_ev=$data['fecha'];
		
	}
?>
<!--Modal para contacto-->
         
            <div class="modal fade" id="mailchimp" tabindex="-1" role="dialog" aria-labelledby="relatorModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="relatorModalLabel" align="center">Formulario de Inscripción</h4>
                  </div>
                  <div class="modal-body">
                  	
                    <!-- Begin MailChimp Signup Form -->
                    <div id="form" style="background:#fff;  clear:left; font:14px Helvetica,Arial,sans-serif;">
						<!--<form action="//grupoesencial.us11.list-manage.com/subscribe/post?u=985a5272f01dcd849f648943a&amp;id=8e40043c46" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class=" form-horizontal" target="_blank"  role="form">-->
                        
                       <form role="form" method="post" action="confirmacion.php" class=" form-horizontal">
                        <div id="mc_embed_signup_scroll">
                        
                                    <br /><h3>Inscríbete en:<br /> "<?php echo $nombre_ev;?>"</h3><br />
                          
                            <div class="form-group">
                                <label for="email" class="col-lg-3 control-label">Email</label>
                                <div class="col-lg-8">
                                  <input type="email" class="form-control" name="email" id="email" required="required" placeholder="Email">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="fname" class="col-lg-3 control-label">Nombre</label>
                                <div class="col-lg-8">
                                  <input type="text" value="" name="fname" required="required" class="form-control" id="fname" placeholder="Nombre">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="lname" class="col-lg-3 control-label">Apellido</label>
                                <div class="col-lg-8">
                                  <input type="text" value="" name="lname" required="required" class="form-control" id="lname" placeholder="Apellido">
                                </div>
                            </div>
                                     
                            <div class="form-group">
                                <label for="fono" class="col-lg-3 control-label">Teléfono</label>
                                <div class="col-lg-4">
                                  <input type="text" name="fono" required="required" class="  form-control " value="" id="fono" placeholder="Teléfono">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="mce-DESC" class="col-lg-3 control-label">Código de Descuento</label>
                                <div class="col-lg-4">
                                 <input type="text" value="" name="desc" class="form-control " id="desc" placeholder="Código">
                                
                            	</div>
                            </div>
                            
                            <div class="form-group">
                                <label for="precio" class="col-lg-3 control-label">Selecciona Valor</label>
                                <div class="col-lg-8" align="left">
                                	<label>
                                  	  <input type="radio" value="<?php echo $precio2_ev;?>" name="precio" id="precio1"> $<?php echo number_format($precio2_ev,0,",",".");?> - Amigos Desafío de Humanidad*
                                      </input>
                                    </label><br />
                                    <label>    
                                  	  <input type="radio" value="<?php echo $precio_ev;?>" name="precio" id="precio2"> $<?php echo number_format($precio_ev,0,",",".");?> - Valor Normal
                                      </input>
                                    </label>  	
                                    <p align="justify" style="padding-top:15px;; font-size:11px; line-height: 15px;">* El valor para “Amigos de Desafío de Humanidad” se cumple al ser miembro activo de un Grupo de Desarrollo, al haber asistido a, al menos, un Encuentro de Lo Alto, al ser parte de la Comunidad de Organizaciones Sociales o al ser colaborador o miembro de alguna de las empresas que colaboran con Desafío. Esta condición será verificada con la propia institución, si es necesario, una vez inscrito el participante, pudiendo Grupo Esencial rechazar la inscripción si no se verifica el cumplimiento, devolviendo el pago efectuado al interesado.</p>
                                    <div class="clear"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="btn btnaction2">
                                    </div>
                            	</div>
                            </div>
                            
                            <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none">
                                    </div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_985a5272f01dcd849f648943a_8e40043c46" tabindex="-1" value="">
                            </div>
                           
                          </div>
                          
                          <input type="hidden" name="nombre_ev" value="<?php echo $nombre_ev;?>">
                          <input type="hidden" name="ubicacion_ev" value="<?php echo $ubicacion_ev;?>">
                          <input type="hidden" name="fecha_ev" value="<?php echo $fecha_ev;?>">
                           
                    	</form>
                       
                 	</div>

		<!--End mc_embed_signup-->
                
             
                  </div><!--modal Body-->
                </div><!--content-->
              </div><!--Dialog-->
            </div><!--Modal--->


