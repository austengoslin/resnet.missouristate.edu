<?php require_once 'includes/config.inc.php';?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

		<title>Resnet Mobile</title>
		<link rel="stylesheet" href="css/stylesheet.css" type="text/css" />

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2196753-3', 'missouristate.edu');
  ga('send', 'pageview');
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript">

      $(document).ready(function () {

          function closeAll() {
              $("#arrow1").css("transform", "rotate(-90deg)");
              $("#arrow2").css("transform", "rotate(-90deg)");
              $("#arrow3").css("transform", "rotate(-90deg)");
              $("#arrow4").css("transform", "rotate(-90deg)");
              $("#printers-list").slideUp();
              $("#wireless-list").slideUp();
              $("#mail-list").slideUp();
              $("#register-list").slideUp();
          }

          $("#printers").click(function () {
              closeAll();
              if ($("#printers-list").css("display") == "none") {
                  $("#arrow1").css("transform", "rotate(0deg)");
                  $("#printers-list").slideDown();
              } else {
                  $("#printers-list").slideUp();
                  $("#arrow1").css("transform", "rotate(-90deg)");
              }
          });

          $("#wireless").click(function wirelessFunction() {
              closeAll();
              if ($("#wireless-list").css("display") == "none") {
                  $("#arrow2").css("transform", "rotate(0deg)");
                  $("#wireless-list").slideDown();
              } else {
                  $("#wireless-list").slideUp();
                  $("#arrow2").css("transform", "rotate(-90deg)");
              }
          });

          $("#mail").click(function () {
              closeAll();
              if ($("#mail-list").css("display") == "none") {
                  $("#arrow3").css("transform", "rotate(0deg)");
                  $("#mail-list").slideDown();
              } else {
                  $("#mail-list").slideUp();
                  $("#arrow3").css("transform", "rotate(-90deg)");
              }
          });

          $("#register").click(function () {
              closeAll();
              if ($("#register-list").css("display") == "none") {
                  $("#arrow4").css("transform", "rotate(0deg)");
                  $("#register-list").slideDown();
              } else {
                  $("#register-list").slideUp();
                  $("#arrow4").css("transform", "rotate(-90deg)");
              }
          });

      });
	</script>
	</head>

	<body>
		<div id="wrapper">

			<div id="header">
			<img src="images/logo.png" alt="ResNet"/>
			</div>
            
          <div id="nav">
            <ul>
            	<a href="index.php" title="Home"><li>Home</li></a>
				<a href="tutorials.php" title="Tutorials"><li class="selected">Tutorials</li></a>
                <a href="contact.php" title="Contact"><li>Contact</li></a>  
            </ul>
          </div>
            
            <div id="content">
				<h1>Tutorials</h1>

                <div id="printers"><img id="printer-icon" src="http://resnet.missouristate.edu/images/tutorials/printerIcon.png" alt="printer"/><h2>Printers</h2><img id="arrow1" src="/images/tutorials/dropdownArrow.png" alt="arrow"/></div>
                <ul id="printers-list">
                    <a href="http://localhost:41009/mobile/tutorials/vistaPrinterSetup.html"><li><h3>Windows 7</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/win8PrinterSetup.html"><li><h3>Windows 8</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/leopardPrinterSetup.html"><li><h3>Mac OSX 10.5 & 10.6</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/lionPrinterSetup.html"><li><h3>Mac OSX 10.7-10.9</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/yosemitePrinterSetup.html"><li><h3>Mac OSX 10.10</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/ubuntuPrinterSetup.html"><li><h3>Ubuntu</h3></h3></li></a>
                </ul>
                <div id="wireless"><img id="wifi-icon" src="http://resnet.missouristate.edu/images/tutorials/wifiIcon.png" alt="wireless"/><h2>Wireless</h2><img id="arrow2" src="/images/tutorials/dropdownArrow.png" alt="arrow"/></div>
                <ul id="wireless-list">
                    <a href="http://localhost:41009/mobile/tutorials/androidWireless.html"><li><h3>Android</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/iosWireless.html"><li><h3>iOS</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/win7Wireless.html"><li><h3>Windows 7</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/win8Wireless.html"><li><h3>Windows 8</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/vistaWireless.html"><li><h3>Windows Vista</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/winphoneWireless.html"><li><h3>Windows Phone</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/chromeWireless.html"><li><h3>Chrome OS</h3></li></a>
                </ul>
                <div id="mail"><img id="mail-icon" src="http://resnet.missouristate.edu/images/tutorials/emailIcon.png" alt="mail"/><h2>Mail</h2><img id="arrow3" src="/images/tutorials/dropdownArrow.png" alt="arrow"/></div>
                <ul id="mail-list">
                    <a href="http://localhost:41009/mobile/tutorials/androidMail.html"><li><h3>Android</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/iosMail.html"><li><h3>iOS</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/appleMail.html"><li><h3>Apple Mail</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/outlookMail.html"><li><h3>Outlook</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/otherMail.html"><li><h3>Other Email Tutorials</h3></li></a>
                </ul>
                <div id="register"><img id="gears" src="http://resnet.missouristate.edu/images/tutorials/gears.png" alt="register"/><h2>Device Register</h2><img id="arrow4" src="/images/tutorials/dropdownArrow.png" alt="arrow"/></div>
		        <ul id="register-list">
                    <a href="http://localhost:41009/mobile/tutorials/deviceRegister.html"><li><h3>Wired Registration</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/xboxRegister.html"><li><h3>Xbox 360</h3></h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/ps3Register.html"><li><h3>Playstation 3</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/appletvRegister.html"><li><h3>Apple TV</h3></li></a>
                    <a href="http://localhost:41009/mobile/tutorials/macAddress.html"><li><h3>Finding the Mac Address</h3></h3></li></a>
                </ul>
            </div>

        </div>
	</body>
</html>