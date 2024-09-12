<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="MatiasHerrera">
<meta name="description" content="taller de ceramica">
<meta name="keywords" content="ceramica, kapra">
<style>
    @font-face{
        font-family:'Rockwell Nova Light';
        src:url('letra/RockwellNova-Light.woff2') format('woff2');
    }
    </style>     
<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" media="(min-width:800px)" href="estilos.css">
<link rel="stylesheet" media="(max-width:800px)" href="movil.css">
<script src="validar.js"></script>	
<title>Kapra Ceramica</title>
<link rel="apple-touch-icon" sizes="180x180" href="iconos/iconokapra/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="iconos/iconokapra/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="iconos/iconokapra/favicon-16x16.png">
<link rel="manifest" href="iconos/iconokapra/site.webmanifest">
<script src="https://kit.fontawesome.com/af3a45c356.js" crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PB0FTL1GTR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PB0FTL1GTR');
</script>
</head>
<body>
<header>
	<section class="gridhead">
			<article><a href="index.html"><img src="logo/fondo2remove.png"></a></article>
			<div class="menu">
				<input class="check" type="checkbox" id="btn-menu">
				<label for="btn-menu"><img class="boton-menu" src="iconos/menu.png" ></label> 
			<nav class="menu-nav">
			<article><a href="index.html"><b>Inicio</b></a></article>
			<article><a href="conocenos.html"><b>K'apra</b></a></article>	
			<article><a href="productos.html"><b>Productos</b></a></article>
			<article><a class="btn" href="contacto.html"><b>Contacto</b></a></article>
			</nav>
			</div>
	</section>
</header>
<?php
		function recogeDato($campo){
		return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
		}

		$nombre = recogeDato ("nombre");
		$apellido = recogeDato ("apellido");
		$movil = recogeDato ("movil");
		$email = recogeDato ("email");
		$mensaje = recogeDato ("mensaje");


		if (isset($_REQUEST["enviar"])){
			$para = "matiash.mh@gmail.com";
			$asunto = "Consulta web - Kapra";
			$mensaje = "Datos de la consulta: \n".
				"Nombre: ".$nombre."\n".
				"Apellido: ".$apellido."\n".
				"Movil: ".$movil."\n".
				"Email: ".$email."\n\n".
				"Mensaje: \n".$mensaje;

			mail($para, $asunto, $mensaje);
			echo "<p><b>Tu mensaje fue enviado correctamente.</b></p>\n";
			echo "<p><b>Nos pondremos en contacto lo antes posible.</b></p>\n";
		}
?>	
</body>	
<footer>
	<section  class="pie">
	<div>
		<i class="fa-regular fa-square-check"></i><br><br>
		<p><b>¿COMO ENCONTRARNOS?</b></p><br>
		<p>Movil:381476-1258/386557-1033</p>
		<p>kapra@kapraceramica.com</p>
		<p>Pje Clotilde Doñate 831- YB- Tucumán</p>
	</div>
	<div>
		<i class="fa-regular fa-square-check"></i><br><br>
		<p><b>¿COMO APUNTARTE A LOS CURSOS Y TALLERES?</b></p><br>
		<p>A través del teléfono o rellenando el formulario de contacto</p><br>
		<a href="contacto.html"><b>¡APÚNTATE!</b></a>		 
	</div>
	<div>
		<i class="fa-regular fa-square-check"></i><br><br>
		<P><B>¿SEGUINOS EN LAS REDES SOCIALES!</B></P><br>
		<P>Descubrirás reels, videos, información y todo lo que necesites para comenzar este nuevo estilo de vida</P>
		<a href="https://www.instagram.com/kapra.ceramica/"><img src="iconos/instagram-removebg-preview.png" width="60px"></a>
	</div>
		</section>
</footer>		
</html>	