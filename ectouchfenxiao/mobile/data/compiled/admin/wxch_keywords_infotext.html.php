<!-- $Id: wxch_keywords_infotext.html 17126 2013-12-23 10:30:26Z djks $ -->
<?php echo $this->fetch('wxch_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/utils.js,./js/selectzone.js,./js/colorselector.js')); ?>
<script type="text/javascript" src="../data/static/js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../data/static/js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div class="tab-div">
<div id="tabbar-div">
    <p>
        <span class="tab-front" id="one-table">文字信息</span>
    </p>
</div>
<div id="tabbody-div">
<form enctype="multipart/form-data" action="" method="post" name="theForm" >
<!-- 通用信息 -->
<table width="90%" id="one-table" align="center">
    <tr>
                <td class="label">规则名称：</td>
                <td>
                    <input type="text" name="name" value="<?php echo $this->_var['data']['name']; ?>" style="float:left;color:;" size="30" />
                    <span class="require-field">*</span>
                </td>
            </tr>
            <tr>
                <td class="label">关键词：</td>
                <td>
                    <input type="text" name="keyword" value="<?php echo $this->_var['data']['keyword']; ?>" style="float:left;color:;" size="30" />
                    <span class="require-field">*</span>
                </td>
            </tr>
            <tr>
                <td class="label">消息类型：</td>
                <td>
                    <select name="type">
                        <option value="0">请选择</option>
                        <option value="1" <?php if ($this->_var['data']['type'] == 1): ?>selected="selected"<?php endif; ?>>文字</option>
                    </select>
                    <span class="require-field">*</span>
                </td>
            </tr>
            <!-- 详细描述 -->
          <tr>
              <td colspan="2" align="center" width="80%"><?php echo $this->_var['FCKeditor']; ?></td>
          </tr>
</table>
</div>
</div>      


        <div class="button-div">
          <input type="hidden" name="id" value="<?php echo $this->_var['data']['id']; ?>" />
          <input type="submit" value="保存" class="button" />
          <input type="reset" value="重置" class="button" />
        </div>
      
    
</div>
</form>
<!-- end keywords form -->
<?php echo $this->fetch('wxch_pagefooter.htm'); ?>
