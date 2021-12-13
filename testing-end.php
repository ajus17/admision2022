<?php
  session_start();
  include('assets/template/cabecera.php');
  include('app/zona_priv.php');
  include_once('app/usuarios.php');
  include_once('app/dataIntent.php');
  include_once('app/questionrand.php');

?>
 <div class="content login-container page-0">

        <div class="container-fluid test">
          <div class="row">
          <div class="col-xl-2 col-md-1"></div>
            <div class="col-xl-8 col-md-10">
              <div class="card">
                <div class="card-header card-header-primary btn-center">
                  <img src="img/banner-login.png" class="img-fluid " alt="">
                    <!-- <h3 class="card-title">Iniciar sesión </h4>
                    <p class="card-category">Test Psicométrico UNAN-Managua 2021</p> -->
                  </div>
                  <div class="card-body pt-4">
                    <div class="row">
                      <div class="col-md-6">
                        <div>
                          <img width="350" class="rounded mx-auto d-block img-fluid" src="img/exam.svg" alt="Has terminado exitosamente tu examen psicometrico">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div>
                          <p class="text-justify">
                          Has completado satisfactoriamente el llenado del test psicométrico.
                          <br><br>
                          Puedes consultar los resultados el día <strong>05 de Febrero del 2021</strong> en nuestro sitio web: <a href="http://www.unan.edu.ni" target="_blank" rel="noopener noreferrer">www.unan.edu.ni</a>
                          en el enlace: <strong>Resultados Admisión 2021</strong>
                          </p>
                        </div>
                            <div >
                            <form action="app/logout.php" method="POST">
                              <button type="submit" class="btn btn-primary mx-sm-auto mx-md-0 d-block">Cerrar<div class="ripple-container"></div></button>
                              </form>
                            </div>  
                      </div>
                      </div>
                    </div>
                <div class="card-footer">
                  <div class="progress progress-line-primary ">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                          <span class="sr-only">100% Complete</span>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
  $banco=new Banco();
  $intent=new Data();
  $banco->testStatusUpdate($intent->getIntento());
  include('assets/template/foot_full.php');

  

?>
