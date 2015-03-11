<?php if(!class_exists('raintpl')){exit;}?>

<div id="<?php echo $carousel_id;?>" class="carousel slide" data-ride="carousel">


			<ol class="carousel-indicators">
			</ol>

			<div class="carousel-inner" role="listbox">
				<?php $counter1=-1; if( isset($carousel_list) && is_array($carousel_list) && sizeof($carousel_list) ) foreach( $carousel_list as $key1 => $value1 ){ $counter1++; ?>

				<div class="item <?php echo $value1["active"];?>" style="height:30%;">
					<div class="container">
						<div class="row" >
							<div class="col-xs-offset-2 col-xs-8">
								<a href="<?php echo $path;?><?php echo $value1["href"];?>"><h3><?php echo $value1["title"];?></h3></a>
								<?php echo $value1["corps"];?>

							</div>
						</div>
					</div>


				</div>
				<?php } ?>

			</div>

			<a class="left carousel-control" href="#<?php echo $carousel_id;?>" role="button"
				data-slide="prev"> <span style="vertical-align: middle;"
				class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only"><?php echo $carousel_previous;?></span>
			</a> <a class="right carousel-control" href="#<?php echo $carousel_id;?>"
				role="button" data-slide="next"> <span
				class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only"><?php echo $carousel_next;?></span>
			</a>


</div>