
<?php

  const CORE_DATA = './_core/core_info.php';
  
  //EXTRACT data outside

  //Locate the data path
  $data_path = './data/album_data.php';

  if ( ! (is_file($data_path) && file_exists($data_path)))
  {
    echo 'File not found:: check file path and file';
  }
  else
  {
     //Note: the include file must be PHP or it will echo right away  
     include_once($data_path);
  }

  if ( ! (is_file(self::CORE_DATA)) && file_exists(self::CORE_DATA))
  {
    echo 'Load Core DATA fail!';
  }
  else
  {
    include_once(self::CORE_DATA);
  }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $data['site_title']?></title>
    <!-- Custom styles for this template -->
    <link href="./css/lib/jumbotron.css" rel="stylesheet">

    <!-- CSS LIB -->
    <link rel="stylesheet" type="text/css" href="./css/lib/sweet-alert.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- CSS Customize -->
    <link rel="stylesheet" type="text/css" href="./css/album.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $data['nav_bar_title']?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
<!--             <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div> -->
            <button type="" class="btn btn-success" id="try_flickr">Connect</button>
            <button type="submit" class="btn btn-success" id="manage">Manage</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <div class="row">



          <div class="col-md-4">
            <h1 class="title"><span class="glyphicon glyphicon-picture" aria-hidden="true">  </span><?php echo $data['welcome_title']?></h1>
            <p class="title_desc"><?php echo $data['welcome_message']?></p>
          </div>

          <!-- Test here -->
          <?php echo $core['data']; ?>

          <!-- Test done -->


          <div class="col-md-7">
             <div class="image_thumbs zone">
            <?php
            
            if ( ! is_array($data['image_thumb_array']))
            {
              echo 'Oops! <!--error fetching data-->';
            }
            else
            {

              //Loop thru array
              foreach($data['image_thumb_array'] as $key => $value)
              {
                echo '<img src="' . $value['img_url'] . '" width="75" height="75" alt="' . $value['img_alt']. '" value="img' . $key . '" >';
              }

            }

            ?>
            </div>

          </div>
          <div class="col-md-1">
            AAAA
          </div>



        </div><!--class="row"-->

        <div class="tabs-below">

          <ul class="nav nav-pills">

            <?php 
            //echo $data['nav_icons'][0]['name'];

            if ( ! is_array($data['nav_icons']))
            {
              echo 'Oops! <!--error fetching data: Nav_icons-->';
            }
            else
            {

              //Loop thru array
              foreach($data['nav_icons'] as $key => $value)
              { 
                //Dynamic echo class: only the first one
                $active = ($key == 0) ? 'class="active"': '';

                echo '<li '. $active . '><a href="#tab1" data-toggle="tab" id="' . $value['id'] . '" class="' . $value['cat'] . '" data-desc="' . $value['desc'] . '">' . $value['name'] . '</a></li>';

              }

            }

            ?>

          </ul>

        </div>



      </div>
    </div>

    <div class="container">






    </div>


    <div class="container show_midsize_photo">
    	<h3 class="desc"> </h3>



   		 <div class="row">
    		<div class="col-md-9">
    		    <img class="show" src="">
    	</div>

    	<div class="row">
    		<div class="col-md-3">
    	
    		    <p class="more_button"></p>
   		</div>


    </div>





    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Pittsburgh Life</h2>
          <p>Life in Pittsburgh is somewhat bittersweet. This album contains some cool Pittsburgh Moments</p>
          <p><a class="btn btn-default" href="#" role="button">Pitt Life &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">Random Moment &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">Fun Stuff &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Mou 2015</p>
      </footer>
    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/lib/ie10-viewport-bug-workaround.js"></script>

    <!--  JS - LIB-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./js/lib/sweet-alert.min.js"></script>

    <!-- JS - custom-->
    <script type="text/javascript" src="./js/album.js"></script>




  </body>
</html>
