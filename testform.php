<?php
include "app/zona_priv.php";
include "assets/template/cabecera.php";
?>
 <div class="content login-container page-0">
        <div class="container-fluid ">
          <div class="row">
          <div class="col-xl-2"></div>
            <div class="col-xl-8">
              <div class="card">
                <div class="card-header card-header-primary btn-center">
                <img src="img/banner-login.png" class="img-fluid " alt="">

                </div>
                
                <div class="card-body pt-4">
                     
                <h3  class="text-center">Instrucciones:</h3>
                        <p>
                        Este formulario tiene por objetivo ayudarle a descubrir sus preferencias vocacionales, en el encontrará una lista de actividades agrupadas de 2 en 2, lo que usted tiene que hacer es lo siguiente:
                        </p>
                        <ol>
                            <li><p>Lea las 2 actividades que contiene cada grupo.</p></li>
                            <li><p>Señalar su elección haciendo clic sobre el botón correspondiente a su respuesta</p></li>
                            <li>
                                <p>Usted puede elegir entre las 2 actividades, según sea su Interés:</p>
                                <ul>
                                    <li><p>La que a usted le interesa y le agrada más (SI), la que MENOS le interesa y no le agrada (NO).</p></li>
                                    <li><p>Si le gustan AMBAS puede elegir (SI) (SI) en el par de actividades.</p></li>
                                    <li><p>Si no le gusta NINGUNA puede elegir (NO) (NO) en el par de actividades.</p></li>
                                </ul>
                            </li>

                        </ol>

                       <h3 class="text-center"> Recomendaciones:</h3>
                       <ul>
                           <li><p>Tenga en cuenta, No se trata de un examen, no hay respuestas CORRECTA ni INCORRECTAS.</p></li>
                           <li><p>Deberá responder todo el cuestionario.</p></li>
                       </ul>
                       
                       
                       <div class="row pt-4 "> 
                          <form action="app/terms.php" method="post" name="frmTerms">
                          <div class="form-check btn-center col-12 pl-5">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" name="terms" value="1" required="required"> Me someto a los términos, condiciones y resultado del test 
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          <div></div></div>
                          
                        </div>
                        <div class="row pt-4">  
                          <div class="col-md-6 btn-center">
                            <a href="app/logout.php" class="btn w-50 btn-default">Salir</a>
                          </div>
                            <div class="col-md-6 btn-center">
                              <input type="submit" value="Comenzar" class="btn w-50 btn-primary">
                          </div>
                        </form>
                    </div>                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
include('assets/template/foot_full.php');
?>
