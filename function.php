<?php

$con = mysqli_connect("localhost","root","","myshop");

function getData(){
	
	global $con;
	
	$get_data = "SELECT testanu.*, images.image_path ".
 "FROM testanu, images ".
	"WHERE testanu.id = images.id";
	
	
	$run_data = mysqli_query($con, $get_data);
	
	while ($row_data=mysqli_fetch_array($run_data)){
		
		$data_id = $row_data['id'];
		$data_brand = $row_data['brand'];
		$data_model = $row_data['model'];
		$data_body = $row_data['body'];
		$data_fuel = $row_data['fuel'];
		$data_image = $row_data['image_path'];
		$data_price = $row_data['price'];
		$data_hp = $row_data['hp'];
		$data_fab = $row_data['fab'];
		$data_rulj = $row_data['rulj'];
		
		echo"
		<ul class='catalog_table'>
							<li>
							<a href='details.php?data_id=$data_id' class='thumb'><img src='$data_image' alt='' width='175'/></a>
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
		
		";
		
	}
	
	
	
}
