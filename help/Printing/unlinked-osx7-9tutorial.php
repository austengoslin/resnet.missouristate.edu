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

			<div id = "Main">
           		<!-- start content -->
    		<div id="tutorial"> 
                <h2>Connecting to Front Desk Printers</h2>
        		
                <p class="answer">
                This will guide you through the setup of the front desk printer in your residence hall. <br />
                	<strong>Jump To: </strong>
                  &nbsp;|&nbsp;<a href="./printerSetupWin7.php">Windows 7</a>
                  &nbsp;|&nbsp;<a href="./printerSetupWin8.php">Windows 8 and 8.1</a>
                  &nbsp;|&nbsp;<a href="./printerSetupUbuntu.php">Ubuntu</a>
                  &nbsp;|&nbsp;<a href="/Help/Printing/MacLegacy.php">Mac OS X 10.5 and 10.6</a> <br />
                  &nbsp;|&nbsp;<a href="./printerSetupMacModern.php">Mac OS X 10.7, 10.8, and 10.9</a>
                  &nbsp;|&nbsp;<a href="./printerSetupMacYosemite.php">Mac OS X 10.10 Yosemite</a> <br />
					
				<p class="answer">
				<strong>Note: At this time, Google's Chrome OS is incompatible with our printer system.  
				You will need to print your documents from one of the computer labs on campus. We apologize for the inconvenience. </strong>
				</p>

<h3><a href="#LIONPRINT" name="LIONPRINT">Setting up the front desk printer on Mac OS X 10.7, 10.8, and 10.9</a></h3>
<p class="answer">This will guide you through the setup of the front desk printer in your residence hall on a machine running Mac OS X 10.7, 10.8, or 10.9<br />
	<ol class="indent">
                                
					<li>
                        <strong>Download</strong> and <strong>Install</strong> the Front Desk Printer Drivers from <a href="../images/RLS_Front_Desk_Printer_Drivers.zip">here</a>.<br />
						If you live in <strong>Wells</strong> or <strong>Freddy</strong>, click <a href="http://support.apple.com/downloads/DL907/en_US/HPPrinterDrivers3.0.dmg">here</a>.<br />
					(Please only click on the link once and wait for the download to finish.)</li>
					<img class="imgBorder" src="../images/Picture%201.png" width="575" alt="">
                    <li>
                        From the Apple Menu select <strong>System Preferences</strong>.</li>
					<img class="imgBorder" src="../images/printerSetup/LionPrint01.png" alt="">
					<li>
                        Click on <strong>Print &amp; Scan</strong>.</li>
					<img class="imgBorder" src="../images/printerSetup/LionPrint02.png" width="575" alt="">
					<li>
                        Click on <strong>+</strong> to add the printer. </li>
					<img class="imgBorder" src="../images/printerSetup/LionPrint03.png" width="575" alt="">
                    <li>
                        <strong>Secondary Click</strong> on the <strong>Toolbar</strong> and select <strong>Customize toolbar...</strong><br />
						(Secondary Click : Right-Click or Control+Click)</li>
					<img class="imgBorder" src="../images/printerSetup/LionPrint04.png">
					<li>
                        <strong>Drag</strong> the <strong>Advanced</strong> icon to the <strong>Toolbar</strong>.</li>
					<img class="imgBorder" src="../images/printerSetup/LionPrint05.png" width="575" alt="">
					<li>
                        Click on <strong>Done</strong>.</li>
					<img class="imgBorder" src="../images/printerSetup/LionPrint06.png" width="575" alt="">
					<li>
					Click on <strong>Advanced</strong>. (The Advanced screen may take a moment to load.)</li>
                        <img class="imgBorder" src="../images/printerSetup/LionPrint07.png" alt="">
					<li>
                        Set Type to <strong>Windows printer via spollss</strong>, set Device to <strong>Another Device</strong> and enter the information that corresponds to your residence hall (loacated below the image).</li>
                        <img class="imgBorder" src="../images/printerSetup/LionPrint08.png" alt="">
                        
                      <table class="printers">
                       	  <tr>
                           	  <th width="132"><strong>Residence Hall</strong></th>
                       		  <th width="220"><strong>URL</strong></th>
                       		  <th width="232"><strong>Print Using</strong></th>
                   		  </tr>
                        <tr>
                        	<td>Blair-Shannon </td>
                        	<td>smb://resprint/blairlpr</td>
                        	<td>HP LaserJet 9050 Foomatic/hpijs</td>
                        </tr>
                        <tr>
                        	<td>Freudenberger </td>
                        	<td>smb://resprint/freddylpr</td>
                        	<td>HP LaserJet 600 M601 M602 M603</td>
                        </tr>
                        <tr>
                        	<td>Hammons House</td>
                        	<td>smb://resprint/hammonslpr</td>
                        	<td>HP LaserJet 4250 Foomatic/hpijs</td>
                        </tr>
                        <tr>
                        	<td>Hutchens House</td>
                            <td>smb://resprint/hutchenslpr</td>
                        	<td>HP LaserJet 4050 Foomatic/hpijs</td>
                        </tr>
                        <tr>
                        	<td>Kentwood Hall</td>
                        	<td>smb://resprint/kentwoodlpr</td>
                        	<td>HP LaserJet 4250 Foomatic/hpijs</td>
                        </tr>   
						<tr>
                        	<td>Monroe Apts.</td>
                        	<td>smb://resprint/monroelpr</td>
                        	<td>HP LaserJet 4250 Foomatic/hpijs</td>
                        </tr>
                        <tr>
                           	<td>Scholars House</td>
                        	<td>smb://resprint/scholarslpr</td>
                        	<td>HP LaserJet 4250 Foomatic/hpijs</td>
                        </tr>
                        <tr>
                        	<td>Sunvilla Tower</td>
                        	<td>smb://resprint/sunvillalpr</td>
                        	<td>HP LaserJet 4250 Foomatic/hpijs</td>
                        </tr>
                        <tr>
                        	<td>Wells House</td>
                        	<td>smb://resprint/wellslpr</td>
                        	<td>HP LaserJet 600 M601 M602 M603</td>
                        </tr>
                       	  <tr>
                            <td>Woods House</td>
                        	<td>smb://resprint/woodslpr</td>
                        	<td>HP LaserJet 4050 Foomatic/hpijs</td>
                        </tr>
                    </table>
					</li>
                    <li>
                        Set <strong>Print Using</strong> to <strong> Select Printer Software...</strong></li>
                        <img class="imgBorder" src="../images/printerSetup/LionPrint09.png" alt="">
                    <li>
                        Select the driver for your Residence Hall from the previous table. Using the filter will make it much easier to find. It will be <strong>HP LaserJet 4250 Foomatic/hpijs</strong>,
                        <strong>HP LaserJet 4350 Foomatic/hpijs</strong>, <strong>HP LaserJet 9050 Foomatic/hpijs</strong>, <strong>HP LaserJet 600 M601 M602 M603</strong>,or <strong>HP LaserJet 4050 Foomatic/hpijs</strong>. 
                        <br />After you've selected the appropriate driver, click on <strong>Add</strong>.</li>
                        <img class="imgBorder" src="../images/printerSetup/LionPrint10.png" alt="">
					<li>
						If you live in <strong>Wells</strong> or <strong>Freddy</strong> you may see the following dialog box. Make sure the checkbox for <strong>Duplex Unit</strong> is checked and then click on <strong>OK</strong>.</li>
					<img class="imgBorder" src="../images/WellsDuplex.png" alt="">
					<li><strong>Congratulations you can now Print to the Front Desk!</strong></li>
                    <li>
                        <strong>When Printing</strong> you will be asked for your credentials.<br /> 
                        Enter your BearPass Login and password then click on <strong>OK</strong>.<br />
						Your printout will be at the Front Desk with a cover page.</li>
						<img class="imgBorder" src="../images/printerSetup/LionPrint11.png" alt="">
                </ol>
                
               <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to 
                	<a href="../contact.php" title="contact us">contact</a> the ResNet Offices (417 836-6100) for assistance.
           	  </p>
                <!-- end content -->
            </div>	
     	</div>
 		<div id = "LeftNav">
				<?php include_once("../includes/LeftNav.php") ?>
			</div>
	<?php include_once("../includes/footer.inc.php") ?>
    </div>
</body>
</html>