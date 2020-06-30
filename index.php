<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<body id="page-top">

  <!-- Navigation 
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a> -->


  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <img src="assets/img/comproenmipueblo-logo.png" width="300px;">
      <!--<h1 class="mb-1">Compro en mi Pueblo</h1> -->
      <h3 class="mb-5">
        <em style="color: white;">Una forma diferente de comprar</em>
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
          <li>Ser mayor de 18 (dieciocho) años de edad; argentino nativo, naturalizado o por opción, o extranjero con residencia permanente en en el país;</li>
          <li>No tener una relación de dependencia (empleo formal registrado);</li>
          <li>Tres años de residencia en el Distrito de Marcos Paz;</li>
          <li>Contar con una sola vivienda familiar (propia, alquilada, compartida);</li>
          <li>Se debe encontrar en situación de alta vulnerabilidad social y económica. </li>
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

  <!-- Services -->
  <section class="content-section text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h2 class="mb-5 text-darkgreen">¿Qué estas buscando?</h2>
      </div>


      <div class="row">

        <?php
        include("config/db.php");
        include("config/conexion.php");        
        $consulta=mysqli_query($con,"select * from categorias order by tipo");
        while($campo=mysqli_fetch_array($consulta)){
        ?>


        <div class="col-lg-3 col-md-6 p2">
          <a href="categories.php?id=<?php echo $campo['id_categoria'] ?>"><img src="assets/img/categorias/<?php echo $campo['imagen'] ?>" class="rounded-circle" /></a>
          <h4 class="text-mmp">
            <strong><?php echo $campo['tipo'] ?></strong>
          </h4>
        </div>


        <?php
          }
        ?>        

    </div>
  </section>


  <!-- Call to Action -->
  <section class="content-section text-white" id="faq">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 p1">
          <a href="index.php" class="btn btn-compro btn-block"><img src="assets/img/comproenmipueblo-logo.png" width="262px">
          </a>
        </div>
        <div class="col-md-6 p1">
          <a href="https://www.facebook.com/FeriasOnlinemmp" class="btn btn-feria btn-block"><img src="assets/img/feriavirtual.png" width="150px" class="p1"></a>        
          <!--
          <br><br>          
          <h2 class="text-dark">Respuestas para la comunidad</h2>
        </div>
        <div class="col-md-6 p2">
          <a href="#" class="btn btn-success btn-block p2">
            <h2>Soy vecino de Marcos Paz</h2>
            <br>            
            <h4>
              <strong>¿Que beneficios obtengo?</strong>
            </h4>            
          </a>        
        </div>
        <div class="col-md-6 p2">
          <a href="#" class="btn btn-primary btn-block p2">
            <h2>Soy Comerciante</h2>
            <br>            
            <h4>
              <strong>¿Como puedo adherirme al programa?</strong>
            </h4>            
          </a>        
        </div> -->        
      </div>      
    </div>
  </section>

  <!-- Map -->
  <section id="contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26214.297270198735!2d-58.85284599653067!3d-34.78613311589264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcec18593da79b%3A0xea7c5321cc18b346!2sMarcos%20Paz%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1590896867331!5m2!1ses-419!2sar" width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>        
  </section>


  <?php include("layout/footer.php");?>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <?php include("layout/script.php"); ?>

</body>

</html>
