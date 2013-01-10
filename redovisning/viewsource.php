<?php
// -----------------------------------------------------
// Integrate source.php into site
// -----------------------------------------------------

// -----------------------------------------------------
//
// Create and print out the html-page
//
//require_once('common.php');
$charset 	= "utf-8";
$language	= "sv";
$title		= "danf12";

// Include code from source.php to display sourcecode-viewer
$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
include("source.php");
$pageStyle=$sourceStyle;

$html = <<< EOD
<!doctype HTML>
<html lang="sv">  
	<head>
		<meta charset="{$charset}">
		<title>{$title}</title>
		<link rel="stylesheet" type=text/css href="css/main.css">
		
		<!-- Each page can set $pageStyle to create additional style -->
	<?php if(isset($pageStyle)) : ?>
		<style type="text/css">
			<?php echo $pageStyle; ?>
		</style>
	<?php endif; ?>  
	
	</head>
	<body>

		<div id="content">{$sourceBody}</div>

	</body>
</html>
EOD;

echo $html;
?>