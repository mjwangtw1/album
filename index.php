<?php

	echo '<h2>Project photo album </h2>';

	echo '3nd try - 3:51pm 2014.12.15';


	//Prepared array: 
	$album_thumb_array = array(
		array(
			'img_url'=>'https://farm4.staticflickr.com/3755/10565638896_530c0595c5_s.jpg',
			'img_alt'=>'Bar@Pittsburgh',
			 'tag' => 'pittsburgh'
			),
		array(
			'img_url'=>'https://farm8.staticflickr.com/7323/10565637196_2296f583fd_s.jpg',
			'img_alt'=>'Famous Primantis sandwich',
			 'tag' => 'pittsburgh'
			),
		array(
			'img_url'=>'https://farm3.staticflickr.com/2851/10565986203_8255a93880_s.jpg',
			'img_alt'=>'Robber duck and ducklings',
			 'tag' => 'pittsburgh'
			),
		array(
			'img_url'=>'https://farm8.staticflickr.com/7323/10565637196_2296f583fd_s.jpg',
			'img_alt'=>'Famous Primantis sandwich',
			 'tag' => 'pittsburgh'
			),

		);


?>


<!DOCTYPE HTML PUBLIC >
<HTML>
   <HEAD>
      <TITLE>Mou's Album (in development)</TITLE>
   </HEAD>
   <BODY>



	<!-- CSS LIB -->
	<link rel="stylesheet" type="text/css" href="./css/lib/sweet-alert.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!-- CSS Customize -->
	<link rel="stylesheet" type="text/css" href="./css/album.css">


	<div class="thumb_zone">
	<span class="thumb">

		<?php

		if ( ! is_array($album_thumb_array))
		{
			echo 'Something wrong with array';
		}
		else
		{

			//Loop thru array
			foreach($album_thumb_array as $key => $value)
			{
				echo '<img src="' . $value['img_url'] . '" width="75" height="75" alt="' . $value['img_alt']. '" value="img' . $key . '" >';
			}
		}


		?>

	</span>
	<span class="desc"></span>
	</div>
	<div class="show_midsize_photo">  
	    <img class="show" src="">
	    
	</div>

	<!--  JS - LIB-->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="./js/lib/sweet-alert.min.js"></script>

	<!-- JS - custom-->
	<script type="text/javascript" src="./js/album.js"></script>










   </BODY>
</HTML>





