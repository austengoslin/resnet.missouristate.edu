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
    
<title>Resnet :: Tutorials :: Network Shares</title>
</head>

<body>
	<?php include_once("../includes/navBar_secondary.inc.php"); ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_secondary.inc.php"); ?>
			<div id = "leftColumn">
           		
    		<div id="tutorial"> 
            <!-- start content -->		
            <h2>Accessing Network Shares</h2>
            
            <p class="answer">
            This will guide you through the setup of accessing network file shares such as magenta or eccentric.<br />
            
            <strong>Jump To: </strong><a href="#WINXPFILE" title="windows">Windows</a>&nbsp;|&nbsp; <a href="#OSXFILE" title="Mac OS X">Mac OS X</a> 
            &nbsp;|&nbsp;<a href="/PDF/FileShares/Accessing-Network-File-Shares-with-Windows.pdf">Printer Friendly Version (PDF) (PC)</a>
            &nbsp;|&nbsp;<a href="http://resnet.missouristate.edu/PDF/FileShares/Accessing-Network%20File-Shares-with-Mac-OSX.pdf">(PDF)(MAC)</a>
            </p>
            <h3><a name="WINXPFILE" id="WINXPFILE"></a><a href="#WINXPFILE" title="Network Files Shares with Windows">Accessing Network File Shares with Windows</a></h3>

            <ol>
           	  <li class="indent">Go to the Start Menu and select Run.</li>
  <li class="indent">Type in \\ followed by the name of the server. Click OK. (See Figure Below)</li>
              		<img class="imgBorder" src="../images/netshares-windows-1.png" alt="netshares-windows-1">
                <li class="indent">You should be presented with a login box. 
                    Enter SGF\BearPass Login OR BearPass Login@SGF, and enter your network password and click Ok. (See Figure Below)</li>
                    <img class="imgBorder" src="../images/netshares-windows-2.png" alt="netshares-windows-2">
            </ol>
            <h3><a href="#OSXFILE" name="OSXFILE">Accessing Network File Shares with Mac OSX</a></h3>
			  <p class="answer">
                This will guide you through the setup of accessing network file shares such as magenta or eccentric.<br />
				<a href="http://resnet.missouristate.edu/PDF/FileShares/Accessing-Network%20File-Shares-with-Mac-OSX.pdf">Printer Friendly Version (PDF)</a>
              <ol>
                <li class="indent">Select the finder from the dock.</li>
                <li class="indent">From the menu bar select Go then "Connect to Server...".</li>
                <img class="imgBorder" src="../images/netshares-osx-1.png" alt="netshares-osx-1">
              <li class="indent">
                    In the dialog box, type "smb://" and then the name of the network share you would like to access (such as magenta in the example below).</li>
                    <img class="imgBorder" src="../images/netshares-osx-2.png" alt="netshares-osx-2">
              <li class="indent">
                    In the authorization box that pops up, enter "SGF" as the domain and your BearPass Login as the name.</li>
              <img class="imgBorder" src="../images/netshares-osx-3.png" alt="netshares-osx-3">
            <li class="indent"> Then select the folder you would like to access.</li>
                    <img class="imgBorder" src="../images/netshares-osx-4.png" alt="netshares-osx-4">
              </ol>
            </p>
            
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