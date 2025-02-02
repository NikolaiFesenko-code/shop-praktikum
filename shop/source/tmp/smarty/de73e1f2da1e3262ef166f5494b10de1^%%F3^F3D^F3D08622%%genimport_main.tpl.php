<?php /* Smarty version 2.6.34, created on 2025-02-01 09:49:06
         compiled from genimport_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'genimport_main.tpl', 1, false),array('modifier', 'oxaddslashes', 'genimport_main.tpl', 5, false),array('function', 'oxmultilang', 'genimport_main.tpl', 6, false),array('function', 'oxinputhelp', 'genimport_main.tpl', 70, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'skip_onload' => 'true')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
    if (top)
    {   top.sShopTitle   = "<?php echo ((is_array($_tmp=$this->_tpl_vars['actshopobj']->oxshops__oxname->getRawValue())) ? $this->_run_mod_handler('oxaddslashes', true, $_tmp) : smarty_modifier_oxaddslashes($_tmp)); ?>
";
        top.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_MENUITEM'), $this);?>
";
        top.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_MENUSUBITEM'), $this);?>
";
        top.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
        top.setTitle();
    }
</script>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<div id="genimportnav_vline"></div>

<ul class="genimportnav">
    <?php if ($this->_tpl_vars['sNavStep'] == 2 || $this->_tpl_vars['sNavStep'] == 3): ?>
        <?php $this->assign('blLinkToFirstStep', '1'); ?>
    <?php endif; ?>
    <li class="<?php if ($this->_tpl_vars['sNavStep'] == 1): ?>active<?php endif; ?><?php if ($this->_tpl_vars['blLinkToFirstStep']): ?> link<?php endif; ?>"><?php if ($this->_tpl_vars['blLinkToFirstStep']): ?><a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=genimport_main"><?php endif; ?><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_STEP'), $this);?>
 1<?php if ($this->_tpl_vars['blLinkToFirstStep']): ?></a><?php endif; ?></li>
    <li class="<?php if ($this->_tpl_vars['sNavStep'] == 2): ?>active<?php endif; ?>"><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_STEP'), $this);?>
 2</li>
    <li class="<?php if ($this->_tpl_vars['sNavStep'] == 3): ?>active<?php endif; ?>"><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_FINISH'), $this);?>
</li>
</ul>

<div id="genimportpage">
    <form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="oxid" value="1">
        <input type="hidden" name="cl" value="">
    </form>

    <?php if ($this->_tpl_vars['sNavStep'] == 1): ?>
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_STEP_1_TITLE'), $this);?>
</h3>
    <?php if ($this->_tpl_vars['Errors']['genimport']): ?>
    <div class="errorbox">
        <?php $_from = $this->_tpl_vars['Errors']['genimport']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
            <p><?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
</p>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    <br>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['iRepeatImport']): ?>
    <p><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_IMPORTDONE'), $this);?>
</p>
    <p><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_TOTALROWS'), $this);?>
: <b><?php echo $this->_tpl_vars['iTotalRows']; ?>
</b></p>
    <p><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_REPEATINGIMPORT'), $this);?>
...</p>
    <br>
    <?php endif; ?>


    <table cellspacing="0" cellpadding="0" border="0">
        <form name="myedit" id="myedit" method="post" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" enctype="multipart/form-data">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="genimport_main">
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="sNavStep" value="<?php echo $this->_tpl_vars['sNavStep']; ?>
">
        <tr>
            <td class="edittext" width="60" height="40"><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_TABLE'), $this);?>
:</td>
            <td class="edittext">
                <select name="sType" <?php echo $this->_tpl_vars['readonly']; ?>
 style="width: 210px;">
                <?php $_from = $this->_tpl_vars['aImportTables']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sTableTypePrefix'] => $this->_tpl_vars['sTableType']):
?>
                    <option value="<?php echo $this->_tpl_vars['sTableTypePrefix']; ?>
"><?php echo $this->_tpl_vars['sTableType']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENIMPORT_TABLE'), $this);?>

            </td>
        </tr>
        <tr>
            <td class="edittext" height="40"><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_CSVFILE'), $this);?>
:</td>
            <td class="edittext">
            <input type="file" class="edittext" style="width: 210px;" name="csvfile" <?php echo $this->_tpl_vars['readonly']; ?>
>
            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENIMPORT_CSVFILE'), $this);?>

            </td>
        </tr>
        <tr>
            <td class="edittext" height="40" nowrap><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_FIELDSTERMINATEDBY'), $this);?>
:</td>
            <td class="edittext">
            <input type="input" class="edittext" style="width: 20px;" maxlength="1" name="sGiCsvFieldTerminator" value="<?php echo $this->_tpl_vars['sGiCsvFieldTerminator']; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
            </td>
        </tr>
        <tr>
            <td class="edittext" height="40"><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_FIELDSENCLOSEDBY'), $this);?>
:</td>
            <td class="edittext">
            <input type="input" class="edittext" style="width: 20px;" maxlength="1" name="sGiCsvFieldEncloser" value="<?php echo $this->_tpl_vars['sGiCsvFieldEncloser']; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
            </td>
        </tr>
        <tr>
            <td class="edittext" height="40"></td>
            <td class="edittext">
                <input type="checkbox" class="edittext" name="blContainsHeader" value="1" <?php echo $this->_tpl_vars['readonly']; ?>
><?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENIMPORT_FIRSTCOLHEADER'), $this);?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_FIRSTCOLHEADER'), $this);?>

            </td>
        </tr>
        <tr>
            <td class="edittext" height="40"></td>
            <td class="edittext">
            <input type="submit" class="edittext" style="width: 210px;" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_UPLOADFILE'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
            </td>
        </tr>
        </form>
    </table>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['sNavStep'] == 2): ?>
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_STEP_2_TITLE'), $this);?>
</h3>

    <?php if ($this->_tpl_vars['Errors']['genimport']): ?>
    <div class="errorbox">
        <?php $_from = $this->_tpl_vars['Errors']['genimport']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
            <p><?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
</p>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    <?php endif; ?>

    <p><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_ASSIGNFIELDS'), $this);?>
 <b>"<?php echo $this->_tpl_vars['sImportTable']; ?>
"</b></p>
    <table cellspacing="1" cellpadding="0" border="0" class="genImportFieldsAssign">
        <form name="myedit" id="myedit" method="post" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="genimport_main">
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="sNavStep" value="<?php echo $this->_tpl_vars['sNavStep']; ?>
">
        <input type="hidden" name="sType" value="<?php echo $this->_tpl_vars['sType']; ?>
">
        <thead>
            <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_CSVFILE'), $this);?>
</td>
            <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_DBFIELDS'), $this);?>
</td>
        </thead>
        <?php $_from = $this->_tpl_vars['aCsvFieldsList']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sCsvField']):
?>
        <tr>
            <td class="edittext" width="1%" nowrap><?php echo $this->_tpl_vars['sCsvField']; ?>
: &nbsp;</td>
            <td class="edittext">
                <select name="aCsvFields[<?php echo $this->_tpl_vars['sCsvField']; ?>
]" style="width: 210px;">
                    <option value="">--- <?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_SKIP'), $this);?>
 ---</option>
                <?php $_from = $this->_tpl_vars['aDbFieldsList']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sDbField']):
?>
                    <option value="<?php echo $this->_tpl_vars['sDbField']; ?>
" <?php if ($this->_tpl_vars['sDbField'] == $this->_tpl_vars['sCsvField']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['sDbField']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENIMPORT_DBFIELDS'), $this);?>

            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr>
            <td class="edittext"></td>
            <td class="edittext">
                <input type="checkbox" class="edittext" name="iRepeatImport" value="1"> <?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_REPEATIMPORT'), $this);?>

                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENIMPORT_REPEATIMPORT'), $this);?>

                <br>
            </td>
        </tr>
        <tr>
            <td class="edittext"></td>
            <td class="edittext">
            <input type="submit" class="edittext" style="width: 210px;" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_BEGINIMPORT'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
            </td>
        </tr>
        </form>
    </table>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['sNavStep'] == 3): ?>
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_STEP_3_TITLE'), $this);?>
</h3>

    <?php if ($this->_tpl_vars['Errors']['genimport']): ?>
    <div class="errorbox">
        <?php $_from = $this->_tpl_vars['Errors']['genimport']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
            <p><?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
</p>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    <p><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_IMPORTDONEWITHERRORS'), $this);?>
</p>
    <?php else: ?>
    <p><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_IMPORTDONE'), $this);?>
</p>
    <?php endif; ?>

    <p><?php echo smarty_function_oxmultilang(array('ident' => 'GENIMPORT_TOTALROWS'), $this);?>
: <b><?php echo $this->_tpl_vars['iTotalRows']; ?>
</b></p>
    <?php endif; ?>


</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>