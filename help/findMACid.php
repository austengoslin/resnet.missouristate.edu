
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
    
<title>Resnet :: Tutorials :: Mail Clients :: Finding your Mac Address</title>
</head>

<body>
	<?php include_once("../includes/navBar_primary.inc.php") ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_primary.inc.php") ?>

			<div id = "Main">
           		
    		<div id="tutorial"> 
            <!-- start content -->		
            <h2>Finding your MAC address</h2>
            <p class="answer">
            	<strong>Jump To: </strong><a href="#XP">Windows XP</a>&nbsp;|&nbsp;<a href="#VISTA">Windows Vista or 7</a>&nbsp;|&nbsp;<a href="#OSX">Mac OS X</a>
            </p>
            <h3><a href="#XP" name="XP">On Windows XP</a></h3>
            <ol class="indent">
               	<li>Select "Start" &raquo; "Run". </li>
              	<img class="imgBorder" src="../images/macid/macid-windows-1.png" alt="macid-xp-1">
              	<li>Type <strong>cmd</strong> into the window and click "OK".</li>
                <img class="imgBorder" src="../images/macid/macid-windows-2.png" alt="macid-xp-2">
                <li>In the newly opened window, type <strong>ipconfig /all</strong> and press enter.</li>
                <img class="imgBorder" src="../images/macid/macid-windows-3.png" alt="macid-xp-3" width="575">
                <li>Displayed will be one or more types of connections.  The MAC address will be listed as the <span class="underline">physical address</span>.</li>
                <li> "Ethernet Adapter Wireless Network Connection" = (Wireless Network Card)
                <br />"Ethernet Adapter Local Area Connection" = (Wired Network Card)</li>
              
            </ol>
            
            <h3><a href="#VISTA" name="VISTA">On Windows Vista or 7</a></h3>
            <ol class="indent">
            
				<li>
                    Select "Start" and type <strong>cmd</strong> into the Search menu. </li>
                    <img class="imgBorder" src="../images/macid/macid-vista-1.png" alt="macid-vista-1">
                    <li>In the newly opened window, type <strong>ipconfig /all</strong> and press enter.</li>
				<img class="imgBorder" src="../images/macid/macid-vista-2.png" alt="macid-vista-2" width="575">
                    <li>Displayed will be one or more types of connections.  
                    The MAC address will be listed as the <em>physical address</em>.</li>
                    
                    <li>"Ethernet Adapter Wireless Network Connection" = (Wireless Network Card)<br />
                        "Ethernet Adapter Local Area Connection" = (Wired Network Card)</li>
                
            </ol>
            <h3><a href="#OSX" name="OSX">On Mac OS X</a></h3>
	  <ol class="indent">
                <li>Click the Apple logo &raquo; "About this Mac".</li>
                    <img class="imgBorder" src="../images/macid/macid-mac-1.png" alt="macid-mac-1">
                    <li>Select "More Info...".</li>
                    <img class="imgBorder" src="../images/macid/macid-mac-2.png" alt="macid-mac-2">
                    <li>Select "Network" from the panel on the left, and then "AirPort" on the top-right panel.  
                    The MAC address will be listed in the bottom-right panel.</li>
              <img src="../images/macid/macid-mac-3.png" alt="macid-mac-3" width="575" class="imgBorder">
        </ol>
                            
                <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to 
                	<a href="../contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100) 
                	or the open access computer labs (417 836-5891 option #4) for assistance.
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