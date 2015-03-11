<?php if(!class_exists('raintpl')){exit;}?>

<div id="<?php echo $carousel_id;?>" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
	</ol>
	
	<div class="carousel-inner" role="listbox">
		<?php $counter1=-1; if( isset($carousel_list_images) && is_array($carousel_list_images) && sizeof($carousel_list_images) ) foreach( $carousel_list_images as $key1 => $value1 ){ $counter1++; ?>

			<div class="item <?php echo $value1["active"];?>">
				<a href="<?php echo $value1["thumb_href"];?>" class="thumbnail"> 
					<img
							class="img-responsive" src="<?php echo $value1["thumb_src"];?>"
							alt="<?php echo $value1["thumb_alt"];?>" />
							 <div class="carousel-caption">
   								 <h3><?php echo $value1["thumb_title"];?></h3>
   								 <p>
   								 <?php if( $value1["thumb_price"] ){ ?>

								 <?php echo $value1["thumb_price"];?> $
								<?php }else{ ?>

    								
								<?php } ?>

								</p>
  				
 							 </div>
				</a>
			</div>
		<?php } ?>


	</div>

	<a class="left carousel-control" href="#<?php echo $carousel_id;?>" role="button"
		data-slide="prev"> 
		<span style="vertical-align: middle;"class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
		<span class="sr-only"><?php echo $carousel_previous;?></span>
	</a> 
	<a class="right carousel-control" href="#<?php echo $carousel_id;?>" role="button"
		data-slide="next"> 
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
		<span class="sr-only"><?php echo $carousel_next;?></span>
	</a>
</div>