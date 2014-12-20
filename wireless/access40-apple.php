
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="../css/reset.css" type="text/css" />
<link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />
<script type="text/javascript" src="../js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="../js/slickBox.js"></script>
    
<title>Resnet :: Tutorials :: Wireless :: Setting up wireless</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2196753-3', 'missouristate.edu');
  ga('send', 'pageview');

</script>
</head>
<body>


	<?php include_once("../includes/navBar_secondary.inc.php") ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_secondary.inc.php") ?>

			<div id = "leftColumn">
           		
    		<div id="tutorial"> 
<!-- start content -->		
<h1>Configuring Access 40 on Mac OS X (10.4) - Tiger</h1>

<ol class="spacy"><li>
		First select <strong>Open Internet Connect...</strong> from the wireless icon in the menu bar (or from the Applications folder).
		<img class="imgBorder" src="../images/wireless/wireless-osx-1.png" alt="wireless-osx-1"></li>
	<li>
		From the file menu select <strong>New 802.1X Connection...</strong>
		<img class="imgBorder" src="../images/wireless/wireless-osx-2.png" alt="wireless-osx-2"></li>
	<li>
		From the Configuration selection box choose <strong>Edit Configurations...</strong>
		<img class="imgBorder" src="../images/wireless/wireless-osx-3.png" alt="wireless-osx-3"></li>
	<li>
		Next, fill out the Description, User Name (BearPass Login), Password, and Wireless Network fields as shown below.  
		<ul class="normal"><li>Description: <strong>access 40</strong></li>
		  <li>User Name: <strong>BearPass Login</strong></li>
		  <li>Password: <strong>Missouri State Password</strong></li>
		  <li>Wireless Network: <strong>access 40</strong></li>
		  <li>Authentication: <strong>PEAP</strong></li>
		</ul>
		(<em>You can have other authentication methods checked, but PEAP is required.</em>)  
		<img class="imgBorder" src="../images/wireless/wireless-access40-osx-4.png" alt="wireless-access40-osx-4"></li>
	<li>
		Press <strong>Connect</strong> to connect to the wireless network.
		<img class="imgBorder" src="../images/wireless/wireless-access40-osx-5.png" alt="wireless-access40-osx-5"></li>
	<li>
		Press <strong>Continue</strong> when asked to verify the certificate.
		<img class="imgBorder" src="../images/wireless/wireless-access20-osx-6.png" alt="wireless-access40-osx-6"></li>	
</ol> <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to 
                	<a href="../contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100) 
                	or the open access computer labs (417 836-4519) for assistance.
           	  </p>

            
            
            <!-- end content -->
                

            </div>	
     	</div>
 		<div id = "rightColumn">
				<?php include_once("../includes/sidePanel_useful.inc.php") ?>
			</div>
	<?php include_once("../includes/footer.inc.php") ?>
    </div>



</body>
</html>
