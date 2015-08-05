	
        
         <!--Modal para contacto-->
         
            <div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="relatorModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="relatorModalLabel" align="center">Contáctenos para más información</h4>
                  </div>
                  <div class="modal-body">
                  
                  <div class="row" style="padding:30px;">
  
                      <form action="../controller/recibo_contacto.php" method="post">
                      
                        
                        <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="nombre" id="nombre"  class="form-control"required="required" placeholder="Nombre">
                        </div>
                        
                        <div class="form-group">
                        <label for="name">Apellido</label><br>
                        <input type="text" name="apellido"  placeholder="Apellido"required="required" class="form-control ">
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                        <label  for="mensaje">Mensaje</label>
                        <textarea name="mensaje" required="required" class="form-control" rows="8"></textarea><br />	
                       
                        <button type="submit" class="btn btnaction2 center-block"  name="submit" id="submit">Enviar</button>					 
                        </div>
                                              </form>
                 	 </div>
             
                  </div>
                </div><!--content-->
              </div><!--Dialog-->
            </div><!--Modal--->

