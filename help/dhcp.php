
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
    
<title>Resnet :: Tutorials :: Mail Clients :: DCHP</title>
</head>

<body>
	<?php include_once("../includes/navBar_secondary.inc.php"); ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_secondary.inc.php"); ?>

			<div id = "leftColumn">
           		
    		<div id="tutorial"> 
            <!-- start content -->		
            <h2>Configuring DHCP</h2>
            <p class="answer">
                To work on the Missouri State network, you computer needs to be configured to use DHCP.  
                If you used Cable or DSL at home, your computer may be configured improperly. 
                Follow the appropriate instructions for you operating system.
            
             <strong>Jump To : </strong> <a href="#WinXP">Windows XP</a>&nbsp; | &nbsp; <a href="#VISTA">Windows Vista</a> &nbsp; | &nbsp; <a href="#Win2K">Windows 2000</a> &nbsp; | &nbsp;  <a href="#OS_X">Mac OS X</a>
           	<br />	
            </p>
            <h3><a name="WinXP">Windows XP</a></h3>
                <p class="indent"><strong><a href="../PDF/ConfiguringDHCP/Windows-XP.pdf">Printer Friendly Version (PDF)</a></strong></p>
          <ol class="indent">
                    <li>
                        Click "Start" &raquo; "Control Panel", and then select "Network Connections".</li>
                    <img class="imgBorder" src="../images/dhcp/DHCP-windows-1A.png" alt="DHCP-windows-1A" />
            <br />
            <img class="imgBorder" src="../images/dhcp/DHCP-windows-2.png" alt="DHCP-windows-2" />
<li><strong>or</strong> "Start" &raquo; "Settings" &raquo; "Network Connections" </li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-windows-1B.png" alt="DHCP-windows-1B">
                    <li>
                        Right-click on "Local Area Connection" and select "Properties".</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-windows-3.png" alt="DHCP-windows-3" />
                    <li>
                        Double-click "Internet Protocol (TCP/IP)" inside the white box.</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-windows-4.png" alt="DHCP-windows-4" />
                    <li>
                        Verify that the default, "Obtain an IP address automatically", is selected and click "OK."</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-windows-5.png" alt="DHCP-windows-5" />
                    <li>
                       <a href="../images/dhcp/DHCP-windows.png">Click here for an image tutorial</a>.
                    </li>
                </ol>
                <h3><a name="Win2K">Windows 2000</a></h3>
                <p class="indent"><strong><a href="../PDF/ConfiguringDHCP/Windows-2000.pdf">Printer Friendly Version (PDF)</a></strong></p>
  				<ol class="indent">
                    <li>
                        Click "Start" &raquo; "Settings" &raquo; "Control Panel".   
                        Double Click on the "Network and Dial-up Connections" icon.</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-windows-5.png" alt="DHCP-windows-5" />
                    <li>
                        Right-click on "Local Area Connection" and select "Properties".</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-2000-3.jpg" alt="DHCP-2000-3" />
                    <li>
                        Select "Internet Protocol (TCP/IP)" inside the white box.  
                        (If there are multiple TCP/IP options, select the one that has your Ethernet Adapter listed after it.)
                        <br />
                        Click on the "Properties" button.</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-2000-4.jpg" alt="DHCP-2000-4" />
                    <li>
                        Verify that "Obtain an IP address automatically" is selected.</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-2000-5.jpg" alt="DHCP-2000-5" />
                    <li>
                        Click the "Ok" button then click the "Close" button in the Network Control Panel.
                    </li>
                    <li>
                        If asked to restart your computer, select "Yes".  
                        (Your Windows CD may be required.)
                    </li>
                </ol>
                
                <h3><a name="OS_X">Mac OS X</a></h3>
            	<strong><a href="/PDF/ConfiguringDHCP/Mac-OS-X.pdf">Printer Friendly Version (PDF)</a></strong>
                <ol class="indent">
                    <li>
                  Click Apple Menu &raquo; "System Preferences".</li>
                    <img class="imgBorder" src="../images/dhcp/DHCP-osx-1.png" alt="DHCP-osx-1.png" />
                    <li>
                        Select "Network" and then click the "TCP/IP" tab.</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-osx-2.png" alt="DHCP-osx-2.png" />
                    <li>
                        Select "Built-in Ethernet" from the Configure menu located above the tabs.</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-osx-3.png" alt="DHCP-osx-3.png" />
                    <li>
                        Select "Using DHCP" from the lower Configure menu.</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-osx-4.png" alt="DHCP-osx-4.png" />
                    <li>
                        Click "Apply Now" in the lower corner of the window.</li>
                    <li>
                  <a href="../images/dhcp/DHCP-mac.png">Click here for an image tutorial</a>.
                    </li>
                </ol>
                <h3><a name="VISTA">Windows Vista</a></h3>
                <ol class="indent"><li>
                        Right Click on Network in the Start Menu.</li>
                  <img src="../images/dhcp/DHCP-vista-1.png" alt="DHCP-vista-1" width="580" class="imgBorder" />
                  <li>
                      Select Manage Network Connections in the left pane.</li>
            			<img class="imgBorder" src="../images/dhcp/DHCP-vista-2.png" alt="DHCP-vista-2" width="580" />
                  <li>
                        Right click and select properties on your default ethernet adapter.</li>
            			<img class="imgBorder" src="../images/dhcp/DHCP-vista-3.png" alt="DHCP-vista-3" width="580" />
                    <li>
                        Highlight Internet Protocol Version 4 (TCP/IPv4) and click Properties.</li>
<img class="imgBorder" src="../images/dhcp/DHCP-vista-4.png" alt="DHCP-vista-4" />
                    <li>
                        Ensure that Obatain IP address Automatically is selected
                        Also, esnure that Obtain DNS server Automatically is selected, 
                        however this setting may be changed after registration.</li>
                        <img class="imgBorder" src="../images/dhcp/DHCP-vista-5.png" alt="DHCP-vista-5" />
                </ol>
            
                <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to 
                	<a href="../contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100) 
                	or the open access computer labs (417 836-5891 option #4) for assistance.
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