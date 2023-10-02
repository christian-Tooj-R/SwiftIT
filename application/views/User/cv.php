<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="<?php echo base_url("assets/css/inscription.css");?>">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Remplissez votre CV</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Diplome</label>
													<select class="form-control form-control-sm" name="diplome"  >
														<option>Bacc</option>
														<option>Bepc</option>
														<option>Cepe</option>
													  </select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" >Sexe</label>
													<select class="form-control form-control-sm" name="diplome"  >
														<option>Feminin</option>
														<option>Masculin</option>

													  </select>
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<label class="label" >Date de naissance</label>
													<input type="date" class="form-control" name="date" id="date" placeholder="Email">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="label" >Situation</label>
													<select class="form-control form-control-sm" name="situation"  >
														<option>Marie(e)</option>
													  </select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="#">Adresse</label>
													<input type="text" class="form-control" name="adresse" placeholder="adresse" />
											</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="#">Annee d'experience</label>
													
													<input type="text" class="form-control" name="annee" id="exampleInputUsername1" placeholder="annee d' experience" />
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Valider" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>

