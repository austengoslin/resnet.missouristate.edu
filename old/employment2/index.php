<?php

/**********************************************************************************/
// Change this to false to close the application period
$APPLICATIONS_ARE_OPEN = true;
/**********************************************************************************/



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="../css/reset.css" type="text/css" />
<link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="../css/print.css" type="text/css" media="print" /><title>ResNet :: Job Opportunities</title>
</head>
<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
?>
<body>

	<?php include_once($path . "/includes/navBar_primary.inc.php"); ?>

	<div id = "wrapper">
	<?php include_once($path . "/includes/header_primary.inc.php"); ?>
		<div id = "content">
			<!-- Content -->
		<div id="empCopy">We <?php if ($APPLICATIONS_ARE_OPEN) { ?>are currently<?php } else { ?>have stopped<?php } ?> accepting applications for ResNet Developers, Designers, and Consultants for <?php echo date("Y") + 1; ?>.</div>
        <div id = "fullWidth">
			<div id="empBoxWrapper">

            	<div id="resDev" class="empBox">
            		<h3>ResNet Developers</h3>
            		<p>ResNet Developers are responsible for handling programming assignments as needed by the Department of
                    Residence Life, Housing and Dining Services and for developing inhouse applications for ResCons.
					Some previous development experience is required.</p>
            	</div>

				<div id="resDes" class="empBox">
            		<h3>ResNet Designer</h3>
            		<p>The ResNet Designer is responsible for the design of promotional web and print materials for use by ResNet, and as needed by the Department of
                    Residence Life, Housing and Dining Services.
					A digital portfolio at the time of application is requested.</p>
            	</div>

				<div id="resCon" class="empBox">
					<h3>ResNet Consultants</h3>
            		<p>The ResNet Computer Help Desk employs several students to assist in the support of the Department of
                    Residence Life, Housing and Dining Services and the students living on campus in the residence halls.
					Previous experience with computer issues is recommended, but not required.</p>
            	</div>

                <div class="empBoxFooter"><strong><?php if ($APPLICATIONS_ARE_OPEN) { ?><a href="/employment/application.php">Click here to apply.</a><?php } else { ?>The application period for this year has passed.  Please consider applying next year.<?php } ?></strong></div>
			</div>

		</div>

          </div>

          <!-- End Content -->
	<?php include_once("../includes/footer.inc.php") ?>
    </div>



</body>
</html>