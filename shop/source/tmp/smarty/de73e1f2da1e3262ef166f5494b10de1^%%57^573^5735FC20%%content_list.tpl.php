<?php /* Smarty version 2.6.34, created on 2025-02-01 09:48:44
         compiled from content_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'content_list.tpl', 1, false),array('modifier', 'cat', 'content_list.tpl', 84, false),array('modifier', 'oxaddslashes', 'content_list.tpl', 115, false),array('function', 'oxmultilang', 'content_list.tpl', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('where', $this->_tpl_vars['oView']->getListFilter()); ?>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<script type="text/javascript">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
    <?php endif; ?>
}
//-->
</script>

<div id="liste">

<form name="search" id="search" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_formparams.tpl", 'smarty_include_vars' => array('cl' => 'content_list','lstrt' => $this->_tpl_vars['lstrt'],'actedit' => $this->_tpl_vars['actedit'],'oxid' => $this->_tpl_vars['oxid'],'fnc' => "",'language' => $this->_tpl_vars['actlang'],'editlanguage' => $this->_tpl_vars['actlang'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <colgroup>
        
        	<col width="3%">
            <col width="47%">
            <col width="48%">
            <col width="2%">
        
    </colgroup>
    <tr class="listitem">
        
        	<td valign="top" class="listfilter first" align="right">
				<div class="r1"><div class="b1">&nbsp;</div></div>
	        </td>
            <td valign="top" class="listfilter" height="20">
                <div class="r1"><div class="b1">
                <select name="folder" class="folderselect" onChange="document.search.submit();" style="width: 75px;">
                    <option value="-1" style="color: #000000;"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_LIST_ALL'), $this);?>
</option>
                    <?php $_from = $this->_tpl_vars['afolder']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['color']):
?>
                    <option value="<?php echo $this->_tpl_vars['field']; ?>
" <?php if ($this->_tpl_vars['folder'] == $this->_tpl_vars['field']): ?>SELECTED<?php endif; ?> style="color: <?php echo $this->_tpl_vars['color']; ?>
;"><?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['field']), $this);?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                &nbsp;&nbsp;<input class="listedit" type="text" size="30" maxlength="128" name="where[oxcontents][oxtitle]" value="<?php echo $this->_tpl_vars['where']['oxcontents']['oxtitle']; ?>
">
                </div></div>
            </td>
            <td valign="top" class="listfilter" height="20" colspan="2">
                <div class="r1"><div class="b1">
                <div class="find">
                    <select name="changelang" class="editinput" onChange="Javascript:top.oxid.admin.changeLanguage();">
                    <?php $_from = $this->_tpl_vars['languages']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
                    <option value="<?php echo $this->_tpl_vars['lang']->id; ?>
" <?php if ($this->_tpl_vars['lang']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['lang']->name; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                    <input class="listedit" type="submit" name="submitit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEARCH'), $this);?>
">
                </div>
                <input class="listedit" type="text" size="32" maxlength="32" name="where[oxcontents][oxloadid]" value="<?php echo $this->_tpl_vars['where']['oxcontents']['oxloadid']; ?>
">
                </div></div>
            </td>
        
    </tr>
    <tr>
        
        	<td class="listheader first" height="15" width="30" align="center"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxcontents', 'oxactive', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ACTIVTITLE'), $this);?>
</a></td>
            <td class="listheader" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxcontents', 'oxtitle', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_TITLE'), $this);?>
</a></td>
            <td class="listheader" colspan="2">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxcontents', 'oxloadid', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IDENT'), $this);?>
</a></td>
        
    </tr>

<?php $this->assign('blWhite', ""); ?>
<?php $this->assign('_cnt', 0); ?>
<?php $_from = $this->_tpl_vars['mylist']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listitem']):
?>
    <?php $this->assign('_cnt', $this->_tpl_vars['_cnt']+1); ?>
    <tr id="row.<?php echo $this->_tpl_vars['_cnt']; ?>
">

        
            <?php if ($this->_tpl_vars['listitem']->blacklist == 1): ?>
                <?php $this->assign('listclass', 'listitem3'); ?>
            <?php else: ?>
                <?php $this->assign('listclass', ((is_array($_tmp='listitem')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['blWhite']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['blWhite']))); ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['listitem']->getId() == $this->_tpl_vars['oxid']): ?>
                <?php $this->assign('listclass', 'listitem4'); ?>
            <?php endif; ?>
            <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
<?php if ($this->_tpl_vars['listitem']->oxcontents__oxactive->value == 1): ?> active<?php endif; ?>" height="15"><div class="listitemfloating">&nbsp</a></div></td>
            <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxcontents__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php if ($this->_tpl_vars['listitem']->oxcontents__oxtitle->value): ?><?php echo $this->_tpl_vars['listitem']->oxcontents__oxtitle->value; ?>
<?php else: ?>---<?php endif; ?></a></div></td>
            <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxcontents__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo $this->_tpl_vars['listitem']->oxcontents__oxloadid->value; ?>
</a></div></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">
            <?php if (! $this->_tpl_vars['readonly']): ?>
            <a href="Javascript:top.oxid.admin.deleteThis('<?php echo $this->_tpl_vars['listitem']->oxcontents__oxid->value; ?>
');" class="delete" id="del.<?php echo $this->_tpl_vars['_cnt']; ?>
" alt="" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_delete')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
            <?php endif; ?>
            </td>
        
    </tr>
<?php if ($this->_tpl_vars['blWhite'] == '2'): ?>
<?php $this->assign('blWhite', ""); ?>
<?php else: ?>
<?php $this->assign('blWhite', '2'); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagenavisnippet.tpl", 'smarty_include_vars' => array('colspan' => '4')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
</form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagetabsnippet.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<script type="text/javascript">
if (parent.parent)
{   parent.parent.sShopTitle   = "<?php echo ((is_array($_tmp=$this->_tpl_vars['actshopobj']->oxshops__oxname->getRawValue())) ? $this->_run_mod_handler('oxaddslashes', true, $_tmp) : smarty_modifier_oxaddslashes($_tmp)); ?>
";
    parent.parent.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_LIST_MENUITEM'), $this);?>
";
    parent.parent.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_LIST_MENUSUBITEM'), $this);?>
";
    parent.parent.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
    parent.parent.setTitle();
}
</script>
</body>
</html>