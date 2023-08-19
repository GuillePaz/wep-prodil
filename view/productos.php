<?php

use Components\Button; ?>

<div class="rounded p-sm-3 p-1 my-4 mx-sm-4 mx-1 main ">

  <h2>Productos de PRODIL GROUP</h2>
  <br>
  <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
          <img class="img-icon" src="<?php


                                      echo PRODUCTOS . "/procom.png" ?>" alt="">
          <div>
            <H3>PROCOM</H3>
            <span>Diseñamos, Calculamos y Visionamos juntos tus Proyectos.</span>
          </div>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
        <div class="accordion-body">
          <h4>Diseños de Proyectos de Ingeniería, Cálculo de Cómputos, Cálculos Estructurales y Elaboración de Presupuestos</h4>
          <p><b>Fase 1 - </b> SISTEMATIZACIÓN DEL REQUERIMIENTO (LEVANTAMIENTO DE LA INFORMACIÓN DEL CLIENTE)</p>
          <p><b>Fase 2 - </b>DISEÑO DEL PROYECTO (RENDERS Y VIDEO RENDERS)</p>
          <p><b>Fase 3 - </b>COMPUTOS METRICOS</p>
          <p><b>Fase 4 - </b>PRESUPUESTO BASE</p>
          <p><b>Fase 5 - </b>PERMISOLOGÍA</p>
          <?php new Button("Más Información", "/nuestros-productos/procom","c-btn") ?>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
          <img class="img-icon" src="<?php echo PRODUCTOS . "/verigas.png" ?>" alt="">
          <div>
            <H3>VERIGAS</H3>
            <span>Verificamos, Reparamos e Instalamos nuevos Sistemas de Gas.</span>
          </div>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
        <div class="accordion-body">
          <h4>Acometidas de Sistemas de Gasificación</h4>
          <p><b>Fase 1 - </b> PRUEBA DE HERMETICIDAD BÁSICA (DESDE LA VALVULA PRINCIPAL, COCINA Y HORNOS)</p>
          <p><b>Fase 2 - </b>PRUEBA DE HERMETICIDAD COMPLETA</p>
          <p><b>Fase 3 - </b>REPARACIÓN DE SISTEMAS DE GAS EXISTENTES</p>
          <p><b>Fase 4 - </b>INSTALACIÓN DE SISTEMAS NUEVOS DE GAS RESIDENCIAL</p>
          <p><b>Fase 5 - </b>INSTALACIÓN DE SISTEMAS NUEVOS DE GAS INDUSTRIAL</p>
          <?php new Button("Más Información", "/nuestros-productos/verigas") ?>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          <img class="img-icon" src="<?php echo PRODUCTOS . "/construnow.png" ?>" alt="">
          <div>
            <H3>CONSTRUNOW</H3>
            <span>Ejecutamos los proyectos y hacemos realidad tus Sueños.</span>
          </div>

        </button>
      </h2>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
        <div class="accordion-body">
          <h4>Construcciones Ahora</h4>
          <p><b>Fase 1 - </b>RESANEO DE PAREDES Y APLICACIÓN DE PINTURAS</p>
          <p><b>Fase 2 - </b>REMODELACIONES Y CONSTRUCCIONES VARIAS (DRYWALL, CERAMICAS, BAÑOS, TANQUES SUBTERRANEOS, VIDRIOS, INSTALACIONES ELECTRICAS, SANITARIAS)</p>
          <p><b>Fase 3 - </b>CARPINTERÍA (COCINAS, MUEBLES, CLOSET, MOBILIARIOS)</p>
          <p><b>Fase 4 - </b>HERRERIA EN GENERAL (PORTONES, ESCALERAS, VENTANAS, PUERTAS, PROTECTORES, ENTRE OTROS)</p>
          <p><b>Fase 5 - </b>OPCION DE LLAVE EN MANO</p>
          <?php new Button("Más Información", "/nuestros-productos/construnow") ?>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <DIV class="accordion-header">
        <button class="accordion-button collapsed bg-dark text-white" type="button">
          <img class="img-icon" src="<?php echo PRODUCTOS . "/prodilmat.png" ?>" alt="">
          <div class="w-50">
            <H3>PRODILMAT </H3><span>Suministros, Materiales y Productos de hierro, carpintería y todo para la construcción.</span>
          </div>
          <h3><span class="mx-sm-5 position-absolute end-0 badge text-warning">Próximamente...</span></H3>
        </button>

      </DIV>
    </div>
  </div>

</div>