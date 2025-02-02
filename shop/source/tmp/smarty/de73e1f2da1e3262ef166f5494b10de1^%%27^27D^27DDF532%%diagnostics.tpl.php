<?php /* Smarty version 2.6.34, created on 2025-02-01 09:49:03
         compiled from diagnostics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'diagnostics.tpl', 5, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
    <title><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ADMIN_TITLE'), $this);?>
</title>
</head>

<!-- frames -->
<frameset  rows="5%,*" border="0">
    <frame src="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&<?php echo $this->_tpl_vars['listurl']; ?>
<?php if ($this->_tpl_vars['oxid']): ?>&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
<?php endif; ?>" name="list" marginwidth="0" marginheight="0" scrolling="off" frameborder="0">
    <frame src="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&<?php echo $this->_tpl_vars['editurl']; ?>
<?php if ($this->_tpl_vars['oxid']): ?>&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
<?php endif; ?>" name="edit" marginwidth="0" marginheight="0" scrolling="auto" frameborder="0">
</frameset>


</html>