<?php 
	include_once"../common/evento.php";
	
	//RECIBO LOS DATOS DEL FORMULARIO VÍA POST
	
	$email=$_POST['email']; 
	$fname=$_POST['fname']; 
	$lname=$_POST['lname']; 
	$fono=$_POST['fono']; 
	$desc=$_POST['desc']; 
	$precio=$_POST['precio'];
	//Datos del evento
	$nombre_ev=$_POST['nombre_ev'];
	$fecha_ev=$_POST['fecha_ev'];
	$ubicacion_ev=$_POST['ubicacion_ev'];
	
	$precio_f=number_format($precio,0,",",".");// precio formateado con (.)
	
	
	// VERIFICA SI SE ESCRIBIÓ ALGÚN CÓDIGO DE DCTO
	
	if($desc!=NULL){
		$verificarDcto= verificarDcto($desc);//Función de evento.php
		$estado_cupon;
		
		if ($verificarDcto!=NULL){
			$estado_cupon= 'Correcto';
			
			foreach($verificarDcto as $data) { //loop the array
				
				$cupon_usados=$data['usados'];
				$cupon_codigo=$data['codigo'];
				$cupon_monto=$data['monto'];
			}
			
			$precio_final = $precio - $cupon_monto; //realiza el descuento en el precio
			$precio_final_f=number_format($precio_final,0,",",".");		
			$cupon_monto_f=number_format($cupon_monto,0,",",".");		
		}
		else {
			$estado_cupon= 'Incorrecto'; // muestra 'incorrecto' si es que el código no coincide en la ddbb
			$precio_final= $precio;
			$precio_final_f=number_format($precio_final,0,",","."); // precio formateado (con punto)
		}
	}
	else {
			
			$precio_final_f=number_format($precio,0,",",".");
	}

?>

<!DOCTYPE html>
<html lang="es">

<?php 
include"template/head.html"
?>
  <body>
  
	   <?php 
       include"template/navbar.php";
       ?>
       
       <div class="container centered" style="margin-top: 120px; margin-bottom: 10px;">
       
        	<h2>Hola <strong><?php echo $fname;?></strong>, este es el detalle del pago a realizar:</h2>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            
            	<!--Tabla con información del evento y datos del cliente-->
                <table class="table-responsive " style="margin-top:30px; margin-bottom:20px; text-align:left">
                    <tr>
                        <td>Evento:</td>
                        <td><?php echo $nombre_ev;?></td>
                    </tr>
                    <tr>
                        <td>Ubicación:</td>
                        <td><?php echo $ubicacion_ev;?></td>
                    </tr>
                    <tr>
                        <td>Fecha:</td>
                        <td><?php echo $fecha_ev;?></td>
                    </tr>
                    <tr>
                        <td>Tipo de Entrada:</td>
                        <td><?php if ($precio==250000){?>Amigos Desafío de Humanidad <?php } else echo"Normal";?></td>
                    </tr>
                    <tr>
                        <td>Valor Entrada:</td>
                        <td><?php echo $precio_f;?></td>
                    </tr>
                   
                    <?php 
                        if($desc!=NULL){ ?>
                    <tr>    	
                        <td>Descuento:</td>
                        <td><?php if($estado_cupon=='Correcto')echo $cupon_monto_f;  else echo "No aplica";?></td>
                    </tr><?php }?>
                    <tr>
                        <td><h2>Total a Pagar </h2> </td>
                        <td><h2> &nbsp;<strong> $ <?php echo $precio_final_f;?></strong></h2></td>
                    </tr>
                </table>
                
            </div>
            <div class="col-lg-3">
            </div>
            
        </div>
        <div class="container centered" style="margin-bottom: 10px;">
        	<p><strong>“Puedes pagar el valor de tus entradas
mediante Transferencia electrónica o vía WebPay”</strong></p>
		</div>
        
        
        <div class="container centered"><!--Transferencia--y--webpay-->
            
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
            
            	<h4 align="left">Datos para Transferencia:</h4><br>

                 <p style="text-align:left; ">· Sodipe SpA. <br>
                · Rut: 76.389.034-1<br>
                · Banco BCI <br>
                · N° de cuenta corriente: 58136266 <br>
                · Correo de confirmación:  ventas@grupoesencial.cl<br>
                 </p>
            </div>
            
            <div class="col-lg-4" style="margin-bottom:30px;">
            	<h4 style="margin-bottom:15px;">Pago vía WebPay: por favor haga click en el siguiente
boton:</h4>
            
             <a href="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=11445858" target="_blank">
                <button class="btnaction"  style="padding-top:0px;"type="button" >PAGAR CON WEBPAY</button>
                <img src="../assets/img/logos/logo-webpay.png" width="200"></a>
            </div>
            <div class="col-lg-2">
            </div>
       </div><!--Transferencia-->
       
       <div class="container centered" style="margin-bottom: 40px; margin-top:20px;">
       		<p style=" font-size:12px"><strong>Apenas recibamos su pago, confirmaremos su inscripción vía correo electrónico.</strong><br> 
                Si usted ya realizó su pago, recibirá la confirmación de su inscripción dentro de las próximas 48 horas.
            </p>
       </div>
   	   <?php 
       include"template/footer.php";
       ?>	
   </body>
</html>