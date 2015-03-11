<?php if(!class_exists('raintpl')){exit;}?>	<ol class="breadcrumb">
			<?php $counter1=-1; if( isset($breadcrumb_list) && is_array($breadcrumb_list) && sizeof($breadcrumb_list) ) foreach( $breadcrumb_list as $key1 => $value1 ){ $counter1++; ?>

						<li><a href="<?php echo $path;?><?php echo $value1["href"];?>"><?php echo $value1["name"];?></a></li>
			<?php } ?>

	</ol>