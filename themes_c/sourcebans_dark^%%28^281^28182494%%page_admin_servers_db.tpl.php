<?php /* Smarty version 2.6.20, created on 2011-08-22 03:32:00
         compiled from page_admin_servers_db.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_admin_servers_db.tpl', 10, false),)), $this); ?>
<h3>SourceBans Database Config</h3>
The following config file is the file your game server needs to be able to communicate with the database. You need to copy its contents and place it in this file on your game server: <b>/[mod]/addons/sourcemod/configs/databases.cfg</b><br><br />
<table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
  <tr>
    <td>
    <textarea cols="75" rows="23" readonly><?php echo $this->_tpl_vars['conf']; ?>
</textarea>
    </td>
  </tr>
  <tr>
    <td align="center"><?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'aconf','submit' => false), $this);?>
</td>
  </tr>
</table>

