
<div class="navBar">

  <div id="cate">
  <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_65655400_1428407677');$this->_foreach['categories_pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_pro']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_65655400_1428407677']):
        $this->_foreach['categories_pro']['iteration']++;
?>

		<h1  class="h1">
		<dt > <a href="javascript:;" ><?php echo htmlspecialchars($this->_var['cat_0_65655400_1428407677']['name']); ?> <span class="searchLeft"></span></a> </dt>
		</h1>
		<ul <?php if ($this->_var['cat_0_65655400_1428407677']['id'] == $this->_var['parent_id_show']): ?>style="display:block"<?php endif; ?>>
		 <?php $_from = $this->_var['cat_0_65655400_1428407677']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_65730100_1428407677');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_65730100_1428407677']):
?>
          <?php $_from = $this->_var['child_0_65730100_1428407677']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_65750400_1428407677');if (count($_from)):
    foreach ($_from AS $this->_var['childer_0_65750400_1428407677']):
?>
		<li><a href="<?php echo $this->_var['childer_0_65750400_1428407677']['url']; ?>" <?php if ($this->_var['childer_0_65750400_1428407677']['id'] == $this->_var['category']): ?>class="current"<?php endif; ?>><?php echo htmlspecialchars($this->_var['childer_0_65750400_1428407677']['name']); ?></a></li>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		<div style="clear:both"></div>
	

	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>

</div>
<div class="blank"></div>
<div class="blank"></div>