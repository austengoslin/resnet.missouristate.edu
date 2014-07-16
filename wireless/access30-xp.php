
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
    
<title>Resnet :: Tutorials :: Wireless :: Configuring Access 30 on Windows XP</title>

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
            <h2>Configuring Access 30 on Windows XP</h2>
            <p class="answer"><a href="../PDF/WirelessNetworks/Access30/ConfiguringAccess30onWindowsXP.pdf">Printer Friendly Version (PDF)</a></p>
            
            <ol class="indent">
            	<li>To start configuring your wireless, double-click the wireless icon in the system tray.</li>
              <img class="imgBorder" src="../images/wireless/wireless-xp-systray.png" alt="wireless-xp-systray" />
                <li>Alternatively, you can click the info bubble that appears when a wireless network is detected.</li> 
              <img class="imgBorder" src="../images/wireless/wireless-xp-systray2.png" alt="wireless-xp-systray2" />
              <li>In the "Wireless Network Connection" window, click on "Change advanced settings."</li>
              <img class="imgBorder" src="../images/wireless/wireless-xp-1.png" alt="wireless-xp-1" width="575" />
              <li>Select the "Wireless Networks" tab. Make sure that "Use Windows to configure my wireless network settings" is checked, then click the "Add" button under the Preferred Networks box.</li>
              <img class="imgBorder" src="../images/wireless/wireless-access20-xp-2.png" alt="wireless-xp-2" />
              <li>Under the "Association" tab, make sure you have the following values:
                    <ul class="normal"><li>Network Name (SSID): access 30</li>
                      <li>Network Authentication: WPA</li>
                      <li>Data Encryption: TKIP</li>
                    </ul>
              </li>
                    
                    <img class="imgBorder" src="../images/wireless/wireless-access30-xp-3.png" alt="wireless-xp-3" />
                <li>Select the "Authentication" tab.</li>
                <li>Check "Enable IEEE 802.1x authentication for this network", choose "Protected EAP (PEAP)" for the EAP type, and click the "Properties" button.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-access20-xp-4.png" alt="wireless-xp-4" />
                <li>Uncheck "Validate server certificate", choose "Secured password (EAP-MSCHAP v2)" for the Authentication Method, and click the "Configure" button</li>
                    <img class="imgBorder" src="../images/wireless/wireless-access20-xp-5.png" alt="wireless-xp-5" />
                <li>Uncheck "Automatically use my Windows logon name and password (and domain if any)" and click the "OK" button.</li> 
                    <img class="imgBorder" src="../images/wireless/wireless-access20-xp-6.png" alt="wireless-xp-6" />
                <li>The computer will then begin trying to connect to the "access 30" network. Click on the info bubble that appears in the system tray for you to enter your credentials.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-access20-xp-7.png" alt="wireless-xp-7" />
                <li>Enter your BearPass Login for the "User Name", your password, and SGF as the "Logon domain." Click "OK" and you should be connected to the "Access 20" network.</li> 
                    <img class="imgBorder" src="../images/wireless/wireless-access20-xp-8.png" alt="wireless-xp-8" />
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
