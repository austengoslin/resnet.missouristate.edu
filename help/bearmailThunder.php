
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
    
<title>Resnet :: Tutorials :: Mail Clients :: Thunderbird</title>
</head>

<body>
	<?php include_once("../includes/navBar_secondary.inc.php"); ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_secondary.inc.php"); ?>

			<div id = "leftColumn">
           		
    		<div id="tutorial"> 
            <!-- start content -->		
            <h2>Mozilla Thunderbird Setup</h2>
            <p class="answer">
            	<strong>Note:</strong> Staff wishing to set up Thunderbird should use this contact ResNet. 
            
            	<br /><strong>Jump To</strong>
       		  
            	<a href="#2">Thunderbird 2.xx</a> &nbsp; | &nbsp; <a href="#3">Thunderbird 3.xx</a> &nbsp; | &nbsp;       		  
            	<a href="../PDF/MailConfiguration/Mozilla-Thunderbird-Setup.pdf">Printer Friendly Version (PDF)</a>
            </p>
            
            <h3><a name="3">Thunderbird 3.xx Setup</a></h3>
            <ol class="indent">
            <li>When you start Thunderbird for the first time it will prompt you to create a new account.
                <br />
				Enter the following into each of the three fields:
                <ul>
                	<li>Your Name: <strong>First and Last Name</strong> </li>
                	<li>Email Address: <strong>BearPass Login@live.missouristate.edu</strong></li>
                	<li>Password: <strong>Your Live@EDU password</strong></li> 
                	<li>Click 'Continue'.</li>
                </ul>
            </li>        
            <img class="imgBorder" src="../images/bearmail/bearmailTbird/thunderbird3_01.png" alt="Thunderbird Mail Setup" width="575">
            <li>It will start to search for server settings automatically, this will fail. Click the 'Stop' button and then click the 'Manual Setup' button at the bottom of the window.</li>
            <img class="imgBorder" src="../images/bearmail/bearmailTbird/thunderbird3_02.png" alt="Thunderbird Mail Setup" width="575">
            <li>
                <ul>
                	<li>Click on 'Server Settings' and enter the following:</li>  
                	<li>Server Name: <strong>'pod51000.outlook .com' or your outlook.com mailbox address.</strong> </li> 
                	<li>User Name: <strong>BearPass Login@live.missouristate.edu</strong> </li>
                	<li>Connection Security: <strong>STARTTLS</strong></li>
                </ul>
            </li>
                
                <img class="imgBorder" src="../images/bearmail/bearmailTbird/thunderbird3_03.png" alt="Thunderbird Mail Setup" width="575">
                <li>Click on 'Outgoing Server (SMTP)' then click on 'live.missouristate.edu' and click 'edit' (it should be the only option).  Then enter the following:
                	<ul>
                		<li>Server Name: <strong>'pod51000.outlook .com' or your outlook.com mailbox address.</strong></li>  
                		<li>Check: <strong>Use Name and password</strong></li>
                		<li>User Name: <strong>BearPass Login@live.missouristate.edu</strong> </li>
                		<li>Connection Security:<strong> STARTTLS</strong></li>
                	</ul>
               </li> 
                <img class="imgBorder" src="../images/bearmail/bearmailTbird/thunderbird3_04.png" alt="Thunderbird Mail Setup">
                <li>Then click 'OK' twice or until you are back into the main Thunderbird Window.</li>
                
            </ol>
            <h3><a name="2">Thunderbird 2.xx Setup</a></h3>
            <ol class="indent">
  <li>
                    Click on "Tools", then "Account Settings...", then click "Add Account" in the lower right of the window.  
                    (You may skip this step if this is your first time starting Thunderbird.)
                </li>
                <li>
              Select "Email Account".</li>
                    <img class="imgBorder" src="../images/bearmail/bearmailTbird/bearmailTbird01.png" alt="Thunderbird Mail Setup">
                <li>
                    Fill out the "Your Name" and "Email Address" fields.</li>
                    
                    <img class="imgBorder" src="../images/bearmail/bearmailTbird/bearmailTbird02.png" alt="Thunderbird Mail Setup">
              <li>
                    Select IMAP, then fill out "outlook.com" for the incoming server.</li>
                    <img class="imgBorder" src="../images/bearmail/bearmailTbird/bearmailTbird03.png" alt="Thunderbird Mail Setup">
              <li>
                    Fill out the "Incoming User Name" with your information (BearPass Login@live.missouristate.edu).</li>
                    <img class="imgBorder" src="../images/bearmail/bearmailTbird/bearmailTbird04.png" alt="Thunderbird Mail Setup">
                <li>
                    Enter an account name then click "Next".</li>
                    <img class="imgBorder" src="../images/bearmail/bearmailTbird/bearmailTbird05.png" alt="Thunderbird Mail Setup">
                <li>
                    Verify settings then click "Finish".</li>
                    <img class="imgBorder" src="../images/bearmail/bearmailTbird/bearmailTbird06.png" alt="Thunderbird Mail Setup">
              <li>
                    Select "Account Settings..." from the tools menu. Select "Server Settings", then under security settings select SSL.</li>
                    <img src="../images/bearmail/bearmailTbird/bearmailTbird07.png" alt="Thunderbird Mail Setup" width="575" class="imgBorder">
                <li>
                    Can't see all folders? Click "File" then click "Subscribe...". Check the folders you would like to subscribe to.
                    Congratulations, you now have Live@Edu mail on Thunderbird!
               </li>
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