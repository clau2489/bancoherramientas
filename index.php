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
        <em style="color: white;">Banco de Maquinarias, Herramientas y Materiales para la Emergencia Social</em>
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
          <h2>Propuesta de la Convocatoria:</h2>
          <p class="lead mb-5">En el marco de la emergencia alimentaria y social, agravada por la pandemia declarada por la ORGANIZACIÓN MUNDIAL DE LA SALUD (OMS) en relación con el coronavirus (COVID-19), resulta necesario tomar las medidas adecuadas que permitan al Estado fortalecer la atención de los vecinos y vecinas que se han visto afectados en el ámbito social y económico.</p>
          <p class="lead mb-5">Es por ello que el Ministerio de Desarrollo Social de la Nación y el Municipio de Marcos Paz ofrecen la posibilidad de ser beneficiarios del  Programa de “Banco de Maquinarias, Herramientas y Materiales para la Emergencia Social” creado por resolución ministerial N° 131/2020; la cual tiene por objetivo estimular el desarrollo productivo de pequeña escala en forma individual o colectiva mediante la entrega de insumos, herramientas y/o equipamiento, permitiéndoles generar una fuente de ingresos genuinos y mitigando, de tal modo, los factores de riesgo y exclusión provocados por la coyuntura de la emergencia social y económica en que nos encontramos inmersos la comunidad en su conjunto.</p>
          <p class="lead mb-5">En virtud de este nuevo período de Aislamiento Social Preventivo y Obligatorio en fase 1, que se inicia el primero de Julio en la Ciudad de Marcos Paz, se convoca de manera virtual a todos los vecinos y vecinas de manera tal, a ser potenciales beneficiarios de este Programa mencionado anteriormente.</p>
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
          <li>Ser mayor de 18 (dieciocho) años de edad; argentino nativo, naturalizado o por opción, o extranjero con residencia permanente en el país</li>
          <li>No tener una relación de dependencia (empleo formal registrado)</li>
          <li>No ser jubilado/a, ni pensionado/a (salvo pensión no contributiva)</li>
          <li>Tener tres (3) años mínimos continuos de residencia en el Distrito de Marcos Paz acreditables previos a la presentación.</li>
          <li>Contar con única vivienda familiar de ocupación permanente (propia, alquilada, compartida);</li>
          <li>Se debe revestir en situación de alta vulnerabilidad social y económica. </li>
        </div>                               
      </div>
      <br><br>
      <div class="row p2">
        <div class="col-md-12">
          <h2>Requerimientos a tener en cuenta; para ser considerados en la evaluación de potencial beneficiario/a de este Programa:</h2>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <li>Ser beneficiado por el IFE (Ingreso Familiar de Emergencia) </li>
          <li>No ser beneficiario del Programa Hacemos Futuro y/o Salario Complementario; o cualquier programa sea nacional o provincial que tenga como finalidad la entrega de maquinaria o herramientas.</li>
          <li>Que no sean deudores por asignaciones familiares o cuotas alimentarias</li>
          <li>El programa puede ser destinado a una persona individual o asociativa (puede ser formal o informal).</li>
          <li>Completar inicialmente el formulario de solicitud proforma vía digital en la página web en el cual el/la solicitante ingresará sus datos con carácter de declaración jurada.</li>
        </div>                               
      </div>      
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
