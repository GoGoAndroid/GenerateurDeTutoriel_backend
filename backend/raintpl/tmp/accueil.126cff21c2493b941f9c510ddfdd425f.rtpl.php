<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("entete") . ( substr("entete",-1,1) != "/" ? "/" : "" ) . basename("entete") );?>

<div class="container-fluid">
	<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("breadscrum") . ( substr("breadscrum",-1,1) != "/" ? "/" : "" ) . basename("breadscrum") );?>

	<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("jumbo") . ( substr("jumbo",-1,1) != "/" ? "/" : "" ) . basename("jumbo") );?>

	<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("carousel") . ( substr("carousel",-1,1) != "/" ? "/" : "" ) . basename("carousel") );?>

	<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("pied") . ( substr("pied",-1,1) != "/" ? "/" : "" ) . basename("pied") );?>

</div>
<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("javascript") . ( substr("javascript",-1,1) != "/" ? "/" : "" ) . basename("javascript") );?>

</body>
</html>