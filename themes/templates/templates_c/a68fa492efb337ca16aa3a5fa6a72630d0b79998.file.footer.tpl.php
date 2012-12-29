<?php /* Smarty version Smarty-3.1.8, created on 2012-12-15 19:54:56
         compiled from "/Users/robinherzog/github/local/HabboPHP-Dev-2/themes/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116925294550ccc7807bec85-79463585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68fa492efb337ca16aa3a5fa6a72630d0b79998' => 
    array (
      0 => '/Users/robinherzog/github/local/HabboPHP-Dev-2/themes/templates/footer.tpl',
      1 => 1354464124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116925294550ccc7807bec85-79463585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_dir' => 0,
    'lang' => 0,
    'url' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50ccc78082f701_15821249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ccc78082f701_15821249')) {function content_50ccc78082f701_15821249($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(($_smarty_tpl->tpl_vars['lang_dir']->value)."/".($_smarty_tpl->tpl_vars['lang']->value).".lang", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> 
<div id="column3" class="column">
		

						
					
				</div>
				
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

			     		
				<?php if ($_smarty_tpl->tpl_vars['url']->value=='home.php'||$_smarty_tpl->tpl_vars['url']->value=='vip.php'||$_smarty_tpl->tpl_vars['url']->value=='shop.php'||$_smarty_tpl->tpl_vars['url']->value=='community.php'){?>
				<div class="habblet-container "></div>
				<?php }else{ ?>
				<div class="habblet-container">		
	
						
					<div style="float:right"><?php if ($_smarty_tpl->tpl_vars['url']->value=='me.php'){?>&nbsp;&nbsp;<?php }?><?php echo $_smarty_tpl->tpl_vars['config']->value->ads1X0x600;?>
</div>
						
					
				</div><?php }?>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
		 

</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
<div class="habblet-container "><br /><?php echo $_smarty_tpl->tpl_vars['config']->value->ads728x90;?>
</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
    </div>
   
<div id="footer">
	<?php echo $_smarty_tpl->tpl_vars['config']->value->adsSlide;?>

	<?php echo $_smarty_tpl->tpl_vars['config']->value->adsPopup;?>

	<p class="footer-links"><a href="https://help.habbo.se" target="_new"><?php echo $_smarty_tpl->getConfigVariable('Help');?>
</a> | <a href="http://habbophp.com" title="HabboPHP" target="_new">HabboPHP</a> | <a href="https://help.habbo.se/home" target="_new">FAQ</a></p>
	<p class="copyright"><?php echo $_smarty_tpl->tpl_vars['config']->value->name;?>
 est un projet indépendant, à but non lucratif &copy; 2010-2012.<br>
                         Habbo est une marque déposée de Sulake Corporation. Tous droits réservés à leur propriétaire respectif(s).<br>
                         Nous ne sommes pas approuvé, affiliés, ou offertes par Sulake Corporation LTD.<br>
                         Powered by HabboPHP - Valentin & Robin.</p>
</div><!--end of footer-->

</div>

</div> 
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Roundeverything(); }</script>
        


</body>
</html><?php }} ?>