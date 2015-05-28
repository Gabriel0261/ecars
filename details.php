<!DOCTYPE html>
<?php
include ("function.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Facebook APP ID -->
	<meta property="fb:app_id" content="12345" />

	<meta name="keywords" content="eCars" />
	<meta name="description" content="eCars" />

	<!-- Open Graph -->
	<meta property="og:site_name" content="eCars" />
	<meta property="og:title" content="Acasa" />
	<meta property="og:description" content="eCars" />

    <!-- Page Title -->
	<title>eCars:Vanzari auto</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!--[if IE]>
	<link href="css/style_ie.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.selectik.js"></script>
	<script type="text/javascript" src="js/jquery.checkbox.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="car">
	<!--BEGIN HEADER-->
		<div id="header">
			<div class="top_info">
				<div class="logo">
					<a href="index.php">e<span>Cars.ro</span></a>
				</div>
				<div class="header_contacts">
					<div class="phone">www.eCars</div>
                    <div><strong>Vanzari masini noi si second hand!</strong></div>
				</div>
			</div>
			<div class="bg_navigation">
				<div class="navigation_wrapper">
					<div id="navigation">
						<span>Acasa</span>
						<ul>
							<li><a href="index.php">Acasa</a></li>
				            <li><a href="add.html">Vinde</a></li>
							<li><a href="#">Stiri</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<div id="search_form">
						 <form method="get" action="search.php" />
							<input type="text" onblur="if(this.value=='') this.value='Cautare';" onfocus="if(this.value=='Cautare') this.value='';" value="Cautare" class="txb_search" name="query" />
							<input type="submit" value="Search" class="btn_search" />
                        </form>
					</div>
				</div>
			</div>
		</div>
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
			<div class="breadcrumbs">
					<a href="index.php">Acasa</a>
					<img src="images/marker_2.gif" alt="" />
					<span>Detalii</span>
				</div>
				<div class="main_wrapper">
				<?php
		
				if(isset($_GET['data_id'])){
		
	$id = $_GET['data_id'];
	 
	 
	 $get_data = "SELECT testanu.*, images.image_path FROM testanu INNER JOIN images WHERE testanu.id =images.id and images.id='$id'";
	 
	
	         
	$run_data = mysqli_query($con, $get_data);
	
	
	while ($row_data = mysqli_fetch_array($run_data))
	{
		
		$data_id = $row_data['id'];
		$data_brand = $row_data['brand'];
		$data_model = $row_data['model'];
		$data_body = $row_data['body'];
		$data_fuel = $row_data['fuel'];
		$data_price = $row_data['price'];
		$data_hp = $row_data['hp'];
		$data_fab = $row_data['fab'];
		$data_rulj = $row_data['rulj'];
		$data_pnego =$row_data['pnego'];
		$data_cili =$row_data['cili'];
		$data_trans =$row_data['trans'];
		$data_color =$row_data['color'];
		$data_doors =$row_data['doors'];
		$data_rulj =$row_data['rulj'];
		$data_alarm =$row_data['alarm'];
		$data_ctrlt =$row_data['ctrlt'];
		$data_abs =$row_data['abs'];
		$data_airb =$row_data['airb'];
		$data_esp =$row_data['esp'];
		$data_eds =$row_data['eds'];
		$data_icen =$row_data['icen'];
		$data_jali =$row_data['jali'];
		$data_trapa =$row_data['trapa'];
		$data_xenon =$row_data['xenon'];
		$data_pceata =$row_data['pceata'];
		$data_gcolo =$row_data['gcolo'];
		$data_carli =$row_data['carli'];
		$data_pwd =$row_data['pwd'];
		$data_phone =$row_data['phone'];
		$data_email =$row_data['email'];
		$data_username =$row_data['username'];
		$data_cityusr =$row_data['cityusr'];
		$data_gele =$row_data['gele'];
		$data_oele =$row_data['oele'];
		$data_ac =$row_data['ac'];
		$data_tpiel =$row_data['tpiel'];
		$data_gps =$row_data['gps'];
		$data_icen =$row_data['icen'];
		$data_radiocd =$row_data['radiocd'];
		$data_serv =$row_data['serv'];
		$data_cbord =$row_data['cbord'];
		$data_iaux =$row_data['iaux'];
		$data_wcom =$row_data['wcom'];
		$data_spark =$row_data['spark'];
		$data_ipath =$row_data['image_path'];
		
		
		
		
		
		echo"
		<div class='main_wrapper'>
					<h1><strong>$data_brand</strong> $data_model</h1>
					<div class='car_image_wrapper'>
						<div class='big_image'>
							<a href='#' rel='car_group'>
							<img src='$data_ipath' alt='' />
							</a>
						</div>
					</div>
					<div class='car_characteristics'>
						<div class='price'>$data_price EURO <span>" . ($data_pnego == 1 ? '*Pret negociabil' : '' ). "</span></div>
						<div class='clear'></div>
						<div class='features_table'>
							<div class='line grey_area'>
								<div class='left'>Model, Body type:</div>
								<div class='right'>$data_brand, $data_model, $data_body</div>
							</div>
							<div class='line'>
								<div class='left'>Fabricat:</div>
								<div class='right'>$data_fab</div>
							</div>
							<div class='line grey_area'>
								<div class='left'>Combustibil:</div>
								<div class='right'>$data_fuel</div>
							</div>
							<div class='line'>
								<div class='left'>Motor:</div>
								<div class='right'>$data_cili cm³ ($data_hp CP)</div>
							</div>
							<div class='line grey_area'>
								<div class='left'>Transmisie:</div>
								<div class='right'>" . ($data_trans == 1 ? 'Automata' : 'Manuala' ). "</div>
							</div>
							<div class='line'>
								<div class='left'>Color:</div>
								<div class='right'>$data_color</div>
							</div>
							<div class='line grey_area'>
								<div class='left'>Nr. usi:</div>
								<div class='right'>$data_doors</div>
							</div>
							<div class='line'>
								<div class='left'>Rulaj:</div>
								<div class='right'>$data_rulj km</div>
							</div>
						</div>
						<div class='wanted_line'>
							<div class='left'>Vrei sa vinzi o masina?</div>
							<div class='right'>
								<a href='add.html'>Adauga Anunt</a>
							</div>
						</div>
					</div>
					<div class='clear'></div>
					<div class='info_box'>
						<div class='car_info'>
							<div class='info_left'>
								<h2>Informatii <strong>Vehicul</strong></h2>
								<p><strong>Siguranta:</strong><br />
								" . ($data_abs == 1 ? 'ABS,' : '' ). "
								" . ($data_alarm == 1 ? 'alarma,' : '' ). "
								" . ($data_ctrlt == 1 ? 'controlul tractiunii,' : '' ). "
								" . ($data_airb == 1 ? 'airbag,' : '' ). "
								" . ($data_airb == 1 ? 'airbag,' : '' ). "
								" . ($data_esp == 1 ? 'ESP,' : '' ). "
								" . ($data_eds == 1 ? 'EDS,' : '' ). "
							" . ($data_icen == 1 ? 'inchidere centralizata,' : '' ). "</p>
								<p><strong>Comfort:</strong><br />
								 " . ($data_gele == 1 ? 'geamuri electrice,' : '' ). "
								 " . ($data_oele == 1 ? 'oglinzi electrice,' : '' ). "
								 " . ($data_ac == 1 ? 'aer conditionat,' : '' ). "
								 " . ($data_tpiel == 1 ? 'Tapiserie piele,' : '' ). "
								 " . ($data_gps == 1 ? 'GPS,' : '' ). "
								 " . ($data_icen == 1 ? 'inchidere centralizata,' : '' ). "
								 " . ($data_radiocd == 1 ? 'Radio/CD,' : '' ). "
								 " . ($data_serv == 1 ? 'servo directie,' : '' ). "
								 " . ($data_cbord == 1 ? 'computer bord,' : '' ). " 
								 " . ($data_iaux == 1 ? 'Incalzire auxiliara,' : '' ). "
								 " . ($data_wcom == 1 ? 'comenzi volan,' : '' ). "
								 ". ($data_spark == 1 ? 'senzori de parcare,' : '' ). "</p>
							</div>
							<div class='info_right'>
								<h2>Alte <strong>informatii</strong></h2>
								<p><strong>Caracteristici:</strong><br />
								" . ($data_jali == 1 ? 'jante aliaj,' : '' ). "
								" . ($data_trapa == 1 ? 'trapa,' : '' ). "
								" . ($data_xenon == 1 ? 'XENON,' : '' ). "
								" . ($data_pceata == 1 ? 'proiectoare ceata,' : '' ). "
								" . ($data_gcolo == 1 ? 'geamuri colorate,' : '' ). "</p>
								<p><strong>Altele:</strong><br />
								" . ($data_carli == 1 ? 'carlig remorcare,' : '' ). "
								" . ($data_pwd == 1 ? '4X4,' : '' ). "</p>
								</div>
							<div class='clear'></div>
						</div>
						<div class='car_contacts'>
							<h2>Detalii <strong>contact</strong></h2>
							<p>Detalii pentru a contacta vanzatorul.</p>
							<div class='left'>
								<div class='phones detail single_line spaced'>$data_phone</div>
								<div class='email detail single_line'><a href='mailto:$data_email' class='markered'>Contacteaza vanzatorul prin mail</a></div>
							</div>
							<div class='right'>
								<div class='addr detail single_line'>$data_cityusr,  Nume contact: $data_username</div>
							</div>
							<div class='clear'></div>
						</div>
					</div>
					<div class='clear'></div>
				</div>
		
		";
	}
	}
	?>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<div id="footer">
			<div class="bottom_footer">
				<div class="f_widget ">
					<h3><strong>Despre</strong> noi</h3>
					<ul>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Parteneri</a></li>
						<li><a href="#">Publicitate</a></li>
						<li><a href="#">Harta site</a></li>
					</ul>
				</div>
				<div class="f_widget divide">
					<h3><strong>Ajutor</strong></h3>
					<ul>
						<li><a href="#">Cum adaug un anunt?</a></li>
						<li><a href="#">Cum gasesc o masina?</a></li>
						<li><a href="#">Lista preturi</a></li>
					</ul>
				</div>
				<div class="fwidget_separator"></div>
				<div class="f_widget">
					<h3><strong>User</strong> area</h3>
					<ul>
						<li><a href="add.html">Adauga anunt</a></li>
						<li><a href="#">Termeni si conditii</a></li>
						<li><a href="#">Stiri</a></li>
					</ul>
				</div>
				<div class="f_widget divide last">
					<h3>Ne gasesti si <strong>aici</strong>!</h3>
					<ul class="horizontal">
						<li><a href="#"><img src="images/fb_icon.png" alt="" /></a></li>
				</div>
			</div>
			<div class="copyright_wrapper">
				<div class="copyright">&copy; 2015 eCars. All Rights Reserved.</div>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
