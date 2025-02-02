<?php /* Smarty version 2.6.34, created on 2025-02-01 09:48:44
         compiled from content_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'content_main.tpl', 1, false),array('modifier', 'replace', 'content_main.tpl', 108, false),array('modifier', 'oxtruncate', 'content_main.tpl', 177, false),array('function', 'oxmultilang', 'content_main.tpl', 59, false),array('function', 'oxinputhelp', 'content_main.tpl', 70, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='CONTENT_MAIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<!--
function ShowMenueFields( iVal)
{
    if( iVal == 2)
    {
        document.getElementById('cattree').style.visibility = 'visible';
    }
    else
    {
        document.getElementById('cattree').style.visibility = 'hidden';
    }

    if( iVal == 3)
    {
        document.getElementById('manuell').style.visibility = 'visible';
    }
    else
    {
        document.getElementById('manuell').style.visibility = 'hidden';
    }
}
//-->
</script>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="content_main">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>
<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post" onSubmit="copyLongDesc( 'oxcontents__oxcontent' );">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cl" value="content_main">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="editval[oxcontents__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="folderclass" value="oxcontent">
    <input type="hidden" name="editval[oxcontents__oxcontent]" value="">

    <table cellspacing="0" cellpadding="0" border="0" width="98%">
      <colgroup><col width="30%"><col width="5%"><col width="65%"></colgroup>
      <tr>
        <td valign="top" class="edittext" width="200">
          <table cellspacing="0" cellpadding="0" border="0">

            
                <?php if ($this->_tpl_vars['blLoadError']): ?>
                <tr>
                  <td colspan="2">
                    <div class="errorbox"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_ERROR'), $this);?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_USEDIDENTCODE'), $this);?>
</div>
                  </td>
                </tr>
                <?php endif; ?>

                <tr>
                  <td class="edittext" width="70">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ACTIVE'), $this);?>

                  </td>
                  <td class="edittext">
                  <input class="edittext" type="checkbox" name="editval[oxcontents__oxactive]" value='1' <?php if ($this->_tpl_vars['edit']->oxcontents__oxactive->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_ACTIVE'), $this);?>

                  </td>
                </tr>
                <tr>
                  <td class="edittext" width="70">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_ISPLAIN'), $this);?>

                  </td>
                  <td class="edittext">
                  <input class="edittext" type="hidden" name="editval[oxcontents__oxisplain]" value='0' <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <input class="edittext" type="checkbox" name="editval[oxcontents__oxisplain]" value='1' <?php if ($this->_tpl_vars['edit']->oxcontents__oxisplain->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_CONTENT_MAIN_ISPLAIN'), $this);?>

                  </td>
                </tr>
                <tr>
                  <td class="edittext">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_TITLE'), $this);?>

                  </td>
                  <td class="edittext">
                  <input type="text" class="editinput" size="28" maxlength="<?php echo $this->_tpl_vars['edit']->oxcontents__oxtitle->fldmax_length; ?>
" name="editval[oxcontents__oxtitle]" value="<?php echo $this->_tpl_vars['edit']->oxcontents__oxtitle->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_TITLE'), $this);?>

                  </td>
                </tr>
                <tr>
                  <td class="edittext">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IDENT'), $this);?>
.
                  </td>
                  <td class="edittext">
                  <input type="text" class="editinput" size="28" maxlength="<?php echo $this->_tpl_vars['edit']->oxcontents__oxloadid->fldmax_length; ?>
" name="editval[oxcontents__oxloadid]" value="<?php echo $this->_tpl_vars['edit']->oxcontents__oxloadid->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_IDENT'), $this);?>

                  </td>
                </tr>
                <tr>
                  <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_INFOLDER'), $this);?>

                  </td>
                  <td class="edittext">
                    <select name="editval[oxcontents__oxfolder]" class="folderselect" <?php echo $this->_tpl_vars['readonly']; ?>
>
                    <?php $_from = $this->_tpl_vars['afolder']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['color']):
?>
                    <option value="<?php echo $this->_tpl_vars['field']; ?>
" <?php if ($this->_tpl_vars['edit']->oxcontents__oxfolder->value == $this->_tpl_vars['field'] || ( ((is_array($_tmp=$this->_tpl_vars['field'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_RR', "") : smarty_modifier_replace($_tmp, '_RR', "")) == 'CMSFOLDER_NONE' ) && ( $this->_tpl_vars['edit']->oxcontents__oxfolder->value == "" )): ?>SELECTED<?php endif; ?> style="color: <?php echo $this->_tpl_vars['color']; ?>
;"><?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['field']), $this);?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_INFOLDER'), $this);?>

                  </td>
                </tr>
                <?php if ($this->_tpl_vars['edit']->oxcontents__oxloadid->value == 'oxagb'): ?>
                <tr>
                  <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_TERMVER'), $this);?>

                  </td>
                  <td class="edittext">
                  <input type="text" class="editinput" size="28" maxlength="<?php echo $this->_tpl_vars['edit']->oxcontents__oxtermversion->fldmax_length; ?>
" name="editval[oxcontents__oxtermversion]" value="<?php echo $this->_tpl_vars['edit']->oxcontents__oxtermversion->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                  </td>
                </tr>
                <?php endif; ?>
                <tr>
                  <td class="edittext" colspan="2"><br>
                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "language_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
                  </td>
                </tr>
                <tr>
                  <td class="edittext">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_SNIPPET'), $this);?>

                  </td>
                  <td class="edittext">
                  <input type="radio" name="editval[oxcontents__oxtype]" id="oxtype0" value="0" class="edittext" onClick="javascript:ShowMenueFields( 0);" <?php if ($this->_tpl_vars['edit']->oxcontents__oxsnippet->value == 1): ?>CHECKED<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_CONTENT_MAIN_SNIPPET'), $this);?>

                  </td>
                </tr>
                <tr>
                  <td class="edittext">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_MAINMENU'), $this);?>

                  </td>
                  <td class="edittext">
                  <input type="radio" name="editval[oxcontents__oxtype]" id="oxtype1" value="1" class="edittext" onClick="javascript:ShowMenueFields( 1);" <?php if ($this->_tpl_vars['edit']->oxcontents__oxtype->value == 1): ?>CHECKED<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_CONTENT_MAIN_MAINMENU'), $this);?>

                  </td>
                </tr>
                <tr>
                  <td class="edittext">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_CATEGORY'), $this);?>

                  </td>
                  <td class="edittext">
                  <input type="radio" name="editval[oxcontents__oxtype]" id="oxtype2" value="2" class="edittext" onClick="javascript:ShowMenueFields( 2);" <?php if ($this->_tpl_vars['edit']->oxcontents__oxtype->value == 2): ?>CHECKED<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_CONTENT_MAIN_CATEGORY'), $this);?>

                  </td>
                </tr>
                <tr>
                  <td class="edittext">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_MANUAL'), $this);?>

                  </td>
                  <td class="edittext">
                  <input type="radio" name="editval[oxcontents__oxtype]" id="oxtype3" value="3" class="edittext" onClick="javascript:ShowMenueFields( 3);" <?php if ($this->_tpl_vars['edit']->oxcontents__oxtype->value == 3): ?>CHECKED<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_CONTENT_MAIN_MANUAL'), $this);?>

                  </td>
                </tr>
                <tr>
                  <td style="padding-top:20px;padding-bottom:20px;" colspan="2">
                    <hr>
                  </td>
                </tr>
                <tr id="cattree" <?php if ($this->_tpl_vars['edit']->oxcontents__oxtype->value != 2): ?>style="display:none;"<?php endif; ?>>
                  <td class="edittext">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'CONTENT_MAIN_INSERTBEFORE'), $this);?>

                  </td>
                  <td class="edittext">
                    <select name="editval[oxcontents__oxcatid]" class="editinput" <?php echo $this->_tpl_vars['readonly']; ?>
>
                    <?php $_from = $this->_tpl_vars['cattree']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pcat']):
?>
                    <option value="<?php echo $this->_tpl_vars['pcat']->oxcategories__oxid->value; ?>
" <?php if ($this->_tpl_vars['pcat']->selected): ?>SELECTED<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['pcat']->oxcategories__oxtitle->value)) ? $this->_run_mod_handler('oxtruncate', true, $_tmp, 33, "..", true) : smarty_modifier_oxtruncate($_tmp, 33, "..", true)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_CONTENT_MAIN_INSERTBEFORE'), $this);?>

                  </td>
                </tr>
                <tr id="manuell" <?php if ($this->_tpl_vars['edit']->oxcontents__oxtype->value != 3): ?>style="display:none;"<?php endif; ?>>
                  <td class="edittext">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LINK'), $this);?>

                  </td>
                  <td class="edittext">
                  <input type="text" size="28" class="edittext" style="font-size: 7pt;" value="<?php echo $this->_tpl_vars['link']; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_LINK'), $this);?>

                  </td>
                </tr>
            
            <tr>
              <td class="edittext">
              </td>
              <td class="edittext">
              <input type="submit" class="edittext" name="saveContent" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='save'"" <?php echo $this->_tpl_vars['readonly']; ?>
><br>
              </td>
            </tr>
          </table>
        </td>
        <td>&nbsp;</td>
        <!-- Anfang rechte Seite -->
        <td valign="top" class="edittext" align="left">
            
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            
        </td>
        <!-- Ende rechte Seite -->
      </tr>
 </table>
</form>

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