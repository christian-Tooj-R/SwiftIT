<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styleInscrit.css"); ?>" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <div class="main-panel">
          <div class="content-wrapper">
      
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card" style="margin-left: 300px;">
                <div class="card">
                  <div class="card-body">
                   
                    <form action="<?php echo site_url("accueilController/beMember");?>" class="forms-sample">
                      
                      <div class="form-group">
                        <label for="exampleInputUsername1">Nom</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputUsername1" placeholder="Nom" />
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="text" class="form-control" name="email" id="exampleInputUsername1" placeholder="Email" />
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Mot de passe</label>
                        <input type="text" class="form-control" name="mdp" id="exampleInputUsername1" placeholder="Mot de passe" />
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2"> M'inscrire </button>
                   
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
           
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

  </body>
</html>