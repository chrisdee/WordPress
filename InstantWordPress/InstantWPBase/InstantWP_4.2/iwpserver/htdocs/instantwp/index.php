<?php

// load the instantwp functions
include 'functions.php';
include $current_folder.'\\..\\wordpress\\wp-includes\\version.php';
$config = load_config($base_dir);
$install_name = $config['install_name'];
$install_dir = $config['install_dir'];
$version = $config['version'];
$debugger = $config['debugger'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>InstantWP - Your Local WordPress Installation</title>
<link href="instantwp.css" rel="stylesheet" type="text/css" />
<SCRIPT LANGUAGE="JavaScript">
<!--
function copyit(theField, theName) {
	var fld = document.getElementById(theField);
	var fldValue = fld.value;
	// copy to clipboard 
	window.clipboardData.setData('Text' , fldValue );
	alert('The URL for this WordPress Installation is now in the clipboard to paste into the address box of a browser.');
}

function debuggeralert(){
	alert('Please restart InstantWP for the debugger changes to take effect.')
}
// End -->
</script>
</head>
<body>

<div id="container">

            <div id="container-header">
                <div id="container-name"><img src="images/logo.gif" alt="logo" border="0" /></div>
            </div>
            
            <div id="container-content">
            	<table>
            	<tr>
            		<td valign="top" colspan="2" align="center">
            		            	<b>Local Wordpress URL: </b>
            		            	<input class="url_textbox" id="<?= $install_dir ?>" name="<?= $install_dir ?>" type="text" size='30' 
            		            	value='http://<?= $base_url ?>/<?= $install_dir ?>/'>&nbsp;
            				<input class="url_button" onclick="copyit('<?= $install_dir ?>', '<?= $install_dir ?>')" 
            				type="button" value="Copy WordPress URL to Clipboard" name="copy_button"><hr/>
            		<td>
            	</tr>
            	<tr>
            		<td valign="top">
            			<a target="_blank" href= "http://<?= $base_url ?>/<?= $install_dir ?>">
            				<img src="images/frontpage.jpg" alt="WordPress Frontpage" border="0" />
            				
            			</a>
            			
            			<a href="http://<?= $base_url ?>/instantwp/externals/explore_plugins.php?wp=<?= $install_dir ?>">
					<img src="images/plugins.jpg" alt="WordPress Plugins Folder" border="0" />
				</a>
            			
            			<a target="_blank" href="http://<?= $base_url ?>/phpmyadmin">
            				<img src="images/mysql.jpg" alt="MySQL Admin - Login as root/blank password" border="0" />
            			</a>
				

            		</td>
            		<td valign="top">

				<a target="_blank" href= "http://<?= $base_url ?>/<?= $install_dir ?>/wp-login.php">
					<img src="images/admin.jpg" alt="WordPress Admin - Login as admin/password" border="0" />
				</a>
				
				<a href="http://<?= $base_url ?>/instantwp/externals/explore_themes.php?wp=<?= $install_dir ?>">
					<img src="images/themes.jpg" alt="WordPress Themes Folder" border="0" />
				</a>
				
				<a target="_blank" href="http://www.instantwp.com/documentation/?v=<?=str_replace(" ", "", $version)  ?> ">
					<img src="images/docs.jpg" alt="Instant WordPress Help" border="0" />
				</a>
            		</td>
            	</tr>
            	</table>
		<div id="content">
		</div> <!-- CONTENT END -->
	   </div>
	<div id="container-footer">
                 <div id="footer">
                 	<?=$install_name ?> running <?=$version  ?> with WordPress <?= $wp_version ?> /
                 	<?= $config['apache_ver'] ?> / <?= $config['php_ver'] ?> / <?= $config['mysql_ver'] ?>
			<hr>
			<em>Software licenses are provided in the respective software directories. 
			All rights reserved. Portions copyright to Timo Haberkern. All trademarks and images are copyright of their respective owners. 
			InstantWP is not associated with Automattic or WordPress.com.</em>
			<br/>InstantWP © 2011 Corvideon - THIS SOFTWARE IS PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND.
		 </div>
         </div>
</div> <!-- END container -->
</body>
</html>