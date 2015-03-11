<?php if(!class_exists('raintpl')){exit;}?><!doctype html>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link href="<?php echo $path;?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $path;?>css/bootstrap-theme.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $path;?>Gom_gosimplapp_magasin_slc.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta charset="utf-8">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<title><?php echo $head_title;?></title>
<meta name="keywords" content="<?php echo $keywords;?>">

</head>

<body role="document">

	<!-- RECOMMENDED if your web app will not function without JavaScript enabled -->
	<noscript>
		<div
			style="width: 22em; position: absolute; left: 50%; margin-left: -11em; color: red; background-color: white; border: 1px solid red; padding: 4px; font-family: sans-serif">
			Javascript doit être activé sur votre navigateur pour que le site fonctionne correctement .</div>
	</noscript>


	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?php echo $brand;?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo $accueil["href"];?>"><?php echo $accueil["name"];?></a></li>	
					
					<?php $counter1=-1; if( isset($nav_list) && is_array($nav_list) && sizeof($nav_list) ) foreach( $nav_list as $key1 => $value1 ){ $counter1++; ?>

						<li><a href="<?php echo $value1["href"];?>"><?php echo $value1["name"];?></a></li>
					<?php } ?>


				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>

	