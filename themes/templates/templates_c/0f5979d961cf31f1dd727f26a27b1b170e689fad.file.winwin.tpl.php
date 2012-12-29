<?php /* Smarty version Smarty-3.1.8, created on 2012-12-02 17:20:11
         compiled from "/Users/robinherzog/github/local/HabboPHP-Dev-2/themes/templates/winwin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182251324950bb7fbb9ae452-03924447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f5979d961cf31f1dd727f26a27b1b170e689fad' => 
    array (
      0 => '/Users/robinherzog/github/local/HabboPHP-Dev-2/themes/templates/winwin.tpl',
      1 => 1343071173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182251324950bb7fbb9ae452-03924447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'errorPrix' => 0,
    'success' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bb7fbba0c698_77257841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bb7fbba0c698_77257841')) {function content_50bb7fbba0c698_77257841($_smarty_tpl) {?><div id="container">
	<div id="content" style="position: relative" class="clear fix">
    	<div>
    		<div class="content">
    			<div class="habblet-container" style="width:400px ;float:left" >
    				<div class="cbb clearfix green" >
    					<h2 class="title" >Achat de <?php echo $_smarty_tpl->tpl_vars['config']->value->winwin;?>
 WinWin</h2>
    					<div class="box-content">
    					<?php if (isset($_smarty_tpl->tpl_vars['errorPrix']->value)){?>
    							<div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;"><?php echo $_smarty_tpl->getConfigVariable('YouHaveNoEnough');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>
</div>
    					<?php }?>
    					<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
    							<div style="padding:10px;font-size:18px;background:#60B200;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;"><?php echo $_smarty_tpl->getConfigVariable('SuccessWinWin');?>
</div>
    					<?php }?>
	    					<p>Salut <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
 !<br><br/>
		    					Sur <?php echo $_smarty_tpl->tpl_vars['config']->value->name;?>
 tu peux acheter <?php echo $_smarty_tpl->tpl_vars['config']->value->winwin;?>
 WinWin pour <?php echo $_smarty_tpl->tpl_vars['config']->value->winwinprix;?>
 !
	    					</p>
	    					<form accept="winwin.php" method="post" id="winwin">
	    					<input class="large-button large-green-button" name="submit" type="submit" value="Acheter"/>
	    					</form>    					
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
	</div>
</div><?php }} ?>