
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
    
<title>Resnet :: Tutorials :: Wireless :: Configuring Access 30 on Windows Mobile 6</title>

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
            <h2>Configuring Access 30 on Windows Mobile 6</h2>
            In this tutorial we are using Windows Mobile 6; however, these instructions should also work with Windows Mobile 5.
            </p>
            <ol>
                <li>Navigate to "Start" &raquo; "Settings" &raquo; "Connections" &raquo; "WiFi".</li>
                <li>Select "access 30" from the list.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-access30-mobile6-1.png" alt="wireless-mobile6-1">
                <li>Set "Connects to:" to <strong>The Internet</strong>. </li>
                    <img class="imgBorder" src="../images/wireless/wireless-access30-mobile6-2.png" alt="wireless-mobile6-2">
                    <li>On the "Network Key" tab, use the folloing settings:
                    	<ul>
                        	<li>Authentication: <strong>WPA</strong></li>
                        	<li>Data Encryption: <strong>TKIP</strong></li>
                        	<li>Checkbox: <strong>The key is automatically provided</strong></li>
                    	</ul>
                    <br />
                   </li>
                    <img class="imgBorder" src="../images/wireless/wireless-access30-mobile6-3.png" alt="wireless-mobile6-3">
                    <li> On the "802.1x" tab, ensure that the <strong>Use IEEE 802.1x network access control</strong> is checked and set "EAP type:" to <strong>PEAP</strong>.
                   </li> <img class="imgBorder" src="../images/wireless/wireless-access30-mobile6-4.png" alt="wireless-mobile6-4">
                    <li>Once complete click "Finish" in the bottom right corner of the screen. Select "access 30" and click "Connect".  
                    During the connection process you will be shown the "User Logon" screen, prompting for a User name and Password.  
                    Enter your BearPass Login and Password as follows:
                    
                    <ul>
                    	<li>User Name: <strong>BearPass Login</strong></li>
                      	<li>Password: <strong>Missouri State Password</strong></li>
                      	<li>Domain: <strong>SGF</strong></li>
                    </ul>
                 </li>  
                    
                    <img class="imgBorder" src="../images/wireless/wireless-access30-mobile6-5.png" alt="wireless-mobile6-5">
                <li>After a few seconds your device will connect to "access 30".</li>
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
