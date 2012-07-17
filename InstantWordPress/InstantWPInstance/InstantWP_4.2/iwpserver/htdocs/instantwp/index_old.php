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
		<div id="content">
		<td align="right">
			<img src="images/heart.png" align="absmiddle">&nbsp;&nbsp;<b>Instant WordPress Control Panel</b> <hr/>
			<b>Local Wordpress URL: </b><input class="url_textbox" id="<?= $install_dir ?>" name="<?= $install_dir ?>" type="text" size='30' value='http://<?= $base_url ?>/<?= $install_dir ?>/'>&nbsp;
			<input class="url_button" onclick="copyit('<?= $install_dir ?>', '<?= $install_dir ?>')" type="button" value="Copy WordPress URL to Clipboard" name="copy_button">
			<table  border="0" cellpadding="3" cellspacing="3" id="installData" width="600">
			<tr>
				<th>
				<img src="images/door_in.png" align="absmiddle">&nbsp;&nbsp;Navigation
				</th>
			</tr>
				<td class="install_data">
				<a target="_blank" href= "http://<?= $base_url ?>/<?= $install_dir ?>"><img src="images/door_in.png" border="0" align="absmiddle">&nbsp;WordPress Frontpage</a> 
				<br/>
				<a target="_blank" href= "http://<?= $base_url ?>/<?= $install_dir ?>/wp-login.php"><img src="images/cog.png" border="0" align="absmiddle">&nbsp;WordPress Admin</a> - The username is 'admin' and the password is 'password'
				<br/>
				<a href="http://<?= $base_url ?>/instantwp/externals/explore_plugins.php?wp=<?= $install_dir ?>"><img src="images/folder_explore.png" border="0" align="absmiddle">&nbsp;Explore WordPress Plugins Folder</a>
				<br/>
				<a href="http://<?= $base_url ?>/instantwp/externals/explore_themes.php?wp=<?= $install_dir ?>"><img src="images/folder_explore.png" border="0" align="absmiddle">&nbsp;Explore WordPress Themes Folder</a><br/>
				<a href="javascript:this.location.reload();"><img src="images/arrow_redo.png" border="0" align="absmiddle">&nbsp;Refresh InstantWP Control Panel</a><br/>				
				<!-- phpmyadmin link -->
				<a target="_blank" href="http://<?= $base_url ?>/phpmyadmin"><img src="images/database_gear.png" border="0" align="absmiddle">&nbsp;MySQL Database Administration</a><br/
				<!-- PHP information link -->
				<a target="_blank" href="http://<?= $base_url ?>/instantwp/phpinfo.php"><img src="images/information.png" border="0" align="absmiddle">&nbsp;PHP Information</a><br/>
				</td>
			</tr>
			</table>
			<br>
			<table  border="0" cellpadding="3" cellspacing="3" id="installData" width="600">
			<tr>
				<th><img src="images/help.png" align="absmiddle">&nbsp;&nbsp;Documentation</th>
				<th><img src="images/information.png" align="absmiddle">&nbsp;&nbsp;Software Versions</th>
			</tr>
			<tr>
				<td class="help_data" valign="top">
						<img src="images/smallcheck.gif">&nbsp;<a href="http://<?= $base_url ?>/instantwp/docs/InstantWP_4.0_Documentation.pdf" target="_blank">InstantWP Documentation (PDF)</a><br/>
						<img src="images/smallcheck.gif">&nbsp;<a href="http://codex.wordpress.org/Main_Page" target="_blank">WordPress Documentation</a><br/>
						<img src="images/smallcheck.gif">&nbsp;<a href="http://www.php.net/manual/en/" target="_blank">PHP Reference Manual</a><br/>
						<img src="images/smallcheck.gif">&nbsp;<a href="http://dev.mysql.com/doc/refman/5.0/en/index.html" target="_blank">MySQL Reference Manual</a><br/>
						<img src="images/smallcheck.gif">&nbsp;<a href="http://httpd.apache.org/docs/1.3/" target="_blank">Apache Documentation</a><br/>
						<img src="images/smallcheck.gif">&nbsp;<a href="http://www.w3schools.com/tags/default.asp" target="_blank">HTML Reference</a><br/>
						<img src="images/smallcheck.gif">&nbsp;<a href="http://www.w3schools.com/css/css_reference.asp" target="_blank">CSS Reference</a><br/>
						
				</td>
				
				
				<td class="product_data" valign="top">
					<img src="images/smallbullet.gif">&nbsp;<?=$install_name ?> <br/>
					<img src="images/smallbullet.gif">&nbsp;<?=$version  ?><br/>
					<img src="images/smallbullet.gif">&nbsp;WordPress <?= $wp_version ?><br/>
					<img src="images/smallbullet.gif">&nbsp;<?= $config['apache_ver'] ?><br/>
					<img src="images/smallbullet.gif">&nbsp;<?= $config['php_ver'] ?><br/>
					<img src="images/smallbullet.gif">&nbsp;<?= $config['mysql_ver'] ?>

				</td>
				
			</tr>
			</table>
	
		</div> <!-- CONTENT END -->
	 </div>
	 <div id="container-footer">
                 <div id="footer">
			<hr>
			<em>Software licenses are provided in the respective software directories. 
			All rights reserved. Portions copyright to Timo Haberkern. All trademarks and images are copyright of their respective owners. 
			InstantWP is not associated with Automattic or WordPress.com. Icons by <a href="http://www.famfamfam.com/" target="_blank">FamFamFam</a></em>
			<br/>InstantWP © 2010 Corvideon - THIS SOFTWARE IS PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND.
		 </div>
         </div>
</div> <!-- END container -->
</body>
</html>