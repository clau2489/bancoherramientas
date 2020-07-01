<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<body id="page-top">

  <!-- Services -->
  <section class="content-section" id="services">
    <div class="container">
      <div class="row">
        <div class="offset-md-3 col-md-6">
          <form action="confirmardatos.php" method="post">
            <?php
            $apellido = $_POST['apellido'];
            $nombre = $_POST['nombre'];
            $documento = $_POST['documento'];
            $cuil = $_POST['cuil'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $barrio = $_POST['barrio'];
            $localidad = $_POST['localidad'];
            ?>
            <h4>Ejes y Perfiles de las actividades que se ofrecen a los ciudadanos/as para poder desarrollar su proyecto:</h4>
            <br>
            <div class="form-group">
              <select class="form-control" name="actividad" id="actividad" required>
                <optgroup label="1) LIMPIEZA, HIGIENE, SERVICIOS AMBIENTALES Y RECICLADO:">
                  <option value="1a">A- Mantenimiento de espacios verdes (jardinería/poda/piletas)</option>
                  <option value="1b">B- Recuperación de residuos</option>
                  <option value="1c">C- Energías renovables</option>
                  <option value="1d">D- Otros</option>
                </optgroup>
                <optgroup label="2) CONSTRUCCIÓN, INFRAESTRUCTURA Y MEJORAMIENTOS HABITACIONAL:">
                  <option value="2a">A- Construcción (albañilería, mejoramientos habitacionales)</option>
                  <option value="2b">B- Servicios de mantenimiento (ampliaciones, refacciones, pintura, etc.);</option>
                  <option value="2c">C- otros</option>
                </optgroup>
                <optgroup label="3) TEXTIL, PRODUCCION Y MANUFACTURACIÓN:">
                  <option value="3a">A- Textil</option>
                  <option value="3b">B- Indumentaria</option>
                  <option value="3c">C- Marroquinería</option>
                  <option value="3d">D- Otros</option>
                </optgroup>
                <optgroup label="4) AGRICULTURA Y PRODUCCIÓN DE ALIMENTOS">
                  <outgroup label="A- Gastronomía">
                    <option value="4aa">A1- Panadería</option>
                    <option value="4ab">A2- Pizzería</option>
                    <option value="4ac">A3- Pastelería</option>
                    <option value="4ad">A4- Elaboración de pastas caseras</option>                    
                  </outgroup>
                  <outgroup label="Producción de Alimentos:">
                    <option value="4ba">B1- Huerta, apicultura, agricultura familiar, etc</option>
                    <option value="4bb">B2- Producción de agro alimentos ecológicos</option>
                    <option value="4bc">B3- Elaboración de alimentos con valor agregado y trazabilidad</option>                   
                  </outgroup>
                </optgroup>
                <optgroup label="5) COMERCIALIZACIÓN COMUNITARIA: ">
                  <option value="5a">A. Artesanías: cerámica / vidrio/ cuero/ madera/ entre otros</option>
                  <option value="5b">B- Micro emprendedores, Mini pymes, Emprendedores, Feriantes</option>
                  <option value="5c">C- Otros</option>
                </optgroup>
                <optgroup label="6) OTRAS ACTIVIDADES PRODUCTIVAS: ">
                  <option value="6a">A- Peluquería/ manicura/ pedicuría/ barbería/ esteticista</option>
                  <option value="6b">B- Comercios de Ventana /Productos Hecho en Marcos Paz</option>
                  <option value="6c">C- Otros</option>
                </optgroup>                                                                 
              </select>              
            </div>
            <hr>
            <div class="form-group">
              <label>Nombre y Apellido del Colaborador:</label>
              <input type="text" class="form-control" name="colaborador" id="colaborador" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <hr>
            <div class="form-group">
              <label>Enumere hasta 5 elementos necesarios para desarrollar el emprendimiento pizzero</label>
              <span style="font-size: 12px">Ejemplo: <br>
              Actividad: Pizzeria, Materiales: 1 Horno Pizzero, 6 Moldes para pizza, 2 Cucharones, 1 Cortador de pizza, 1 Gancho</span>
              <textarea class="form-control" rows="5" name="elementos" id="elementos" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
              </textarea>
            </div>
            <hr>
            <div class="form-group">
              <label>Enumere los materiales y/o insumos necesarios para llevar a cabo su proyecto: </label>
              <span style="font-size: 12px">Ejemplo: <br>
              Actividad: Pizzeria, Materiales: 1 Bolsa de harina, 1 lata de tomate, 1 bolsa de orégano, 1 botella de aceite, 2 hormas de queso</span>
              <textarea class="form-control" rows="5" name="materiales" id="materiales" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
              </textarea>
            </div>
            <div class="form-group">
              <label>Usted esta realizando la preinscripcion online, con sus datos personales contemplando las maquinarias, herramientas y materiales o insumos a necesitar para la actividad enumerándolas en forma de prioridad de menor a mayor; manifestando asimismo su experiencia que cuenta en el mismo como así también si cuenta con alguna maquinaria previa.</label>
              <label>Esta solicitud tendrá un numero de seguimiento que será brindado por el sistema informático; posteriormente pasará a una junta evaluadora integrada por distintas áreas de competencia municipal a fin de analizar la viabilidad del proyecto en la cual se tendrá en cuenta los requisitos y consideraciones establecidas precedentemente.</label> 
              <label>La Junta Evaluadora esta conformada por las siguientes áreas: (a consideración)
                <li>- Área de Gestión Pública.</li>
                <li>- Área de Gobierno.</li>
                <li>- Área de Participación.</li>
                <li>- Área de Economía.</li>
                <li>- Área de Desarrollo Productivo.</li>
                <li>- Área de Desarrollo Social.</li>
                <li>- Área de Comercio.</li>
                <li>- Área de Contrataciones.</li>
                <li>- Área de Unidad Intendente.</li>
              </label>
            </div>
            <div class="form-group">
              <label></label>
              <input type="hidden" name="apellido" id="apellido" value="<?php echo $apellido ?>">
              <input type="hidden" name="nombre" id="nombre" value="<?php echo $nombre ?>">
              <input type="hidden" name="documento" id="documento" value="<?php echo $documento ?>">
              <input type="hidden" name="cuil" id="cuil" value="<?php echo $cuil ?>">
              <input type="hidden" name="telefono" id="telefono" value="<?php echo $telefono ?>">
              <input type="hidden" name="direccion" id="direccion" value="<?php echo $direccion ?>">
              <input type="hidden" name="barrio" id="barrio" value="<?php echo $barrio ?>">
              <input type="hidden" name="localidad" id="localidad" value="<?php echo $localidad ?>">
              <input class="btn btn-success btn-block" type="submit" name="" value="Confirmar datos">
            </div>                                    
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
