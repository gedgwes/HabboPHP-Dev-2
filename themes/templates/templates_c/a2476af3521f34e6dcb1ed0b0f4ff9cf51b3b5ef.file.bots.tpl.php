<?php /* Smarty version Smarty-3.1.8, created on 2012-12-02 17:20:13
         compiled from "/Users/robinherzog/github/local/HabboPHP-Dev-2/themes/templates/bots.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155653005050bb7fbdb728b5-45715938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2476af3521f34e6dcb1ed0b0f4ff9cf51b3b5ef' => 
    array (
      0 => '/Users/robinherzog/github/local/HabboPHP-Dev-2/themes/templates/bots.tpl',
      1 => 1354446209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155653005050bb7fbdb728b5-45715938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'roomsEmpty' => 0,
    'display_error' => 0,
    'error_name_bot' => 0,
    'error_motto_bot' => 0,
    'error_sentence_bot' => 0,
    'error_roomid_bot' => 0,
    'error_jetons' => 0,
    'rooms' => 0,
    'i' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bb7fbdc6dc48_08589068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bb7fbdc6dc48_08589068')) {function content_50bb7fbdc6dc48_08589068($_smarty_tpl) {?><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="/web-gallery/js/vip.js"></script>
<script>
	jQuery.noConflict();
</script>
<div id="container">
	<div id="content" style="position: relative" class="clear fix">
    <div>
	
	<div class="habblet-container " id="verif" style="opacity:0;display:none;float:left; width: 770px;">
        <div class="cbb clearfix green">
            <h2 class="title"><?php echo $_smarty_tpl->getConfigVariable('ConfirmBuy');?>
</h2>
            <div class="box-content">
            	<span style="font-size:14px;"><?php echo $_smarty_tpl->getConfigVariable('ConfirmBuyCredits');?>
 <span id="pricee"></span></span> <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>

            	<a href="javascript:void(0);" class="new-button red-button" onclick="jQuery('#verif').animate({opacity:0}).slideUp();"><b>Annuler</b><i></i></a>
            	<a href="javascript:void(0);" id="confirmbb" class="new-button green-button"><b>Je confirme mon achat !</b><i></i></a>
            </div>
        </div>
    </div>
	
    <div class="habblet-container " style="float:left; width: 770px;">
        <div class="cbb clearfix settings">
            <h2 class="title"><?php echo $_smarty_tpl->getConfigVariable('BadgesShop');?>
</h2>
            <div class="box-content">
            <div id="valideok" style="padding:10px;font-size:18px;display:none;opacity:0;background:#60b200;color:white;text-shadow:0 1px 0 #407700;-moz-border-radius:10px;-webkit-border-radius:10px;display:none;opacity:0;border-radius:10px;margin:20px;"><?php echo $_smarty_tpl->getConfigVariable('Success_new_badge');?>
</div>
            
            <div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;display:none;opacity:0;" class="error_existe"><?php echo $_smarty_tpl->getConfigVariable('YouHaveBadge');?>
</div>
            
            <div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;display:none;opacity:0;" class="not_enought_money"><?php echo $_smarty_tpl->getConfigVariable('YouHaveNoEnough');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>
</div>
           <?php if (isset($_smarty_tpl->tpl_vars['roomsEmpty']->value)){?>
           	<div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;" class="not_enought_money"><?php echo $_smarty_tpl->getConfigVariable('YouHaveNoRooms');?>
 </div>
           	<?php }else{ ?>
           	<?php if (isset($_smarty_tpl->tpl_vars['display_error']->value)){?>
           	 <div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;" class="not_enought_money">
           	<?php if (isset($_smarty_tpl->tpl_vars['error_name_bot']->value)){?><?php echo $_smarty_tpl->tpl_vars['error_name_bot']->value;?>
<br/><?php }?>
           	<?php if (isset($_smarty_tpl->tpl_vars['error_motto_bot']->value)){?><?php echo $_smarty_tpl->tpl_vars['error_motto_bot']->value;?>
<br/><?php }?>
           	<?php if (isset($_smarty_tpl->tpl_vars['error_sentence_bot']->value)){?><?php echo $_smarty_tpl->tpl_vars['error_sentence_bot']->value;?>
<br/><?php }?>
           	<?php if (isset($_smarty_tpl->tpl_vars['error_roomid_bot']->value)){?><?php echo $_smarty_tpl->tpl_vars['error_roomid_bot']->value;?>
<br/><?php }?>
           	<?php if (isset($_smarty_tpl->tpl_vars['error_jetons']->value)){?><?php echo $_smarty_tpl->tpl_vars['error_jetons']->value;?>
<?php }?>
        
           	 </div>
           	    	<?php }?>
           	<h3>Achète un bots</h3>

<form action="bots.php" method="post" id="botsShop">

<div style="float:left">
<p>
<label class="alignLabel">Nom du bot :</label>
<input   type="text" name="name_bot" size="32" value="<?php if (isset($_POST['name_bot'])){?><?php echo $_POST['name_bot'];?>
<?php }?>" maxlength="32" id="avatar motto" />
</p>
<p>
<label class="alignLabel">Mission du bot :</label>
<input   type="text" name="motto_bot" value="<?php if (isset($_POST['motto_bot'])){?><?php echo $_POST['motto_bot'];?>
<?php }?>" size="32" maxlength="32"  id="" />
</p>
<p>
<label class="alignLabel">Phrase du bot :</label>
<input   type="text" name="sentence_bot"  value="<?php if (isset($_POST['sentence_bot'])){?><?php echo $_POST['sentence_bot'];?>
<?php }?>" size="32" maxlength="32"  id="" />
</p>
<p>
<label class="alignLabel">Appart du bot :</label>
<select name="roomid_bot">
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rooms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['caption'];?>
</option>
<?php } ?>
</select>
</p>

<input type="hidden" name="save" value="1"/>

<div class="settings-buttons">
<a href="#" class="new-button" style="display: none" onclick="document.forms['botsShop'].submit();" id="profileForm-submit"><b>Acheter</b><i></i></a>
<noscript><input type="submit" value="Enregistrer" name="save" class="submit" /></noscript>
</div>
</form>
<script type="text/javascript">
$("profileForm-submit").show();
</script>

</div>
<div style="float:right">
	 <td class='tablerow2' align='center'><img src="http://www.habbo.fr/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['user']->value->look;?>
&action=std&gesture=sml&direction=3&head_direction=3&size=b&img_format=gif"></td>
</div>
           <?php }?>          
		</div>
</div>
</div>
</div>
</div><?php }} ?>