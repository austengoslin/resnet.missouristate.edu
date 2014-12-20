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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2196753-3', 'missouristate.edu');
  ga('send', 'pageview');

</script>
    
<title>Resnet :: Tutorials :: Printer Setup</title>
</head>
<body>
	<?php include_once("../includes/navBar_primary.inc.php"); ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_primary.inc.php"); ?>

			<div id = "leftColumn">
           		<!-- start content -->
    		<div id="tutorial"> 
                <h2>Connecting to Front Desk Printers</h2>
        		
                <p class="answer">
                This will guide you through the setup of the front desk printer in your residence hall. <br />
                	<strong>Jump To: </strong>
                  &nbsp;|&nbsp;<a href="./printerSetupWin7.php">Windows 7</a>
                  &nbsp;|&nbsp;<a href="./printerSetupWin8.php">Windows 8 and 8.1</a>
                  &nbsp;|&nbsp;<a href="./printerSetupUbuntu.php">Ubuntu</a>
                  &nbsp;|&nbsp;<a href="./printerSetupMacLegacy.php">Mac OS X 10.5 and 10.6</a> <br />
                  &nbsp;|&nbsp;<a href="./printerSetupMacModern.php">Mac OS X 10.7, 10.8, and 10.9</a>
                  &nbsp;|&nbsp;<a href="./printerSetupMacYosemite.php">Mac OS X 10.10 Yosemite</a> <br />
					
				<p class="answer">
				<strong>Note: At this time, Google's Chrome OS is incompatible with our printer system.  
				You will need to print your documents from one of the computer labs on campus. We apologize for the inconvenience. </strong>
				</p>

            <h3><a href="#UBUNTUPRINT" name="UBUNTUPRINT">Setting up the front desk printer on Ubuntu</a></h3>
            	<p class="answer">
                    This guide will show you how to setup the front desk printer of your Residence Hall from room on an Ubuntu machine.  
                    In this tutorial we are using Ubuntu 8.04 ("Hardy Heron").  
                    These configuration instructions also work on Ubuntu 7.10 ("Gutsy Gibbon"), Ubuntu 7.04 ("Feisty Fawn"), and theoretically should work earlier versions, but are untested.<br />
                </p>
                <ol class="indent">
                    <li>Go to <strong>System &gt; Administration &gt; Printing</strong>, then click on <strong>New Printer</strong> in the upper right.</li>
                        <img class="imgBorder" src="../images/printerSetup-Ubuntu-01.png" alt="printerSetup Ubuntu 1">
                    <li>
                        Select <strong>Windows Printer via SAMBA.</strong>  
                        Enter the following information then click <strong>Verify</strong>:
                        <ul><li>SMB: <strong>SGF/resprint/[printer name]</strong></li>
                            <li>Authentication Required: <strong>Checked</strong></li>
                            <li>Username: <strong>Missouri State BearPass Login</strong></li>
                            <li>Password: <strong>Missouri State Password</strong></li>
                        </ul>
                  </li>
                       <table>
                        	<tr>
                       			<th>Residence Hall</th><th>Printer Name</th>
                        	</tr>
                        	<tr>
                            	<td>Blair-Shannon</td><td>BLAIRLPR</td>
                            </tr>
                            <tr>
                            	<td>Freudenberger</td><td>FREDDYLPR</td>
                            </tr>
                                                        <tr>
                            	<td>Hammons</td><td>HAMMONSLPR</td>
                            </tr>
						   <tr>
                               	<td>Hutchens</td><td>HUTCHENSLPR</td>
                           	</tr>
                            <tr>
                            	<td>Kentwood</td><td>KENTWOODLPR</td>
                            </tr>                         
							<tr>
                            	<td>Monroe</td><td>MONROELPR</td>
                            </tr>
                            <tr>
                            	<td>Scholars</td><td>SCHOLARSLPR</td>
                            </tr>
                            <tr>
                            	<td>Sunvilla</td><td>SUNVILLALPR</td>
                            </tr>
                            <tr>
                            	<td>Wells</td><td>WELLSLPR</td>
                            </tr>
                            <tr>
                            	<td>Woods</td><td>WOODSLPR</td>
                            </tr>
                       </table>
                  <li><strong>CAUTION</strong>: In the image below, the Residence Hall specific information is replaced with asterisks(*) -- 
                       <em>Make sure to use the correct values for your Residence Hall</em>. </li>
                        <img src="../images/printerSetup-Ubuntu-02.png" alt="printerSetup Ubuntu 2" width="575" class="imgBorder">
                    <li>
                        A window stating that your information was verified should appear.
                        Click <strong>OK</strong>, then click <strong>Forward</strong>.</li>
        <img class="imgBorder" src="../images/printerSetup-Ubuntu-03.png" alt="printerSetup Ubuntu 3">
                    <li>
                        Select <strong>HP</strong> from list, then click <strong>Forward</strong>.</li>
                <img src="../images/printerSetup-Ubuntu-04.png" alt="printerSetup Ubuntu 4" width="575" class="imgBorder">
                    <li>
                        Select <strong>LaserJet 4350</strong>, and <strong>HP LaserJet 4350 Foomatic/hpijs [en]</strong>, then click <strong>Forward</strong>.</li>
                    <img src="../images/printerSetup-Ubuntu-05.png" alt="printerSetup Ubuntu 5" width="575" class="imgBorder">
                    <li>
                        Name the printer if desired, then click <strong>Apply</strong>.</li>
                        <img src="../images/printerSetup-Ubuntu-06.png" alt="printerSetup Ubuntu 6" width="575" class="imgBorder">
                    <li>
                        You have successfully configured your computer to print to the front desk!  
                        <strong>NOTE</strong>: Whenever you change your Missouri State password, you will have to return to the printer menu and update your authentication information.
                    </li>
                </ol>                
               <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to 
                	<a href="../contact.php" title="contact us">contact</a> the ResNet Offices (417 836-6100) for assistance.
           	  </p>
                <!-- end content -->
            </div>	
     	</div>
 		<div id = "rightColumn">
				<?php include_once("../includes/sidePanel_tutorials.inc.php") ?>
			</div>
	<?php include_once("../includes/footer.inc.php") ?>
    </div>
</body>
</html>