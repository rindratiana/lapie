<!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script> -->
<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Contact</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				<div class="contact-info-warp">
					<div class="contact-info">
						<h4>Adresse</h4>
						<p>Lot III X 307 C Manarintsoa Est, Antananarivo 101, MADAGASCAR</p>
					</div>
					<div class="contact-info">
						<h4>Téléphone</h4>
						<p>+26133 11 199 36</p>
					</div>
					<div class="contact-info">
						<h4>Email</h4>
						<p>lyceeprivelapie@gmail.com</p>
					</div>
					<div class="contact-info">
						<h4>Temps de travail</h4>
						<p>Lundi - Vendredi: 07 H - 17 H</p>
					</div>
				</div>
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
			</div>
			<div class="contact-form spad pb-0">
				<div class="section-title text-center">
					<h3>Contact</h3>
					<p>Contactez-nous pour plus d' information</p>
					<?php if(isset($_GET['envoiMail']) && $_GET['envoiMail']=='succes'){ ?>
						<p>Votre message a été bien envoyé</p>
					<?php } ?>
				</div>
				<form class="comment-form --contact" action="./src/traitementMail.php" method="POST">
					<div class="row">
						<div class="col-lg-4">
							<input type="text" placeholder="Votre nom" name="nom">
						</div>
						<div class="col-lg-4">
							<input type="text" placeholder="Votre adresse mail" name="adresse_mail">
						</div>
						<div class="col-lg-4">
							<input type="text" placeholder="Objet" name="objet">
						</div>
						<div class="col-lg-12">
							<textarea placeholder="Message" name="message"></textarea>
							<div class="text-center">
								<button class="site-btn">Envoyer</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Courses section end-->