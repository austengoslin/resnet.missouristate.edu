
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
    
<title>Resnet :: Tutorials :: Wireless :: Configuring Access 30 on Intel PROSet</title>

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


	<?php include_once("../includes/navBar_primary.inc.php") ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_primary.inc.php") ?>

			<div id = "leftColumn">
           		
    		<div id="tutorial"> 
            <!-- start content -->		
            <h2>Configuring Access 30 on Intel PROSet</h2>
            
            <ol>
            	<li>To start configuring your wireless, double-click the Intel PROSet/Wireless icon in the system tray.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-xp-systray-intel.png" alt="wireless-xp-systray-intel">
                <li>Click the "Profiles" button.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-networks-intel.png" alt="wireless-networks-intel">
                <li>Click the "Add" button.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-access20-intel-2.png" alt="wireless-access30-intel-2">
                <li>Set both the "Profile Name" and "Wireless Network Name (SSID)" to access 30.  
                    Make sure that radio button for "Network (infrastructure)" is selected and then click "Next".</li>
                    <img class="imgBorder" src="../images/wireless/wireless-access30-intel-3.png" alt="wireless-access30-intel-3">
              <li>Select the radio button for "Enterprise Security" and enter the following values:  
              	<ul><li>Network Authentication: WPA - Enterprise</li>
                  <li>Data Encryption: TKIP</li>
                  <li>Authentication Type: PEAP</li>
                  <li>Authentication Protocol: MS-CHAP-V2</li>
                  <li>User Name: BearPass Login</li>
                  <li>Domain: SGF</li>
                  <li>Password: Your Password</li>
                  <li>Roaming Identity: SGF\BearPass Login</li>
              	</ul>
              </li>
              <img class="imgBorder" src="../images/wireless/wireless-access30-intel-4.png" alt="wireless-access30-intel-4">
                <li>Uncheck "Validate server certificate" and then click "OK".</li>
                    <img class="imgBorder" src="../images/wireless/wireless-access30-intel-5.png" alt="wireless-access30-intel-5">
                <li>Once the profile is added, click on the access 30 profile and choose "Connect".</li>
                    <img class="imgBorder" src="../images/wireless/wireless-access30-intel-6.png" alt="wireless-access30-intel-6">
                <li>The Intel PROSet/Wireless software now has all the information needed to connect to the access 30 wireless network.  
                    Since you have provided your BearPass Login and password in the profile configuration, your computer should automatically 
                    connect when in range of the Missouri State wireless access points.  
                    <br /><br />

                    (<em>If you computer does not connect immediately after the initial setup, you may need to select "Disconnect" and then choose "Connect" again.</em>)
                    <img class="imgBorder" src="../images/wireless/wireless-access30-intel-7.png" alt="wireless-access30-intel-7">
                    <br />
                    <strong>Important Note:</strong>  Whenever you update your Missouri State password, you must update your Intel 
                    profile with this information, otherwise you will no longer be able to connect.
                </li>
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
