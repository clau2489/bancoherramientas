<?php
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$cuil = $_POST['cuil'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$localidad = $_POST['localidad'];
$actividad = $_POST['actividad'];
$colaborador = $_POST['colaborador'];
$experiencia = $_POST['experiencia'];


$d=mt_rand(1,10000);


$to = "reactivar@gmail.com";
$subject = "PROGRAMA: REACTIVAR";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
$message = "
<html>
<head>
<title> Solicitud N° ". $apellido. "</title>
</head>
<body>
<h1>". $apellido ."</h1>
<h1>". $nombre ."</h1>
<h1>". $documento ."</h1>
<h1>". $cuil ."</h1>
<h1>". $telefono ."</h1>

</body>
</html>";
 
mail($to, $subject, $message, $headers);


?>
<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<body id="page-top">

  <!-- Services -->
  <section class="content-section" id="services">
    <div class="container">
      <div class="content-section-heading text-center">
        <h2 class="mb-5 text-darkgreen">Sus datos han sido confirmados</h2>
      </div>
      <div class="row">
        <div class="offset-md-3 col-md-6">
		  	<div class="alert alert-success" role="alert">
			  <h4 class="alert-heading">Felicitaciones</h4>
			  <p>Su preinscripcion al Programa de “Banco de Maquinarias, Herramientas y Materiales para la Emergencia Social” ha sido satisfactoria</p>
			  <br>
        <p>Su numero de solicitud es el: </p>
        <h4>#<?php echo  $d ?></h4>
			  <p class="mb-0">Nuestros representantes del area se estaran comunicando con usted brevemente.</p>
			  <hr>
			  <a class="btn btn-primary btn-block" href="index.php">Volver a la página principal</a>
			</div>         
        </div>
      </div>
    </div>
  </section>



  <?php include("layout/footer.php");?>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <?php include("layout/script.php"); ?>

</body>

</html>
