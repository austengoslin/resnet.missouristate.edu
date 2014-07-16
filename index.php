<?php
require_once('mobile_device_detect.php');
$mobile = mobile_device_detect();

// redirect all mobiles to mobile site and all other browsers to desktop site
if($mobile==true){
  header('Location:http://resnet.missouristate.edu/mobile');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
<meta name="description" content="We provide technical assistance to the department of reslife and to students living on campus" />    

<title>ResNet</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2196753-3', 'missouristate.edu');
  ga('send', 'pageview');

</script>
</head>

<body>
<?php include_once("includes/navBar_primary.inc.php"); ?>
	
	<div id = "wrapper">
	<?php include_once("includes/header_primary.inc.php"); ?>
	      	<div id="homeCopy"></div>
      	
        <div class="homeTutorialWrapper">
        	<div class="left1">
        		<h2>ResNet Video Tutorials</h2>
        	  	<p><strong>Mac OS 10.6</strong> &nbsp;&nbsp;<a href="https://www.youtube.com/watch?v=tNiIb_8Oseo">Printer</a> | <a href="https://www.youtube.com/watch?v=aKgljZzw1XY">Wireless</a><br />
       	        <strong>Ubuntu </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.youtube.com/watch?v=G5ba6g7SMO8">Printer</a> | <a href="https://www.youtube.com/watch?v=2QqBjJACU4Q">Wireless</a><br />
   	         	<strong>Windows 7</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.youtube.com/watch?v=2C4Q2zeFRBs">Printer</a> | <a href="https://www.youtube.com/watch?v=eYBNJ81f8QQ">Wireless</a></p>
        	</div>
            <div class="left2"><a href="https://www.youtube.com/watch?v=2C4Q2zeFRBs"><img src="images/tutorials/windowsVistaPrinter.png" alt="Windows Vista Printer" /></a></div>
            <div class="left3"><a href="https://www.youtube.com/watch?v=2QqBjJACU4Q"><img src="images/tutorials/ubuntuWireless.png" alt="Ubuntu Wireless" /></a></div>
            <div class="right"><a href="https://www.youtube.com/watch?v=eYBNJ81f8QQ"><img src="images/tutorials/vistaWireless.png" alt="Windows Vista Wireless" /></a></div>
	  </div>
      
     <div id="leftColumn">
		 <!-- Post Starts -->
				<div class="post">
					<img src="images/posts/printer.png" alt="Cut wire" class="thumbnail alignleft" width="100" height="100" />
					<h4 class="title">Freddy has a New Front Desk Printer!</h4>                    
					<p class="post-meta">
					<span class="post-author"><span class="small">by</span> Seth Thoenen</span>
					<span class="post-date"><span class="small">on</span> April 4, 2014</span></p>
					
					<div class="entry">
						<p class="paragraph">
						Freddy has a new front desk printer! To use the new printer, please remove the old printer from your computer and add the new one by connecting to 
						ResPrint. For more information, please click <a href="http://resnet/help/printerSetup.php">here</a>.
						</p>
					</div>
				</div>
			<!-- /.post --> 
			 <!-- Post Starts -->
			<div class="post">
				<img src="images/posts/business_open_sign_red.png" alt="Cut wire" class="thumbnail alignleft" width="100" height="100" />
				<h4 class="title">ResNet is Open Every Weekend!</h4>                    
				<p class="post-meta">
				<span class="post-author"><span class="small">by</span> Seth Thoenen</span>
				<span class="post-date"><span class="small">on</span> September 5, 2013</span></p>
				
				<div class="entry">
					<p class="paragraph">
					ResNet is now open on weekends every weekend! We will be open from 12pm-4pm on both Saturdays and Sundays. So, if you live on campus and are having computer problems, feel free to drop
					by or give us a call at 417-836-6100! 
					</p>
				</div>
			</div>
		<!-- /.post --> 
		 <!-- Post Starts -->
			<div class="post">
				<img src="images/posts/printer.png" alt="Cut wire" class="thumbnail alignleft" width="100" height="100" />
				<h4 class="title">Wells has a New Front Desk Printer</h4>                    
				<p class="post-meta">
				<span class="post-author"><span class="small">by</span> Seth Thoenen</span>
				<span class="post-date"><span class="small">on</span> September 27, 2013</span></p>
				
				<div class="entry">
					<p class="paragraph">
					Wells has a new front desk printer! To use the new printer, please remove the old printer from your computer and add the new one by connecting to 
					ResPrint.
					</p>
				</div>
			</div>
		<!-- /.post --> 
	 	<!-- Post Starts -->
		<div class="post">
			<img src="images/posts/mobo.png" alt="Cut wire" class="thumbnail alignleft" width="100" height="100" />
			<h4 class="title">Interested in Working for ResNet? Sign up for Employment Notifications!</h4>                    
			<p class="post-meta">
			<span class="post-author"><span class="small">by</span> Seth Thoenen</span>
			<span class="post-date"><span class="small">on</span> September 4, 2013</span></p>
			
			<div class="entry">
				<p class="paragraph">
				Each year we hire student workers to join the ResNet team. We currently aren't hiring, but we will be hiring sometime this school year. We have three different student positions. You can find more information about them <a href="http://resnet.missouristate.edu/employment.php">here</a>. If you want to be notified when the application period opens, please email <a href="mailto:resnet@missouristate.edu" target="_top">ResNet@MissouriState.edu</a> and specify which position you are interested in and please specify your first name, last name, and an email address you wish to be reached at. We will send you an email when the application for your desired position opens.
				</p>
			</div>
		</div>
	<!-- /.post --> 
	<!-- Post Starts -->
		<div class="post">
			<img src="images/posts/outage.png" alt="Cut wire" class="thumbnail alignleft" width="100" height="100" />
			<h4 class="title">The Wells Front Desk Printer has Changed</h4>                    
			<p class="post-meta">
			<span class="post-author"><span class="small">by</span> Seth Thoenen</span>
			<span class="post-date"><span class="small">on</span> August 26, 2013</span></p>
			
			<div class="entry">
				<p class="paragraph">
				The printer that was at the front desk of Wells has been taken offline and is in need of repair. We have set up a replacement printer to use for the time being.
				In order to print to the new printer you will need to delete the old one from your computer and re-add it by installing it from &#92;&#92;resprint.
				We apologize for any inconvenience.
				</p>
			</div>
		</div>
	<!-- /.post -->  
	<!-- Post Starts -->
		<div class="post">
			<img src="images/posts/outage.png" alt="Cut wire" class="thumbnail alignleft" width="100" height="100" />
			<h4 class="title">Scheduled Outage</h4>                    
			<p class="post-meta">
			<span class="post-author"><span class="small">by</span> Clyde Miller</span>
			<span class="post-date"><span class="small">on</span> April 10, 2013</span></p>
			
			<div class="entry">
				<p class="paragraph">
				In hopes to resolve the cause of the Internet outage that we experienced this morning, Networking and Telecommunication Services will be taking the network down tonight between approximately 9:30pm and 10:00pm.
				We apologize for the late notice and inconvenience.
				</p>
			</div>
		</div>
	<!-- /.post -->  
	<!-- Post Starts -->
		<div class="post">
			<img src="images/posts/outage.png" alt="Outage" class="thumbnail alignleft" width="100" height="100" />
			<h4 class="title">Scheduled Outage</h4>                    
			<p class="post-meta">
			<span class="post-author"><span class="small">by</span> Clyde Miller</span>
			<span class="post-date"><span class="small">on</span> March 8, 2013</span></p>
			
			<div class="entry">
				<p class="paragraph">
				Due to an Electrical Upgrade in Blair-Shannon, there will be no phone service or network/Internet connectivity from 11:45pm on Saturday, March 9 until 5:30am on Sunday, March 10.
				We apologize for any inconvenience this may cause.
				
				</p>
			</div>
		</div>
	<!-- /.post --> 
	 <!-- Post Starts -->
		<div class="post">
			<img src="images/posts/labThumbnail.png" alt="Lab" class="thumbnail alignleft" width="100" height="100" />
			<h4 class="title">Monroe Apartments now has a Lab and Printer</h4>                    
			<p class="post-meta">
			<span class="post-author"><span class="small">by</span> Clyde Miller</span>
			<span class="post-date"><span class="small">on</span> February 4, 2013</span></p>
			
			<div class="entry">
				<p class="paragraph">
				A computer lab with six computers and student-use printer have been installed in Monroe Apartments.
				To connect to the front desk printer from anywhere in the building, simply follow the tutorials on <a href="help/printerSetup.php">our site</a>.
				
				</p>
			</div>
		</div>
	<!-- /.post --> 	 
 	<!-- Post Starts -->
		<div class="post">
			<img src="images/posts/Win8logo.png" alt="Windows 8 logo" class="thumbnail alignleft" width="100" height="100" />
			<h4 class="title">Windows 8 Tutorials</h4>                    
			<p class="post-meta">
			<span class="post-author"><span class="small">by</span> Clyde Miller</span>
			<span class="post-date"><span class="small">on</span> January 8, 2013</span></p>
			
			<div class="entry">
				<p class="paragraph">
				Fresh off the presses, we have four new tutorials:  <a href="help/printerSetup.php#WIN8PRINT">Windows 8 printing</a>, <a href="wireless/resnet40-Win8.php">Windows 8 wireless setup</a>, <a href="help/bearmailWinPhone8.php">Windows 8 Phone mail setup</a>, and the <a href="wireless/resnet40-WinPhone8.php">Windows 8 Phone wireless guide</a>.
				We hope they make your computer using experience even easier.
				</p>
			</div>
		</div>
	<!-- /.post --> 	 
	
     </div>
     
     <div id="rightColumn">

     	<h3 class="textHeader">Internet Speedtest</h3>
     	<!-- BEGIN SPEED TEST - DO NOT ALTER BELOW-->
     	<script type="text/javascript" src="speedtest/swfobject.js?v=2.2"></script>
     	<div id="mini-demo">
     		Speedtest.net Mini requires at least version 8 of Flash. Please <a href="http://get.adobe.com/flashplayer/">update your client</a>.
     	</div><!--/mini-demo-->
     	<script type="text/javascript">
     	var flashvars = {
     		upload_extension: "php"
     	};
     	var params = {
     		wmode: "transparent",
     		quality: "high",
     		menu: "false",
     		allowScriptAccess: "always"
     	};
     	var attributes = {};
     	swfobject.embedSWF("speedtest.swf?v=2.1.8", "mini-demo", "280", "150", "9.0.0", "speedtest/expressInstall.swf", flashvars, params, attributes);
     	</script>
     	<!-- END SPEED TEST - DO NOT ALTER ABOVE -->

    	<div class="contactButton"> 
        	<a href="contact.php"><img class="aligncenter" src="images/contactUsButtonText.png" alt="Contact Us"/></a>
            <p class="post-meta">(417) 836-6100  |  <a href="/contact.php" title="contact us">resnet@missouristate.edu</a></p>
        </div>
		<div>
			<h3 class="textHeader">Office Hours</h3>
			<p class="post-meta">ResNet is located in the basement of Hutchens House at Missouri State University's Springfield, MO campus.</p>
			<p class="post-meta">Monday: 8am - 5pm</p>
			<p class="post-meta">Tuesday: 8am - 5pm</p>
			<p class="post-meta">Wednesday: 8am - 5pm</p>
			<p class="post-meta">Thursday: 8am - 5pm</p>
			<p class="post-meta">Friday: 8am - 5pm</p>
			<!--<p class="post-meta">Saturday: 12pm - 4pm</p>
			<p class="post-meta">Sunday: 12pm - 4pm</p>-->
			<br />
			<p class="post-meta">ResNet is open from 10am-6pm on the Saturday and Sunday preceding the beginning of the Fall and Spring semsters. ResNet observes all Missouri State University holidays and will be closed if university offices are closed.</p>
			<br />
		</div>
       
		<h3 class="textHeader">Free Anti-Virus</h3>
       <p>
       <a href="http://www.iantivirus.com/"><img name="iantiviruslogo" src="images/iantivirus-logo.png" width="275" height="68" border="0" id="iantiviruslogo" alt="Anti-Virus for Mac" /></a><a href="http://www.microsoft.com/security_essentials/"><img name="microsoftsecurityessentials" src="images/microsoft-security-essentials.png" width="275" height="70" border="0" id="microsoftsecurityessentials" alt="Anti-Virus for Windows" /></a></p>
     
     </div>
            	
	  <?php include_once("includes/footer.inc.php"); ?>
    </div>


</body>
</html>