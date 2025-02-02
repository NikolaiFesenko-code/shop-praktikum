<?php /* Smarty version 2.6.34, created on 2025-02-01 09:49:03
         compiled from diagnostics_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'diagnostics_form.tpl', 1, false),array('function', 'oxmultilang', 'diagnostics_form.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='OXDIAG_MAIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
    <!--

    function handleSubmit()
    {
        var oButton = document.getElementById("submitButton");
        oButton.disabled = true;
    }
    //-->
</script>

<style>
    .result {
        padding: 15px;
        background-color: #F0F0F0 !important;
        border: 1px solid #C0C0C0 !important;
    }
</style>

<h1><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_HOME'), $this);?>
</h1>

<p><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_ABOUT'), $this);?>
</p>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/support_contact_form.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table>
    <tr>
        <td valign="top">

            <?php if (! empty ( $this->_tpl_vars['sErrorMessage'] )): ?>
                <p><span style="color: red"><b><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_ERRORMESSAGETEMPLATE'), $this);?>
</b></span></p>
                <span style="color: red"><?php echo $this->_tpl_vars['sErrorMessage']; ?>
</span>
            <?php elseif (! $this->_tpl_vars['oView']->getParam('runAnalysis')): ?>

            <form name="diagnosticsForm" id="diagnosticsForm" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" onsubmit="handleSubmit()" method="post">
                <table border="0" cellpadding="0">
                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                    <input type="hidden" name="cl" value="diagnostics_main">
                    <input type="hidden" name="fnc" value="startDiagnostics">

                    <input type="hidden" name="runAnalysis" value="1">

                    <tr>
                        <td><input type="checkbox" id="oxdiag_frm_modules" name="oxdiag_frm_modules" value="1" checked <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                        <td><label for="oxdiag_frm_modules"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_COLLECT_MODULES'), $this);?>
</label></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" id="oxdiag_frm_health" name="oxdiag_frm_health" value="1" checked <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                        <td><label for="oxdiag_frm_health"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_COLLECT_HEALTH'), $this);?>
</label></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" id="oxdiag_frm_php" name="oxdiag_frm_php" value="1" checked <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                        <td><label for="oxdiag_frm_php"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_COLLECT_PHP'), $this);?>
</label></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" id="oxdiag_frm_server" name="oxdiag_frm_server" value="1" checked <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                        <td><label for="oxdiag_frm_server"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_COLLECT_SERVER'), $this);?>
</label></td>
                    </tr>
                </table>

                <br><br>
                <input type="submit" class="edittext" id="submitButton" name="submitButton" value=" <?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_FORM_START_CHECK'), $this);?>
 " <?php echo $this->_tpl_vars['readonly']; ?>
>

            </form>
            <?php endif; ?>

        </td>
    </tr>
</table>



<?php if (! empty ( $this->_tpl_vars['sResult'] )): ?>
<h1><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_RESULT_SUCCESSFUL'), $this);?>
</h1>
<h2><strong><a class="underlined" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&amp;cl=diagnostics_main&amp;fnc=downloadResultFile"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_DOWNLOAD_FILE'), $this);?>
</a></strong>.</h2>

<h3><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_RESULT'), $this);?>
:</h3>
<div class="result">
    <p>
    <?php echo $this->_tpl_vars['sResult']; ?>

    </p>
</div>
<?php endif; ?>

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