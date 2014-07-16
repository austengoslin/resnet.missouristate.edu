
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
    
<title>Resnet :: Tutorials :: Wireless :: Configuring Resnet 30 on Mac OS X (10.5) - Leopard</title>

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
            <h2>Configuring Resnet 30 on Mac OS X (10.5) - Leopard</h2>
            
            <ol class="indent">
            	<li>Go to the AirPort menu, and select <strong>Open Network Preferences</strong></li>
                <li>Click <strong>AirPort</strong> on the left, and click <strong>Advanced...</strong> at the bottom right</li>
                <li>Click the <strong>802.1X</strong> tab</li>
                <li>Click on the + (plus) button in the lower left-hand corner, select <strong>Add User Profile</strong>, and then type a name for the configuration (e.g., resnet 30).</li>
              <li>On the right, enter the following information:
                    <ul>
                    	<li>User Name: <strong>BearPass Login</strong></li>
                        <li>Password: <strong>Missouri State Password</strong></li>
                        <li>Wireless Network: <strong>resnet 30</strong></li>
                        <li>Authentication: <strong>PEAP</strong></li>
                        <li><em>(Other autentications methods may be checked, but PEAP is required.  Optionally, you can drag it to the top of the list.)</em></li>
                    </ul>
                </li>
                    
                    <img src="../images/wireless/wireless-resnet30-OSX-1.png" alt="wireless-resnet30-OSX-1" width="575" class="imgBorder">
                    Click <strong>OK</strong>
                </li>
                <li>Click <strong>Apply</strong>
                    <br /><br /><em><strong>You are now finished!</strong>  When in an area with Missouri State wireless coverage, select <strong>"resnet 30"</strong> from the Airport menu to connect.
              (If asked, press "Continue" to verify the certificate.)</em></li>	
            		 <img src="../images/wireless/client%20certificate-OSX.png" alt="Client Certificate OSX" width="575" class="imgBorder">       
            </ol> 
            
            <p class="answer">
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
