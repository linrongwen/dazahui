<!-- $Id: wxch_point.html  2013-10-16 20:13 Z djks $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $this->_var['wxch_lang']['cp_home']; ?><?php if ($this->_var['wxch_lang']['ur_here']): ?> - <?php echo $this->_var['wxch_lang']['ur_here']; ?> <?php endif; ?></title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="styles/general.css" rel="stylesheet" type="text/css" />
    <link href="styles/main.css" rel="stylesheet" type="text/css" />
    <?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/transport.js,./js/common.js')); ?>
</head>
<body>

<h1>
    <span class="action-span1"><a href="index.php?act=main"><?php echo $this->_var['wxch_lang']['cp_home']; ?></a> </span><span id="search_id" class="action-span1"> - <?php echo $this->_var['wxch_lang']['ur_here']; ?></span>
    <div style="clear:both"></div>
</h1>

<?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/utils.js,./js/selectzone.js,./js/colorselector.js')); ?>
<script type="text/javascript" src="../data/static/js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../data/static/js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<?php if ($this->_var['warning']): ?>
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
    <li style="border: 1px solid #CC0000; background: #FFFFCC; padding: 10px; margin-bottom: 5px;" ><?php echo $this->_var['warning']; ?></li>
</ul>
<?php endif; ?>

<!-- start goods form -->
<div class="tab-div">
<!-- tab bar -->
<div id="tabbar-div">
    <p>
        <span class="tab-front" id="general-tab">设置</span>
    </p>
</div>

<!-- tab body -->
<div id="tabbody-div">
<form enctype="multipart/form-data" action="" method="post" name="theForm" >
<!-- 通用信息 -->
<table width="35%" id="general-table" align="center">
    <tr>
        <td class="label"></td>
        <td></td>
        <td align="center">积分值</td>
        <td align="center">有效次数</td>
    </tr>
    <?php $_from = $this->_var['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    <tr>
        <td class="label"><?php echo $this->_var['item']['name']; ?>：</td>
        <td>
            <label><input type="radio" name="autoload[<?php echo $this->_var['item']['point_name']; ?>]" value="1" <?php if ($this->_var['item']['autoload'] == yes): ?>checked<?php endif; ?>/>开启</label>
            <label><input type="radio" name="autoload[<?php echo $this->_var['item']['point_name']; ?>]" value="0" <?php if ($this->_var['item']['autoload'] == no): ?>checked<?php endif; ?>/>关闭</label>
        </td>
        <td align="center">
            <label>&nbsp;&nbsp;<input type="text" name="point_value[<?php echo $this->_var['item']['point_name']; ?>]" value="<?php echo $this->_var['item']['point_value']; ?>" size="5"/></label>
        </td>
        <td align="center">
            <label>&nbsp;&nbsp;<input type="text" name="point_num[<?php echo $this->_var['item']['point_name']; ?>]" value="<?php echo $this->_var['item']['point_num']; ?>" size="5"/></label>
            <input type="hidden" name="point_name[]" value="<?php echo $this->_var['item']['point_name']; ?>"/>
        </td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>


<div class="button-div">
    <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" onclick="validate('<?php echo $this->_var['goods']['goods_id']; ?>')" />
    <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
</div>
<input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
</form>
</div>
</div>
<!-- end goods form -->
<?php echo $this->smarty_insert_scripts(array('files'=>'./js/validator.js,./js/tab.js')); ?>

<script language="JavaScript">
var goodsId = '<?php echo $this->_var['goods']['goods_id']; ?>';
var elements = document.forms['theForm'].elements;
var sz1 = new SelectZone(1, elements['source_select1'], elements['target_select1']);
var sz2 = new SelectZone(2, elements['source_select2'], elements['target_select2'], elements['price2']);
var sz3 = new SelectZone(1, elements['source_select3'], elements['target_select3']);
var marketPriceRate = <?php echo empty($this->_var['cfg']['market_price_rate']) ? '1' : $this->_var['cfg']['market_price_rate']; ?>;
var integralPercent = <?php echo empty($this->_var['cfg']['integral_percent']) ? '0' : $this->_var['cfg']['integral_percent']; ?>;


onload = function()
{

    if (document.forms['theForm'].elements['auto_thumb'])
    {
        handleAutoThumb(document.forms['theForm'].elements['auto_thumb'].checked);
    }

    // 检查新订单
    startCheckOrder();
    
        <?php $_from = $this->_var['user_rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        set_price_note(<?php echo $this->_var['item']['rank_id']; ?>);
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
        document.forms['theForm'].reset();
    }


    function setAttrList(result, text_result)
    {
        document.getElementById('tbody-goodsAttr').innerHTML = result.content;
    }

            
</script>
<?php echo $this->fetch('wxch_pagefooter.htm'); ?>
