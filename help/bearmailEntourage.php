
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
    
<title>Resnet :: Tutorials :: Mail Clients :: Entourage</title>
</head>

<body>
	<?php include_once("../includes/navBar_secondary.inc.php") ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_secondary.inc.php") ?>

			<div id = "leftColumn">
           		
    		<div id="tutorial"> 
            <!-- start content -->		
            <h2>Microsoft Entourage 2008 Setup</h2>
            
            <p class="answer">
                <strong>Note:</strong> Staff wishing to set up Entourage 2008 should contact ResNet.
                <br /><a href="../PDF/MailConfiguration/Microsoft-Entourage-2008-Setup.pdf">Printer Friendly Version (PDF)</a>
            
            </p>
            <h3>Entourage 2008 Setup</h3>
            <ol><li>
                    When Entourage 2008 is started click 'Tools' then 'Accounts' (If you are running Entourage for the first time you can cancel out of the setup).</li>
                    <img class="imgBorder" src="../images/bearmail/entourage08/bearmail-entourage-liveedu-1.png" alt="Tools - Accounts">
                <li>Select New</li> 
                <img class="imgBorder" src="../images/bearmail/entourage08/bearmail-entourage-liveedu-2.png" alt="Accounts Page">
                <li>Select IMAP from the drop down menu and press OK.</li>
                   <img class="imgBorder" src="../images/bearmail/entourage08/bearmail-entourage-liveedu-4.png" alt="New Account - IMAP">
                <li>
                    Enter the following information into the form.
                    <ul><li>Account Name: <strong>Any name you choose.</strong></li>
                        <li>Name: <strong>Your Name</strong></li>
                        <li>Email Address: <strong>BearPass Email@live.missouristate.edu</strong></li>
                        <li>Account ID: <strong>BearPass Login@live.missouristate.edu</strong></li>
                        <li>IMAP Server: <strong>outlook.com</strong></li>
                        <li>Password: <strong>Your Password</strong></li>
                        <li>SMTP Server: <strong>pod51000.outlook.com</strong></li>
                    </ul>
                    <img class="imgBorder" src="../images/bearmail/entourage08/bearmail-entourage-liveedu-5.png" alt="Edit Account"></li>
                <li>Under Receiving Mail click "Click Here for Advanced Receiving Options" and check "This IMAP service requires a secure connection (SSL)"</li>
                    <img class="imgBorder" src="../images/bearmail/entourage08/bearmail-entourage-liveedu-6.png" alt="Advanced Server IMAP Settings">
                <li>
                    Under Sending Mail click "Click Here for Advanced Sending Options" check "SMPT services requires a secure connection (SSL)" and "SMTP Server requires authentication" 
                    and then choose "Use same settings as receiving mail server".</li>
                    <img class="imgBorder" src="../images/bearmail/entourage08/bearmail-entourage-liveedu-7.png" alt="Advanced Server SMTP Settings">
                <li>
                    Entourage should then start syncing. 
                    This process may take awhile, so please be patient.
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