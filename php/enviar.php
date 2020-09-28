<?php
	var bandera=FALSE;
	$destino = "mitiendao41@gmail.com";
	$mensaje = $_POST["NombreVendedor"];
	
	$post =(
		(isset($_POST['nombre1']) && !empty($_POST['nombre1'])) &&
		(isset($_POST['apellido1']) && !empty($_POST['apellido1'])) &&
		(isset($_POST['dni1']) && !empty($_POST['dni1'])) &&
		(isset($_POST['domicilio1']) && !empty($_POST['domicilio1'])) && 
		(isset($_POST['cel1']) && !empty($_POST['cel1'])) && 
		
		(isset($_POST['nombre2']) && !empty($_POST['nombre2'])) &&
		(isset($_POST['apellido2']) && !empty($_POST['apellido2'])) &&
		(isset($_POST['dni2']) && !empty($_POST['dni2'])) &&
		(isset($_POST['domicilio2']) && !empty($_POST['domicilio2'])) && 
		(isset($_POST['cel2']) && !empty($_POST['cel2'])) && 
	);
	if(isset($_POST['enviar'])){
		if($post==TRUE){
			//Envia el correo
			$contenido ="Mensaje: " . $mensaje . descargapdfmueble();
			mail($destino,"Formulario Compra Venta",$contenido);
			header("Location:../Principal.html");
		}else{
			echo("<script>alert('NO SE PUDO ENVIAR EL CORREO'); </script>");
		}
	}

	
	
?>