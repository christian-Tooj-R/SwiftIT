<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Accueil</title>
    
  </head>
  <body>
    
            <div class="row">
              <?php for($i = 0;$i<count($annonce);$i++) {?>

              <div class="col-lg-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p>Vous avez envoyer votre CV pour le poste de <?php echo $annonce[$i]['poste']; ?> 
                       chez <?php echo $annonce[$i]['adresse'];?>
                    </p>

                    <p>Veuillez attendre leur reponses!</p>
                  </div>  
                </div>
              </div>

              <?php } ?>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   
  </body>
  <script type="text/javascript" src="<?php echo base_url("assets/js/MyJs");?>"></script>
</html>