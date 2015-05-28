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
					<a href="#">e<span>Cars.ro</span></a>
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
							<li class="current"><a href="cautare.php">Cautare</a></li>
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
					<span>Cautare</span>
				</div>
				<div class="main_wrapper">
					<div class="main_catalog">
						<div class="top_catalog_box">
							<div class="switch" hidden>
								<span class="table_view"></span>
								<a href="./05_catalog_grid.html" class="list_view"></a>
							</div>
							<div class="sorting drop_list" hidden>
								<strong>Sort by: </strong>
								<div class="selected">
									<span><a href="#">Date</a></span>
									<ul>
										<li><a href="#">Date</a></li>
										<li><a href="#">Price</a></li>
										<li><a href="#">Name</a></li>
										<li><a href="#">Manufacturer</a></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
						</div>
							<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    @mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
     
    mysql_select_db("myshop") or die(mysql_error());
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
    $query = $_GET['query']; 

    $min_length = 3;
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
         
        $query = mysql_real_escape_string($query);
         
        $raw_results = mysql_query("SELECT testanu.*, images.image_path FROM testanu INNER JOIN images
            WHERE (testanu.id =images.id) AND ( brand LIKE '%".$query."%')");
			
         
        if(mysql_num_rows($raw_results) > 0){ 
             
            while($results = mysql_fetch_array($raw_results)){
				
             
			    echo"
		<ul class='catalog_table'>
							<li>
							<a><img src='".$results['image_path']."' width='200' align='right'/></a>
								<div class='catalog_desc'>
								<div class='location'></div>
									<div class='title_box'>
									<h4>".$results['brand']."</h4>
									<h5>".$results['model']."<h5>
									<div class='price'>".$results['price']." €</div>
									</div>
									<div class='clear'></div>
									<div class='grey_area'>
										<span>An:".$results['fab']."</span>
										<span>".$results['fuel']."</span>
										<span>".$results['hp']."(CP)</span>
										<span>".$results['body']."</span>
										<span>Oras:".$results['cityusr']."</span>
									</div>
									<a href='details.php?data_id=".$results['id']."'>Vezi mai mult!</a>
								</div>
							</li>
		
		
		</ul>
		";
            
            }
			
        }
        else{ 
            echo "Fara rezultat!";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
</body>
</html>
                     <div class="clear"></div><br>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<div id="footer">
			<div class="bg_top_footer">
			</div>
			<div class="bottom_footer">
				<div class="f_widget ">
					<h3><strong>About</strong> us</h3>
					<ul>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Our Partners</a></li>
						<li><a href="#">Advertising Online</a></li>
						<li><a href="#">Site Map</a></li>
					</ul>
				</div>
				<div class="f_widget divide">
					<h3><strong>Need</strong> help?</h3>
					<ul>
						<li><a href="#">How do I add an offer?</a></li>
						<li><a href="#">How do I find a vehicle</a></li>
						<li><a href="#">Price list</a></li>
						<li><a href="#">Office for car dealers</a></li>
					</ul>
				</div>
				<div class="fwidget_separator"></div>
				<div class="f_widget">
					<h3><strong>User</strong> area</h3>
					<ul>
						<li><a href="#">Add an offer</a></li>
						<li><a href="#">Register dealder</a></li>
						<li><a href="#">Login Dealer</a></li>
						<li><a href="#">News</a></li>
					</ul>
				</div>
				<div class="f_widget divide last">
					<h3><strong>Find</strong> us here</h3>
				</div>
			</div>
			<div class="copyright_wrapper">
				<div class="copyright">&copy; 2015 eCars. All Rights Reserved.</div>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>

