<!-- $Id: user_rank_info.htm 15053 2008-10-25 03:07:46Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>

<div class="main-div">
<form action="user_card.php" method="post" name="theForm" onsubmit="return validate()">
<table width="100%">
<tr>
    <td class="label"><?php echo $this->_var['lang']['card_type_name']; ?>:  </td>
    <td><?php echo $this->_var['ct_info']['ct_name']; ?></td>
  </tr>
<tr>
    <td class="label"><?php echo $this->_var['lang']['bind_user_name']; ?>: </td>
    <td><input type="text" name="user_name" value="<?php echo $this->_var['card']['user_name']; ?>" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['card_no']; ?>: </td>
    <td><input type="text" name="card_no" value="<?php echo $this->_var['card']['card_no']; ?>" maxlength="20" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['card_level']; ?>: </td>
    <td><input type="text" name="card_level" value="<?php echo $this->_var['card']['card_level']; ?>" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['card_pass']; ?>: </td>
    <td><input type="text" name="card_pass" value="<?php echo $this->_var['card']['card_pass']; ?>" size="10" maxlength="20" /></td>
  </tr>
   <tr>
    <td class="label"><?php echo $this->_var['lang']['user_money']; ?>: </td>
    <td><input type="text" name="user_money" value="<?php echo $this->_var['card']['user_money']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['pay_points']; ?>: </td>
    <td><input type="text" name="pay_points" value="<?php echo $this->_var['card']['pay_points']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['rank_points']; ?>: </td>
    <td><input type="text" name="rank_points" value="<?php echo $this->_var['card']['rank_points']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['card_true_name']; ?>: </td>
    <td><input type="text" name="true_name" value="<?php echo $this->_var['card']['true_name']; ?>" size="40" maxlength="60" /></td>
  </tr>
   <tr>
    <td class="label"><?php echo $this->_var['lang']['card_address']; ?>: </td>
    <td><input type="text" name="address" value="<?php echo $this->_var['card']['address']; ?>" size="60" maxlength="255" /></td>
  </tr>
   <tr>
    <td class="label"><?php echo $this->_var['lang']['card_mobile']; ?>: </td>
    <td><input type="text" name="mobile" value="<?php echo $this->_var['card']['mobile']; ?>" size="40" maxlength="60" /></td>
  </tr>
   <tr>
    <td class="label"><?php echo $this->_var['lang']['card_email']; ?>: </td>
    <td><input type="text" name="email" value="<?php echo $this->_var['card']['email']; ?>" size="40" maxlength="60" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['is_show']; ?>: </td>
    <td><input type="radio" name="is_show" value="1" <?php if ($this->_var['card']['is_show']): ?>checked="checked"<?php endif; ?> /><?php echo $this->_var['lang']['is_show_1']; ?> <input type="radio" name="is_show" value="0" <?php if (! $this->_var['card']['is_show']): ?>checked="checked"<?php endif; ?> /><?php echo $this->_var['lang']['is_show_0']; ?> </td>
  </tr>
   <tr>
    <td class="label"><?php echo $this->_var['lang']['send_type']; ?>: </td>
    <td><input type="text" name="send_type" value="<?php echo $this->_var['card']['send_type']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['des']; ?>: </td>
    <td><textarea name="des" cols="40" rows="5"><?php echo $this->_var['card']['des']; ?></textarea></td>
  </tr>
  
 
  <tr>
    <td colspan="2" align="center">
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['card']['id']; ?>" />
      <input type="hidden" name="ct_id" value="<?php echo $this->_var['card']['ct_id']; ?>" />
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
document.forms['theForm'].elements['rank_name'].focus();

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

/**
 * 检查表单输入的数据
 */
function validate()
{
 return true;
}

function doSpecial()
{
  if(document.forms['theForm'].elements['special_rank'].checked)
  {
      document.forms['theForm'].elements['max_points'].disabled = "true";
      document.forms['theForm'].elements['min_points'].disabled = "true";
  }
  else
  {
      document.forms['theForm'].elements['max_points'].disabled = "";
      document.forms['theForm'].elements['min_points'].disabled = "";
  }
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>