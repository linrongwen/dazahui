<!-- $Id: wxch_config.htm 14216 2013-10-13 14:27:21Z djks $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_var['wxch_lang']['cp_home']; ?><?php if ($this->_var['wxch_lang']['ur_here']): ?> - <?php echo $this->_var['wxch_lang']['ur_here']; ?> <?php endif; ?></title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/transport.js,./js/common.js')); ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
//-->
</script>
<style>
</style>
</head>
<body>

<h1>
<?php if ($this->_var['action_link']): ?>
<span class="action-span"><a href="<?php echo $this->_var['action_link']['href']; ?>"><?php echo $this->_var['action_link']['text']; ?></a></span>
<?php endif; ?>
<?php if ($this->_var['action_link2']): ?>
<span class="action-span"><a href="<?php echo $this->_var['action_link2']['href']; ?>"><?php echo $this->_var['action_link2']['text']; ?></a>&nbsp;&nbsp;</span>
<?php endif; ?>
<span class="action-span1"><a href="index.php?act=main">分销二维码设置</a> </span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
  <form name="theForm" method="post" action="qr_set.php?act=index" enctype="multipart/form-data">
  <table width="100%" >
  <tr><td align="center" colspan="2"><a href="qr_set.php?act=test" class="btn01" target="_blank" style="color:#fff; padding:3px;">测试生成的二维码效果图</a> [提示]：请保存设置后再单击“测试”按钮，否则最新配置的参数无法生效。</td></tr>
  <tr>
    <td class="label">代言对象:</td>
    <td><input type="text" name="shop_name" size="20" value="<?php echo $this->_var['ret']['shop_name']; ?>"/><span class="notice-span" style="display:block"  id="noticeshop_title">我为“XXXX”代言</span></td>
  </tr>
  <tr>
    <td class="label">背景图片:</td>
    <td><input type="file" name="file">
          <span class="narrow-label">上传文件
          <input name="dst_image" type="text" value="<?php echo htmlspecialchars($this->_var['ret']['dst_image']); ?>" size="50" maxlength="255" />
          </span>
          <br> 分辨率为：640 *900
          </td>
  </tr>
  <tr>
    <td class="label">头像宽度:</td>
    <td><input type="number" name="headpic_width" size="20" value="<?php echo $this->_var['ret']['headpic_width']; ?>"/>像素</td>
  </tr>
 <tr>
    <td class="label">头像高度:</td>
    <td><input type="number" name="headpic_height" size="20" value="<?php echo $this->_var['ret']['headpic_height']; ?>"/>像素</td>
  </tr>
 <tr>
    <td class="label">头像显示位置的x坐标:</td>
    <td><input type="number" name="headpic_src_x" size="20" value="<?php echo $this->_var['ret']['headpic_src_x']; ?>"/></td>
  </tr>
 <tr>
    <td class="label">头像显示位置的y坐标:</td>
    <td><input type="number" name="headpic_src_y" size="20" value="<?php echo $this->_var['ret']['headpic_src_y']; ?>"/></td>
  </tr>
   <tr>
    <td class="label">二维码宽度:</td>
    <td><input type="number" name="qr_width" size="20" value="<?php echo $this->_var['ret']['qr_width']; ?>"/>像素</td>
  </tr>
 <tr>
    <td class="label">二维码高度:</td>
    <td><input type="number" name="qr_height" size="20" value="<?php echo $this->_var['ret']['qr_height']; ?>"/>像素</td>
  </tr>
 <tr>
    <td class="label">二维码显示位置的x坐标:</td>
    <td><input type="number" name="qr_src_x" size="20" value="<?php echo $this->_var['ret']['qr_src_x']; ?>"/></td>
  </tr>
 <tr>
    <td class="label">二维码显示位置的y坐标:</td>
    <td><input type="number" name="qr_src_y" size="20" value="<?php echo $this->_var['ret']['qr_src_y']; ?>"/></td>
  </tr>
  <tr>
    <td class="label">昵称显示位置的x坐标:</td>
    <td><input type="number" name="txt_src_x" size="20" value="<?php echo $this->_var['ret']['txt_src_x']; ?>"/></td>
  </tr>
 <tr>
    <td class="label">昵称显示位置的y坐标:</td>
    <td><input type="number" name="txt_src_y" size="20" value="<?php echo $this->_var['ret']['txt_src_y']; ?>"/></td>
  </tr>
  <tr>
    <td class="label">文本字体的大小:</td>
    <td><input type="number" name="font_size" size="20" value="<?php echo $this->_var['ret']['font_size']; ?>"/>像素</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button"/>
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </td>
  </tr>
</table>
  </form>

</div>

<?php echo $this->fetch('wxch_pagefooter.htm'); ?>