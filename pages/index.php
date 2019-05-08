<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lapie</title>
	<meta charset="UTF-8">
	<meta name="description" content="La Pie">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="Content-Type" content="UTF-8">
	<meta name="Content-Language" content="fr">
	<meta name="Keywords" content="La Pie, lapie, Andavamamba, Antananarivo, Madagascar, ecole, fianarana antananarivo, bacc, bepc, cepe, lapie ancien, fandrosoana, politika, fianarana tsara">
	<meta name="Author" content="la pie">
	<meta name="Identifier-Url" content="lapie">
	<meta name="Reply-To" content="rindrap16.aps1@gmail.com">
	<meta name="robots" content="index,follow,noarchive" />
	<meta name="application-name" content="La Pie"/>
	<meta name="DC.Title" content="La Pie">
	<meta name="DC.Content-Type" content="UTF-8">
	<meta name="DC.Content-Language" content="fr">
	<meta name="DC.Description" content="LA RÉUSSITE EST À LA PORTÉE DE TOUS,Votre réussite est notre priorité. Vous serrez les élites de demain.">
	<meta name="DC.Keywords" content="La Pie, lapie, Andavamamba, Antananarivo, Madagascar, ecole, fianarana antananarivo, bacc, bepc, cepe, lapie ancien, fandrosoana, politika, fianarana tsara">
	<meta name="DC.Author" content="la pie">
	<meta name="DC.Identifier-Url" content="lapie">
	<meta name="DC.Reply-To" content="rindrap16.aps1@gmail.com">
	<meta property="og:type" content="website" />
	<meta property="og:description" content="LA RÉUSSITE EST À LA PORTÉE DE TOUS,Votre réussite est notre priorité. Vous serrez les élites de demain." />
	<meta property="og:url" content="lapie" />
	<meta property="og:image:type" content="image/jpeg" />


	<!-- Favicon -->   
	<link href="../assets/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../assets/css/themify-icons.css"/>
	<link rel="stylesheet" href="../assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="../assets/css/animate.min.css"/>
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../assets/css/style.min.css"/>
</head>
<body>
	<!-- Header start -->
	<?php include('inc/header.php'); ?>
	<!-- Header section end -->

	<!-- Dynamic page start -->
	<?php 
	$page = "accueil";
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	 include('inc/'.$page.'.php'); ?>
	<!-- Dynamic page end -->
	<input type="hidden" value="<?php echo $page; ?>" id="pagename">

	<!-- Footer section -->
	<?php include('inc/footer.php'); ?>
	<!-- Footer section end-->

	<script type="text/javascript">
		var pageName = document.getElementById('pagename').value + '';
		pageName = pageName.substring(0, 1).toUpperCase() + pageName.substring(1, pageName.length) + ' | Lapie';
		document.title = pageName;
		console.log(pageName);
	</script>


	<!--====== Javascripts & Jquery ======-->
	<script type="text/­javascript" src="https://­maps.googleapis.com/­maps/api/­js?sensor=false"></script>
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/jquery.countdown.js"></script>
	<script src="../assets/js/masonry.pkgd.min.js"></script>
	<script src="../assets/js/magnific-popup.min.js"></script>
	<script src="../assets/js/main.js"></script>
	
</body>
</html>