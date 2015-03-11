<?php if(!class_exists('raintpl')){exit;}?>

<div id="<?php echo $carousel_id;?>" class="carousel slide"
	data-ride="carousel">

	<ol class="carousel-indicators">
	</ol>
	<div class="carousel-inner" role="listbox">

			<?php $counter1=-1; if( isset($carousel_list) && is_array($carousel_list) && sizeof($carousel_list) ) foreach( $carousel_list as $key1 => $value1 ){ $counter1++; ?>

			<div class="item <?php echo $value1["active"];?>">
				<div class="row">
					<div class="col-sm-3">
						<a href="<?php echo $value1["thumb_href_0"];?>" class="thumbnail"> <img
							class="img-responsive" src="<?php echo $value1["thumb_src_0"];?>"
							alt="<?php echo $value1["thumb_alt_0"];?>" />
						</a>
					</div>
					<div class="col-sm-3">
						<a href="<?php echo $value1["thumb_href_1"];?>" class="thumbnail"> <img
							class="img-responsive" src="<?php echo $value1["thumb_src_1"];?>"
							alt="<?php echo $value1["thumb_alt_1"];?>" />
						</a>
					</div>
					<div class="col-sm-3">
						<a href="<?php echo $value1["thumb_href_2"];?>" class="thumbnail"> <img
							class="img-responsive" src="<?php echo $value1["thumb_src_2"];?>"
							alt="<?php echo $value1["thumb_alt_2"];?>" />
						</a>
					</div>
					<div class="col-sm-3">
						<a href="<?php echo $value1["thumb_href_3"];?>" class="thumbnail"> <img
							class="img-responsive" src="<?php echo $value1["thumb_src_3"];?>"
							alt="<?php echo $value1["thumb_alt_3"];?>" />
						</a>
					</div>

				</div>
			</div>
			<?php } ?>


	</div>

	<a class="left carousel-control" href="#<?php echo $carousel_id;?>" role="button"
			data-slide="prev"> <span style="vertical-align: middle;"
			class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
			class="sr-only"><?php echo $carousel_previous;?></span>
	</a> <a class="right carousel-control" href="#<?php echo $carousel_id;?>" role="button"
			data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only"><?php echo $carousel_next;?></span>
	</a>

</div>