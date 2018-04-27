<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
	<div class="step3"><?php echo $this->_var['lang']['shop_basic_third']; ?></div>
	<div class="shortcut">
		<ul>
		  <li><a href="../" target="_blank"><?php echo $this->_var['lang']['preview']; ?></a></li>
		  <li><a href="goods.php?act=add" target="main-frame"><?php echo $this->_var['lang']['add_good']; ?></a></li>
		  <li><a href="category.php?act=add" target="main-frame"><?php echo $this->_var['lang']['add_category']; ?></a></li>
		  <li><a href="goods_type.php?act=manage" target="main-frame"><?php echo $this->_var['lang']['add_type']; ?></a></li>
		  <li><a href="favourable.php?act=add" target="main-frame"><?php echo $this->_var['lang']['add_favourable']; ?></a></li>
		  <li><a href="shop_config.php?act=list_edit" target="main-frame"><?php echo $this->_var['lang']['shop_config']; ?></a></li>
		  <li><a href="template.php?act=list" target="main-frame"><?php echo $this->_var['lang']['select_template']; ?></a></li>
		  <li><a href="privilege.php?act=add" target="main-frame"><?php echo $this->_var['lang']['admin_add']; ?></a></li>
		  <li><a href="./index.php?act=main" target="main-frame"><?php echo $this->_var['lang']['shop_back_in']; ?></a></li>
		</ul>
	</div>
</div>
<?php echo $this->fetch('pagefooter.htm'); ?>
