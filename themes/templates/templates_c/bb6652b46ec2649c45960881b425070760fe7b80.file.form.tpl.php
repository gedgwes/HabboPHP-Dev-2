<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 00:07:44
         compiled from "/Users/robinherzog/github/local/HabboPHP-Dev2/themes/templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203292802350df77c0d6d879-80530884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6652b46ec2649c45960881b425070760fe7b80' => 
    array (
      0 => '/Users/robinherzog/github/local/HabboPHP-Dev2/themes/templates/form.tpl',
      1 => 1343071173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203292802350df77c0d6d879-80530884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'formid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50df77c0d86285_59868704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50df77c0d86285_59868704')) {function content_50df77c0d86285_59868704($_smarty_tpl) {?>
<div id="container">
	<div id="content" style="position: relative" class="clearfix">
   				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 
			    
				<div class="habblet-container" id="okt" style="float:left; width: 770px;">		
										<div class="cbb clearfix blue ">
	

							<div style="padding-left:30px;padding-right:30px;padding-top:15px;padding-bottom:15px;">
							<div id="loader"><center><img src="images/load.gif" alt="" /><br />Chargement</center></div>
<iframe src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/admin/form/view.php?id=<?php echo $_smarty_tpl->tpl_vars['formid']->value;?>
" id="iframeform" width="695" scrolling="no" frameborder="0" style="border:0;opacity:0;display:none;" onload="resizer();"></iframe>
<br style="clear:both"/>
					</div>
</div>
		
				
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>



</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script type='text/javascript'>

    jQuery(function(){

        var iFrames = jQuery('#iframeform');
	
    	function iResize() {

    		for (var i = 0, j = iFrames.length; i < j; i++) {
    		  iFrames[i].style.height = iFrames[i].contentWindow.document.body.offsetHeight + 'px';}
    	    }
		function resizer(){
		if ($.browser.safari || $.browser.opera) { 

        	   iFrames.load(function(){
        	       setTimeout(iResize, 0);
               });

        	   for (var i = 0, j = iFrames.length; i < j; i++) {
        			var iSource = iFrames[i].src;
        			iFrames[i].src = '';
        			iFrames[i].src = iSource;
               }

        	} else {
        	   iFrames.load(function() {
        	       this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
        	   });
        	}
		}
        	resizer();
        	//setInterval(resizer,4000);
			
        });
        
        function resizer2(){
         var iFrames = jQuery('#iframeform');
		if ($.browser.safari || $.browser.opera) { 

        	   iFrames.load(function(){
        	       setTimeout(iResize, 0);
               });

        	   for (var i = 0, j = iFrames.length; i < j; i++) {
        			var iSource = iFrames[i].src;
        			iFrames[i].src = '';
        			iFrames[i].src = iSource;
               }

        	} else {
        	   iFrames.load(function() {
        	       this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
        	   });
        	}
		}
        
        setTimeout("jQuery('#loader').animate({opacity:0}).slideUp();jQuery('#iframeform').slideDown().animate({opacity:1});",2000);
		
</script>

<?php }} ?>