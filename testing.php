<?php
include('app/zona_priv.php');
include('assets/template/cabecera.php');
include('app/questionrand.php');
include('app/dataIntent.php');

?>
 <div class="content login-container page-0">

        <div class="container-fluid test">
          <div class="row">
          <div class="col-xl-2 col-md-1"></div>
            <div class="col-xl-8 col-md-10">
              <div class="card">
                <div class="card-header card-header-primary ">
                  <div class="row btn-center">
                  <img src="img/banner-login.png" class="img-fluid " alt="">
                  </div>
                  <div class="row pull-right pr-3">
                    <h4  style="display: flex; align-content: center; margin-bottom: -10px !important"> <i class="material-icons" style="margin-bottom: -20px !important">person</i>
                      <?php echo $_SESSION['estudiante']['nombres'].' '. $_SESSION['estudiante']['apellidos'];?>
                    </h4>
                  </div>
                  </div>
                  <div class="card-body pt-4">
                  <h4 class="btn-center" style="color: #9400FF;">  Tiempo restante:    <span id="hours"></span> : <span id="minutes"></span> : <span id="seconds"></span> <span id="reamming" style="display: none;"></span> </h4>
                    <form action="app/procesaQuestions.php" class="formulario" method="post" id="frmtest" name="frmtest">
                      <h3  class="text-center" id="p1"></h3>
                      <div class="row pt-4 options "> 
                      <input type="hidden" name="pregunta2" id="pregunta2" value=""> 
                              <div class="col-md-6 ">
                                <input type="radio" name="answer-item1" id="answer-item-11" value="1" required="required" au>
                                <label class=" w-50 pull-right" for="answer-item-11">SI</label>
                              </div>
                              <div class="col-md-6 ">
                                  <input type="radio" name="answer-item1" id="answer-item-12" value="0" required="required">
                                  <label class=" w-50 pull-left" for="answer-item-12">NO</label>
                              </div>
                          </div>                         
                      <h3  class="text-center" id="p2"></h3>
                      <div class="row pt-4 options ">  
                      <input type="hidden" name="pregunta1" id="pregunta1" value="">
                              <div class="col-md-6 ">
                                <input type="radio" name="answer-item2" id="answer-item-21" value="0" required="required">
                                <label class=" w-50 pull-right" for="answer-item-21">SI</label>
                              </div>
                              <div class="col-md-6 ">
                                  <input type="radio" name="answer-item2" id="answer-item-22" value="1" required="required">
                                  <label class=" w-50 pull-left" for="answer-item-22">NO</label>
                              </div>
                          </div>  

                        <div class="row pt-5">  
                          <div class="col-md-2"></div>
                              <div class="col-md-8 btn-center">
                              <input type="submit" class="btn w-50 btn-info" id="btnNext" value="Siguiente" name="nextquestion">
                              </div>
                          </div>    
                          </form>
                </div>
                
                <div class="card-footer">
                
                  <div class="progress progress-line-primary " >
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:0%" id="progress-bar">
                          
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
       
      </script>
<?php
include('assets/template/foot_full.php');
?>
