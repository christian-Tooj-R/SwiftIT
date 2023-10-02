<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="<?php echo base_url("assets/js/Postule");?>"></script>
    <title>Accueil</title>
    
  </head>
  <body>
    
            <div class="row">
              <?php for($i = 0;$i<count($annonce);$i++) {?>

              <div id="<?php echo "boite-"?>" class="col-lg-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Décrochez votre opportunité chez SwiftIt ! </h4>
                    <p>Nous proposons un poste de <?php echo $annonce[$i]['poste']; ?> comme diplome
                       requis,vous devez avoir un <?php echo $annonce[$i]['diplome']; ?>,un genre <?php echo $annonce[$i]['sexe'];?>,
                      age(e) de<?php echo $annonce[$i]['age'];?>,<?php echo $annonce[$i]['situationmatrimoniale']; ?>,ayant au moins <?php echo $annonce[$i]['anneeexperience'];?>
                    </p>

                    <p>Rejoignez-nous et prenez un nouveau départ professionnel.</p>

                    <button id ="bouton" onclick = "setValue(<?php echo $annonce[$i]['idannonce'];?>)" type="submit" style="background-color:#2d2d2d;color:#f2882e;width:100px;height:40px"> Postuler </button>
                  </form>
                  </div>  
                </div>
              </div>
              <?php } ?>
      </div>
      
    <!-- container-scroller -->
  </body>
</html>