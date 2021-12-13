
<?php
  include('assets/template/cabecera.php');
?>

 <div class="content login-container">
        <div class="container-fluid ">
          <div class="row">
          <div class="col-xl-3"></div>
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header card-header-primary btn-center">
                 <img src="img/banner-login.png" class="img-fluid " alt="">
                </div>
                <div class="card-body ">
                <form action="app/procesalogin.php" method="POST" name="login" id="login">
                    <div class="row pt-3">  
                        <div class="col-md-2"></div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Usuario:</label>
                          <input type="text" class="form-control" name="username" required>
                        </div>
                      </div>
                    </div>
                    <div class="row pt-4">  
                    <div class="col-md-2"></div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contraseña:</label>
                          <input type="password" class="form-control" name="password" required>
                        </div>
                      </div>
                    </div>
                    <div class="row pt-4">  
                    <div class="col-md-2"></div>
                      <div class="col-md-8 btn-center">
                      <button type="submit" name="entrar" id="btnEntrar" class="btn w-50 btn-primary">Entrar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php include('assets/template/foot_full.php'); ?>
