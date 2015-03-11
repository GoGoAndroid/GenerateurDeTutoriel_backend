<?php

	//include the RainTPL class
	include "../inc/rain.tpl.class.php";


	$tpl = new RainTPL;

	$head_title = "La Vina";
	$tpl->assign( "head_title", $head_title);

	$brand = "La Vina";
	$tpl->assign( "brand", $brand);
	
	$accuei{"name"} = "Accueil";
	$tpl->assign( "accueil", $accueil);

	$nav_list = array(  
					array( 'name'=>'Expositions', 'href'=>'#'),
					array( 'name'=>'Produits', 'href'=>'#' ),
					array( 'name'=>'Evenements', 'href'=>'#')
			);
	
	$tpl->assign( "nav_list", $nav_list );
			


	
	$breadcrumb_list = array(
			array( 'name'=>'Accueil', 'href'=>'#'),
	);
	
	$tpl->assign( "breadcrumb_list", $breadcrumb_list );
	

	$html = $tpl->draw( 'entete', $return_string = true );
     echo $html;

        
 
        
?>