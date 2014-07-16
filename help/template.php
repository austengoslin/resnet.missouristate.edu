<?php include_once("../config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="../css/reset.css" type="text/css" />
<link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />
<meta name="description" content="This is a template" />

    
<title>Resnet :: Tutorials</title>
</head>
<body>
	<?php include_once("../includes/headerBar.inc.php"); ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header.inc.php"); ?>
	
			<div id = "leftColumn">
           		{{template}}     			       
           	</div>	

			<div id = "rightColumn">
				<?php include_once("../includes/sidePanel_tutorials.inc.php"); ?>
			</div>
	<?php include_once("../includes/footer.inc.php"); ?>
    </div>



</body>
</html>