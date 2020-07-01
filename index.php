<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<body id="page-top">


  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <img src="assets/img/mmpblanco.png" width="300px;">
      <br><br>
      <h3 class="mb-5">
        <em style="color: white;">Reactivar Municipal</em>
      </h3>
      <a class="btn btn-success btn-sm js-scroll-trigger" href="#about">Accedé al programa</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <p class="lead mb-5">El Programa Reactivar Municipal, es un programa desarrollado en articulación con el Ministerio de Desarrollo Social de la Nación, en la entrega (bajo la modalidad de comodato) de maquinarias, herramientas y materiales para aquel sector que se ha visto afectado económicamente por la pandemia; con el objetivo estimular el desarrollo productivo de pequeña escala en forma individual o colectiva y permitiéndoles así generar una fuente de ingresos genuinos.<br>
          Hay que tener en cuenta que se deberá esperar a que se flexibilice a fin de activar automáticamente la economía y está enfocado a un sector específico de la comunidad. </p>
          <img src="assets/img/mmpverde.png" width="300px">
          <br><br><br><br>
          <a class="btn btn-dark btn-md js-scroll-trigger" href="#masinfo">Más información</a>          
        </div>
      </div>
    </div>
  </section>

  <hr class="display-4">

  <!-- About -->
  <section class="content-section" id="masinfo">
    <div class="container">
      <div class="row p2">
        <div class="col-md-12">
          <h2>Requisitos a tener en cuenta para el momento de la solicitud:</h2>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <li>Ser mayor de 18 (dieciocho) años de edad; argentino nativo, naturalizado o por opción, o extranjero con residencia permanente en el país.</li>
          <li>No tener una relación de dependencia (empleo formal registrado).</li>
          <li>No ser jubilado/a, ni pensionado/a (salvo pensión no contributiva).</li>
          <li>Tener tres (3) años mínimos continuos de residencia en el Distrito de Marcos Paz acreditables previos a la presentación.</li>
          <li>Contar con única vivienda familiar de ocupación permanente (propia, alquilada, compartida).</li>
          <li>Se debe revestir en situación de alta vulnerabilidad social y económica.</li>
        </div>                               
      </div>
      <br><br>      
    </div>
  </section>

  <hr>

  <!-- Services -->
  <section class="content-section" id="services">
    <div class="container">
      <div class="content-section-heading text-center">
        <h2 class="mb-5 text-darkgreen">Formulario de Solicitud</h2>

      </div>
      <div class="row">
        <div class="offset-md-3 col-md-6">
          <span>Preinscribite en el programa Reactivar completando con sus datos personales el siguiente formulario</span>
          <br>
          <br>
          <form action="ejes.php" method="post">
            <div class="form-group">
              <label>Apellido/s: </label>
              <input type="text" class="form-control" id="apellido" name="apellido" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="form-group">
              <label>Nombres: </label>
              <input type="text" class="form-control" id="nombre" name="nombre" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="form-group">
              <label>Número de Documento: </label>
              <input type="number" class="form-control" id="documento" name="documento" required minlength="7" maxlength="8">
            </div>
            <div class="form-group">
              <label>Número de CUIL: </label>
              <input type="number" class="form-control" id="cuil" name="cuil" required minlength="10" maxlength="11">
            </div>
            <div class="form-group">
              <label>Numero de Celular: (sin 0 y 15)</label>
              <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>            
            <div class="form-group">
              <label>Dirección y Altura: </label>
              <input type="text" class="form-control" id="direccion" name="direccion" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="form-group">
              <label>Barrio: </label>
              <input type="text" class="form-control" id="barrio" name="barrio" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="form-group">
              <label>Localidad: </label>
              <input type="text" class="form-control" id="localidad" name="localidad" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-block" value="Continuar">
          </form>          
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
