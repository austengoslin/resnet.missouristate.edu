
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
    
<title>Resnet :: Tutorials :: Mail Clients :: Outlook</title>
</head>

<body>
	<?php include_once("../includes/navBar_secondary.inc.php"); ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_secondary.inc.php"); ?>

			<div id = "leftColumn">
           		
    		<div id="tutorial"> 
            <!-- start content -->		
            <h2>Microsoft Outlook 2003 Setup</h2>
            
            
              <ul class="answer">
                    
                   <a href="#IMAP">IMAP Setup</a> &nbsp; |&nbsp; <a href="#POP3">POP3 Setup</a><br />
            		<a href="../PDF/MailConfiguration/Microsoft-Outlook-2003-Setup.pdf">Printer Friendly Version (PDF)</a>              
              </ul>

            
            <h3><a name="IMAP">IMAP Setup</a></h3>
            <ol class="indent">
            	<li>Click on "Start" &raquo; "Control Panel", and select "Mail".</li>
                <li>Click "E-mail Accounts..." and select "Add a new e-mail account".</li>
                <li>Select "IMAP" and click "Next".</li>
                <li>
                    Fill in your name, email address, user name (Domain\BearPass Login\BearPass Email), and password.  
                    The incoming and outgoing mail servers are "bearmail.missouristate.edu".</li>
                    <img class="imgBorder" src="../images/bearmail/bearmail-outlook-1I.gif" alt="Main Settings" width="575" height="449">
                <li>
                    Click on the "More Settings..." button, then select the "Outgoing Server", then fill out the user name (Domain\BearPass Login) and password.</li>
                    <img class="imgBorder" src="../images/bearmail/bearmail-outlook-2I.gif" alt="Outgoing Server Settings" width="367" height="450">
                <li>
                    Select the "Advanced" tab and then set both incoming and outgoing servers to use an encrypted connection (SSL) and set the outgoing port to 587.</li>
                    <img class="imgBorder" src="../images/bearmail/bearmail-outlook-3I.gif" alt="Advanced Server Settings" width="367" height="450">
            
            </ol>
            
                <h3><a name="POP3">POP3 Setup</a></h3>
              <ol class="indent">
                        <li>Click on "Start" &raquo; "Control Panel", and select "Mail".</li>
                        <li>Click "E-mail Accounts..." and select "Add a new e-mail account".</li>
                        <li>Select "POP3" and click "Next".</li>
                        <li>Fill in your name, email address, user name (Domain\BearPass Login\BearPass Email), and password.  
                    The incoming and outgoing mail servers are "bearmail.missouristate.edu".</li>
                   <img class="imgBorder" src="../images/bearmail/bearmail-outlook-1P.gif" alt="Main Settings" width="575" height="449">
                <li>
                    Click on the "More Settings..." button, then select the "Outgoing Server", then fill out the user name (Domain\BearPass Login) and password.</li>
                    <img class="imgBorder" src="../images/bearmail/bearmail-outlook-2P.gif" alt="Outgoing Server Settings" width="367" height="450">
                <li>
                    Select the "Advanced" tab and then set both incoming and outgoing servers to use an encrypted connection (SSL) and set the outgoing port to 587.
                    <strong>Warning:</strong> If you do not check the option "Leave a copy of messages on the server", messages will be removed from the server.
                    These messages will not be available when accessing email online through Bearmail Web Access.</li>
                    <img class="imgBorder" src="../images/bearmail/bearmail-outlook-3P.gif" alt="Advanced Server Settings" width="367" height="450">
            </ol>
            <!-- end content -->
            <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to 
                	<a href="../contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100) 
                	or the open access computer labs (417 836-5891 option #4) for assistance.
           	  </p>

            </div>	
     	</div>
 		<div id = "rightColumn">
				<?php include_once("../includes/sidePanel_tutorials.inc.php") ?>
			</div>
	<?php include_once("../includes/footer.inc.php") ?>
    </div>



</body>
</html>