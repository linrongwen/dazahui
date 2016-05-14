<!-- $Id: user_rank_info.htm 15053 2008-10-25 03:07:46Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>

<div class="main-div">
<form action="user_card.php" method="post" name="theForm" onsubmit="return validate()">
<table width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['card_type_ct_name']; ?>：</td>
    <td><input type="text" name="ct_name" value="<?php echo $this->_var['card']['ct_name']; ?>" maxlength="20" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['des']; ?>: </td>
    <td><textarea name="des" cols="40" rows="5"><?php echo $this->_var['card']['des']; ?></textarea></td>
  </tr>
  
 
  <tr>
    <td colspan="2" align="center">
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
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
    if (!document.forms['theForm'].elements['special_rank'].checked)
    {
        if (Utils.trim(document.forms['theForm'].elements['min_points'].value) == '' ||
            !Utils.isInt(document.forms['theForm'].elements['min_points'].value))
        {
            alert(integral_min_invalid);
            return false;
        }

        if (Utils.trim(document.forms['theForm'].elements['max_points'].value) == '' ||
            !Utils.isInt(document.forms['theForm'].elements['max_points'].value))
        {
            alert(integral_max_invalid);
            return false;
        }

        if (!document.forms['theForm'].elements['special_rank'].checked &&
            (parseInt(document.forms['theForm'].elements['max_points'].value) <=
            parseInt(document.forms['theForm'].elements['min_points'].value)))
        {
            alert(integral_max_small);
            return false;
        }
        if (parseInt(document.forms['theForm'].elements['discount'].value) < 1 ||
          parseInt(document.forms['theForm'].elements['discount'].value) > 100)
        {
          alert(discount_invalid);
          return false;
        }
    }

    validator = new Validator("theForm");
    validator.required('rank_name', rank_name_empty);
    validator.isInt('discount', discount_invalid, true);
    return validator.passed();
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