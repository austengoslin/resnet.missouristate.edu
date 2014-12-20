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
<script type="text/javascript" src="../js/Museo_300_300.font.js"></script>
<script type="text/javascript" src="../js/cufon.replace.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2196753-3', 'missouristate.edu');
  ga('send', 'pageview');

</script>

<title>Resnet :: Tutorials :: Bearmail Apple Staff</title>
</head>

<body>
	<?php include_once("../includes/navBar_primary.inc.php"); ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_primary.inc.php"); ?>

			<div id = "Main">
           		
    		<div id="tutorial"> 
            <!-- start content -->		
            <h2>Apple Mail Setup</h2>
            
            <p class="answer"><strong>Jump To</strong>
            <a href="#IMAP">IMAP Setup</a>&nbsp;|&nbsp;<a href="#POP3">POP3 Setup</a>&nbsp;
            <h3><a href="#IMAP" name="IMAP">IMAP Setup</a></h3>
            <ol>
            
           	  <li>
                    Select "Mail" from the menu bar image, then select "Preferences...", then switch to the "Accounts" panel and push the small push 
                    sign in the lower left of the screen. (This skip may be skipped if this is the first time you are running Apple Mail.)
            </li>
                <li>
              Select "IMAP" from "Account Type", then enter your name and email address in the approriate fields. </li>
                    <img src="../images/bearmail/bearmail-apple-1I.png" alt="Choosing IMAP and then entering relevant data">
                <li>
                    Under "Incoming Mail Server" input "bearmail.missouristate.edu" and your user name (in the format Domain\BearPass Login\BearPass Email), and your password.                </li>
                    <img src="../images/bearmail/bearmail-apple-2.png" alt="Entering correct incoming server and relevant data">
                <li>
                    Make sure that "Use Secure Sockets Layer (SSL)" is checked and "Authentication" is set to "Password". </li>
                    <img src="../images/bearmail/bearmail-apple-3.png" alt="Setting Secure Socket Layers to Enabled and Authentication to Password">
                <li>
                    Under "Outgoing Mail Server" input "bearmail.missouristate.edu" and your user name in the format Domain\BearPass Login, and your password.  </li>
                    <img src="../images/bearmail/bearmail-apple-4.png" alt="Entering correct outgoing server and relevant data">
                <li>
                    Make sure that Secure Sockets Layer is enabled and Authentication is set to Password.  </li>
                  <img src="../images/bearmail/bearmail-apple-5.png" alt="Setting Secure Socket Layers to Enabled and Authentication to Password">
                <li>
                     Select "Mail" from the menu bar, then select "Preferences...", then select "Accounts" again.  
                </li>
                <li>
              Click the "Server Settings..." button underneath the Outgoing Mail Server (SMTP) section.  </li>
                  <img src="../images/bearmail/bearmail-apple-7I.png" alt="Inside of the 'Accounts' section, selecting the server settings button">
                <li>
                    Make sure that "Use Secure Sockets Layer (SSL)" is checked and that "Authentication" is set to "Password", then change the "User Name" 
                    field to match the format Domain\BearPass Login, and change the "Server Port" to 587.  </li>
              <img src="../images/bearmail/bearmail-apple-8.png" alt="Setting server port to 587 and changing the 'User Name' field">
            </ol>
            <h3><a href="#POP3" name="POP3">POP3 Setup</a></h3>
            <ol>
           		<li>
                    Select "Mail" from the menu bar, then select "Preferences...", then switch to the "Accounts" panel and push the small push sign in the lower left of the screen.  
                    (This skip may be skipped if this is the first time you are running Apple Mail.)
                </li>
                <li>
                    Select "POP3" from "Account Type", then enter your name and email address in the approriate fields.</li>
                    <img src="../images/bearmail/bearmail-apple-1P.png" alt="Choosing POP3 and then entering relevant data">
                <li>
                    Under "Incoming Mail Server" input "bearmail.missouristate.edu" and your user name in the format Domain\BearPass Login\BearPass Email, and your password.</li>
                    <img src="../images/bearmail/bearmail-apple-2.png" alt="Entering correct incoming server and relevant data">
                <li>
                    Make sure that "Use Secure Sockets Layer (SSL)" is enabled and "Authentication" is set to "Password".</li>
                    <img src="../images/bearmail/bearmail-apple-3.png" alt="Setting Secure Socket Layers to Enabled and Authentication to Password">
                <li>
                    Under "Outgoing Mail Server" input "bearmail.missouristate.edu" and your User Name in the format Domain\BearPass Login, and your password.</li>
                    <img src="../images/bearmail/bearmail-apple-4.png" alt="Entering correct outgoing server and relevant data">
                <li>
                    Make sure that "Use Secure Sockets Layer (SSL)" is enabled and "Authentication" is set to "Password".</li>
                    <img src="../images/bearmail/bearmail-apple-5.png" alt="Setting Secure Socket Layers to Enabled and Authentication to Password">
                <li>
                    Select "Mail" from the menu bar, then select "Preferences...", then switch to the "Accounts" panel. 
                </li>
                <li>
                    Click the "Server Settings..." button underneath the "Outgoing Mail Server (SMTP)" section.</li>
                    <img src="../images/bearmail/bearmail-apple-7P.png" alt="Inside of the 'Accounts' section, selecting the server settings button">
                <li>
                    Make sure that "Use Secure Sockets Layer (SSL)" is checked and that "Authentication" is set to "Password", then change the "User Name" 
                    field to match the format Domain\BearPass Login, and change the "Server Port" to 587.</li>
              <img src="../images/bearmail/bearmail-apple-8.png" alt="Setting server port to 587 and changing the 'User Name' field">
                <li>
                    <strong>Warning:</strong> If you would like to be able to view your mail on the Bearmail web-based client, you need to uncheck "Remove copy from server after retrieving a message."  
              Otherwise, once Apple Mail gets the email, it will be removed from the Bearmail server.</li>
                    <img src="../images/bearmail/bearmail-apple-9P.png" alt="OPTIONAL: if you would like to leave your mail on the server so it can be accessed through the bearmail web client, uncheck remove copy from server after retrieving message on the advanced tab of the accounts panel">
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
