<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lapie</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="../assets/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="../assets/https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../assets/css/themify-icons.css"/>
	<link rel="stylesheet" href="../assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="../assets/css/animate.css"/>
	<link rel="stylesheet" href="../assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../assets/css/style.css"/>
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