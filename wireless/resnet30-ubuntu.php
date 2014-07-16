
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
    
<title>Resnet :: Tutorials :: Wireless :: Configuring Resnet 30 on Ubuntu</title>

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
            <h2>Configuring Resnet 30 on Ubuntu</h2>
            
            <p class="answer">
            In this tutorial we are using Ubuntu 7.10 ("Gutsy Gibbon").  
            These configuration instructions also work on Ubuntu 7.04 ("Feisty Fawn") and theoretically should work earlier versions, but are untested.  
            We cannot give you a complete overview of specific wireless hardware that is supported under Linux; however, a survey on 
            <a href="http://users.linpro.no/janl/hardware/wifi.html" title="Linux and WiFi">Linux and WiFi</a> is available.  
            As always, <a href="http://www.google.com" title="Google">Google</a> is your friend.<br />
            If you don't know what built-in wireless network card you are using, please open the Device Manager (by selecting System &gt; Administration &gt; Device Manager).
            </p>
            <ol class="indent">
            	<li>
                    To access the wireless network, you will need to install a few additional files.  
                    The needed packages are available through the Synaptic Package Manager or through apt-get in Terminal.  
                    In this example, we will use the Add/Remove Applications menu.  
                    <br />
					<br />
                   	From the "Applications" menu, select "Add/Remove..."</li>
                    <img class="imgBorder" src="../images/wireless/wireless-ubuntu-01.png" alt="wireless-ubuntu-01"></li><li>
              <li>Under the "Internet" section of the Add/Remove Applications menu, select "Network Manager" and click "Apply".  
                    (An option for KDE users might be installing <span class="italic">knetworkmanager</span> instead.)  
                    Once Network Manager has been installed, <strong>reboot</strong> the computer. </li> 
                    <img src="../images/wireless/wireless-ubuntu-02.png" alt="wireless-ubuntu-02" width="575" class="imgBorder">
                    For Ubuntu, you can execute the command:
              <div class="shadowBox">
                    	<em>sudo apt-get install network-manager-gnome</em>
                    </div>

              <br />
                    For Kubuntu (will install knetworkmanager):
              <br />
<div class="shadowBox">
                    	<em>sudo apt-get install network-manager-kde</em>
                    </div>

                </li>
                <li>Right-click on the Network Manager applet and enable both "Networking" and "Wireless".  
                    As soon as you have enabled wireless, the Network Manager will scan for available networks.  
                    You can see these by simply clicking on the applet. </li> 
                    <img class="imgBorder" src="../images/wireless/wireless-ubuntu-03.png" alt="wireless-ubuntu-03">
                <li>Choose "Connect to Other Wireless Network..." from the Network Manager drop down menu.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-ubuntu-04.png" alt="wireless-ubuntu-04">
                <li>Enter "resnet 30" into the Network Name field and select "WPA Enterprise" from the Wireless Security field.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-resnet30-ubuntu-01.png" alt="wireless-resnet30-ubuntu-01">
                <li>In the dialog box that follows, enter the following values:
                    <ul>
                    	<li>Network Name: <strong>resnet 30</strong></li>
                      	<li>Wireless Security: <strong>WPA Enterprise</strong></li>
                      	<li>EAP Method: <strong>PEAP</strong></li>
                      	<li>Key Type: <strong>TKIP</strong></li>
                      	<li>Phase2 Type (if present): <strong>MSCHAPV2</strong></li>
                      	<li>Identity: <strong>BearPass Login</strong></li>
                      	<li>Password: <strong>Missouri State Password</strong></li>
                    </ul>
                    
                <li>Once the information is entered, click the "Connect" button.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-resnet30-ubuntu-02.png" alt="wireless-resnet30-ubuntu-02">
                <li>If you are asked to store your login credentials in Keyring, enter the password you would like associated with the configuration.  
                    Upon connecting to the access point in the future, you will be asked for the password provided in this step.</li>  		
                    <img class="imgBorder" src="../images/wireless/wireless-ubuntu-06.png" alt="wireless-ubuntu-06">
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
