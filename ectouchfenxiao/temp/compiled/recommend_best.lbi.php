<?php if ($this->_var['best_goods']): ?>

  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_90149100_1428408081');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_90149100_1428408081']):
?>
 <dd class="hot_dd02" >
  <div class="hot_img"> <span class="hot1"></span>
    
        <div class="pic">   <a href="<?php echo $this->_var['goods_0_90149100_1428408081']['url']; ?>"><img src="<?php echo $this->_var['goods_0_90149100_1428408081']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_90149100_1428408081']['name']); ?>" class="goodsimg" /></a></div>
           <div class="text">
          <p class="name"><a href="<?php echo $this->_var['goods_0_90149100_1428408081']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_90149100_1428408081']['name']); ?>"><?php echo $this->_var['goods_0_90149100_1428408081']['short_style_name']; ?></a></p>
          <p class="brife"> <?php echo $this->_var['goods_0_90149100_1428408081']['brief']; ?></p>
          
           <p class="price" > <font class="aa"> 
           <?php if ($this->_var['goods_0_90149100_1428408081']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_90149100_1428408081']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_90149100_1428408081']['shop_price']; ?>
          <?php endif; ?>
           </font><font class="bb"><?php echo $this->_var['goods_0_90149100_1428408081']['market_price']; ?></font>
           </p>
        </div>
        </div>
         <div class="hot_btn"><a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods_0_90149100_1428408081']['id']; ?>,1,'best')"  ></a> </div>
      <div class="hot_line" > </div>
      <div class="sucess_joinCart" id="addtocartdialog_retui_<?php echo $this->_var['goods_0_90149100_1428408081']['id']; ?>_best">

</div>
        </dd>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php endif; ?>
