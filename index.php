<!DOCTYPE html>
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
<body class="catalog catalog-list">
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
							<li class="current"><a href="index.php">Acasa</a></li>
							<li><a href="add.html">Vinde</a></li>
							<li><a href="#">Stiri</a></li>
							<li><a href="contacts">Contact</a></li>
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
				</div>
				<div class="main_wrapper">
					
					<div class="main_catalog">
						<div class="top_catalog_box">
							<div class="clear"></div>
						</div>
						<ul class="catalog_table">
						<?php
// Establish Connection to the Database
$con = mysqli_connect('localhost','root','','myshop');//Records per page

function getData(){}

$per_page=5;
if (isset($_GET["page"])) {

$page = $_GET["page"];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

//Selecting the data from table but with limit
$query ="SELECT testanu.*, images.image_path ".
 "FROM testanu, images ".
	"WHERE testanu.id = images.id
	 LIMIT $start_from, $per_page"; 


//"SELECT * FROM testanu LIMIT $start_from, $per_page";
$result = mysqli_query ($con, $query);

?>
<?php
         while ($row = mysqli_fetch_assoc($result)) {
			 
		$data_id = $row['id'];
		$data_brand = $row['brand'];
		$data_model = $row['model'];
		$data_body = $row['body'];
		$data_fuel = $row['fuel'];
		$data_price = $row['price'];
		$data_hp = $row['hp'];
		$data_fab = $row['fab'];
		$data_rulj = $row['rulj'];
		$data_image = $row['image_path'];
?>
<?php echo"
		<ul class='catalog_table'>
							<li>
							<a href='details.php?data_id=$data_id' class='thumb'><img src='$data_image' alt='' width='180'/></a>
								<div class='catalog_desc'>
									<div class='location'></div>
									<div class='title_box'>
									<h4>$data_brand</h4>
									<h5>$data_model<h5>
										<div class='price'>$data_price €</div>
									</div>
									<div class='clear'></div>
									<div class='grey_area'>
										<span>An: $data_fab</span>
										<span>$data_fuel</span>
										<span>$data_hp (CP)</span>
										<span>$data_body</span>
										<span>$data_rulj Km</span>
									</div>
									<a href='details.php?data_id=$data_id'>Vezi mai mult!</a>
								</div>
							</li>
		
		
		</ul>
		
		";?>
<?php
};
?>
</table>

<div>
<?php

//Now select all from table
$query = "select * from testanu";
$result = mysqli_query($con, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<right><a href='index.php?page=1'>".'Prima Pag'."</a> ";



for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='index.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='index.php?page=$total_pages'>".'Ultima Pag'."</a></right> ";
?>

						</ul>
						<div class="bottom_catalog_box">
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
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
					</ul>
				</div>
			</div>
			<div class="copyright_wrapper">
				<div class="copyright">&copy; 2015 eCars. All Rights Reserved.</div>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
