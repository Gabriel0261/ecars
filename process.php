<?php
    include_once('checklogin.php');
	$file = $_FILES['image']['tmp_name'];
    
    // checking if the file is submitted
    
    if (!isset ($file))
        echo "Please select an image";
    else 
        {
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES ['image']['name']);
            $image_size = getimagesize ($_FILES ['image']['tmp_name']);
            $new_image_name = md5( rand (0, 1000) . rand (0, 1000) . rand (0, 1000) . rand (0, 1000) ) .'.jpg';
            $path = 'upload/' . $new_image_name; // File destination 
            
            if ($image_size == FALSE)
                echo "That's not an image";
                
            else 
            {    
                if(move_uploaded_file($_FILES['image']['tmp_name'], $path))
                echo "Anunt adaugat cu succes->";
                
                if (!$insert = mysql_query ("INSERT INTO images VALUES ('', '$image_name','$path')"))
                    echo "Problem uploading image";
			}	}		
    	   
    $brand = mysql_real_escape_string( $_POST["brand"]);
	$model = mysql_real_escape_string( $_POST["model"]);
	$fab = mysql_real_escape_string( $_POST["fab"]);
	$body = mysql_real_escape_string( $_POST["btype"]);
	$fuel = mysql_real_escape_string( $_POST["ftype"]);
	$trans = mysql_real_escape_string( $_POST["trans"]);
	$doors = mysql_real_escape_string( $_POST["door"]);
	$cili = mysql_real_escape_string( $_POST["cili"]);
	$hp = mysql_real_escape_string( $_POST["hp"]);
	$vin = mysql_real_escape_string( $_POST["vin"]);
	$color = mysql_real_escape_string( $_POST["color"]);
	$abs = isset($_POST["abs"]) ? $_POST["abs"] : 0;
	$trapa = isset($_POST["trapa"]) ? $_POST["trapa"] : 0;
	$alarm = isset($_POST["alarm"]) ? $_POST["alarm"] : 0;
	$wcom = isset($_POST["wcom"]) ? $_POST["wcom"] : 0;
	$gele = isset($_POST["gele"]) ? $_POST["gele"] : 0;
	$jali = isset($_POST["jali"]) ? $_POST["jali"] : 0;
	$eds = isset($_POST["eds"]) ? $_POST["eds"] : 0;
	$radiocd = isset($_POST["radiocd"]) ? $_POST["radiocd"] : 0;
	$gps = isset($_POST["gps"]) ? $_POST["gps"] : 0;
	$cbord = isset($_POST["cbord"]) ? $_POST["cbord"] : 0;
	$oele = isset($_POST["oele"]) ? $_POST["oele"] : 0;
	$sinc = isset($_POST["sinc"]) ? $_POST["sinc"] : 0;
	$esp = isset($_POST["esp"]) ? $_POST["esp"] : 0;
	$xenon = isset($_POST["xenon"]) ? $_POST["xenon"] : 0;
	$ctrlt = isset($_POST["ctrlt"]) ? $_POST["ctrlt"] : 0;
	$iaux = isset($_POST["iaux"]) ? $_POST["iaux"] : 0;
	$pinc = isset($_POST["pinc"]) ? $_POST["pinc"] : 0;
	$spark = isset($_POST["spark"]) ? $_POST["spark"] : 0;
	$tpiel = isset($_POST["tpiel"]) ? $_POST["tpiel"] : 0;
	$ac = isset($_POST["ac"]) ? $_POST["ac"] : 0;
	$icen = isset($_POST["icen"]) ? $_POST["icen"] : 0;
	$pilota = isset($_POST["pilota"]) ? $_POST["pilota"] : 0;
	$carli = isset($_POST["carli"]) ? $_POST["carli"] : 0;
	$gcolo = isset($_POST["gcolo"]) ? $_POST["gcolo"] : 0;
	$airb = isset($_POST["airb"]) ? $_POST["airb"] : 0;
	$pceata = isset($_POST["pceata"]) ? $_POST["pceata"] : 0;
	$serv = isset($_POST["serv"]) ? $_POST["serv"] : 0;
	$pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : 0;
	$tarao = mysql_real_escape_string( $_POST["tarao"]);
	$tainma = mysql_real_escape_string( $_POST["tainma"]);
	$dinma = mysql_real_escape_string( $_POST["dinma"]);
	$starte = mysql_real_escape_string( $_POST["starte"]);
	$rulj = mysql_real_escape_string( $_POST["rulj"]);
    $eurot = mysql_real_escape_string( $_POST["eurot"]); 
	$price = mysql_real_escape_string( $_POST["price"]);
	$pnego = isset($_POST["pnego"]) ? $_POST["pnego"] : 0;
	$username = mysql_real_escape_string( $_POST["username"]);
	$phone = mysql_real_escape_string( $_POST["phone"]);
	$cityusr = mysql_real_escape_string( $_POST["cityusr"]);
	$email = mysql_real_escape_string( $_POST["email"]);
	$passw = mysql_real_escape_string( $_POST["passw"]);
	
	$sql = "INSERT INTO testanu VALUES('','$brand','$model','$fab','$body','$fuel','$trans','$doors','$cili','$hp','$vin','$color',
	'$abs','$trapa','$alarm','$wcom','$gele','$jali','$eds','$radiocd','$gps','$cbord','$oele','$sinc',
	'$esp','$xenon','$ctrlt','$iaux','$pinc','$spark','$tpiel','$ac','$icen','$pilota','$carli','$gcolo','$airb','$pceata','$serv','$pwd','$tarao','$tainma','$dinma',
	'$starte','$rulj','$eurot','$price','$pnego','$username','$phone','$cityusr','$email','$passw')";
	if (mysql_query($sql))

	
		echo "<a href='index.php'>Acasa</a>";
	else
		echo "Fail!";
	 ?>
