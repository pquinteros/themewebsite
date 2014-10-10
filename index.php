<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!--Metatags-->
<?php require_once("metatags.php");?>
</head>

<body>
<!-- Contenido -->
<div id="wrap" class="container">	

<!-- Menu -->
<header>
<?php require_once("menu.php");?>
</header>

<!-- Slider -->
<div id="wrap-slider">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<?php
require_once("class/class_generic.php");


$obj= new Generic();
$datos=$obj->get_slide();

		//Indicators
echo '<ol class="carousel-indicators">';
for ($i=0;$i < sizeof($datos);$i++)
{
  if($i==0){
echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
  }else{
echo ' <li data-target="#carousel-example-generic" data-slide-to="1"></li>';
  }
}
echo '</ol>';

		//Wrapper for slides
for ($i=0;$i < sizeof($datos);$i++)
{
  if($i==0){
echo '<div class="carousel-inner"><div class="item active"><img src="admin/upload_slide/'.  $datos[$i]["imagen"]  .'"  alt="..."><div class="carousel-caption"></div></div>';
  }else{
echo '<div class="item"><img src="admin/upload_slide/'.  $datos[$i]["imagen"]  .'" alt="..." ><div class="carousel-caption"></div></div>';
  }
}

?>
  </div>
		<!-- Controls -->
  <div class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </div>
  <adiv class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </div>
</div>
<!-- /Slider -->


<section class="col-xs-12" id="sec1">
	<figure>
		<a href="imagenes/img1.jpg" class="fancybox"><img src="imagenes/img1.jpg" width="500" class="img-responsive"></a>
	</figure>
</section>

<div class="sep"></div>

<div class="sep"></div>

<section class="col-xs-12" id="sec2">
	<article class="col-xs-4"></article>
	<article class="col-xs-4"></article>
	<article class="col-xs-4"></article>
</section>

<div class="sep"></div>

<section class="col-xs-12" id="sec3">
	<article class="col-sm-4 col-xs-12"></article>
	<article class="col-sm-4 col-xs-12"></article>
	<article class="col-sm-4 col-xs-12"></article>
</section>


<!-- Footer -->
<?php require_once("footer.php");?>

</div><!-- /wrap -->

<!-- Scripts -->
<?php require_once("scripts.php");?>
</body>
</html>