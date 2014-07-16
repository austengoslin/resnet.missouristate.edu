<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2196753-3', 'missouristate.edu');
  ga('send', 'pageview');

</script>

<title>Resnet :: Contact Us</title>
</head>

<body>
	<?php include_once("includes/navBar_primary.inc.php"); ?>
		
	<div id = "wrapper">
	<?php include_once("includes/header.inc.php"); ?>
		<div id="content">
			<!-- Content -->
        
        

        <div id="fullWidth">
	
            <?php

if(isset($_POST['submit'])) {

	if(trim($_POST['name']) == '') {
		$hasError = true;
		print "<p class=\"contactError\">Please fill out your name</p>";
	} else {
		$name = trim($_POST['name']);
		
	}
	
	if(trim($_POST['subject']) == '') {
		$hasError = true;
		print "<p class=\"contactError\">Please select a subject for the message</p>";
	} else {
		$subject = trim($_POST['subject']);
	}
	
	if(trim($_POST['email']) == '')  {
		$hasError = true;
		print "<p class=\"contactError\">Please provide your email</p>";
	
	} else {
		$email = trim($_POST['email']);
	}
	
	
	
	if(trim($_POST['phone']) == '')  {
		$hasError = true;
		print "<p class=\"contactError\">Fill out your phone number please</p>";
	 
	} else {
		$phone = trim($_POST['phone']);
	}
	
	if (trim($_POST['bpNumber']) == '') {
		$hasError = true;
		print "<p class=\"contactError\">Please fill out your BearPass ID</p>";
	} else if (!preg_match("^[mM8]\d{8}$\s*^", trim($_POST['bpNumber']))) { // Checks for an M or an 8 followed by 8 digits for a total of 9 characters
		$hasError = true;
		print "<p class=\"contactError\">Your BearPass ID is invalid</p>";
	} else {
		$bpNumber = trim($_POST['bpNumber']);
	}
	
	
	if(trim($_POST['message']) == '') {
		$hasError = true;
		print "<p class=\"contactError\">You left the message field blank</p>";
	} else {
		if(function_exists('stripslashes')) {
			$message = stripslashes(trim($_POST['message']));
		} else {
			$message = trim($_POST['message']);
		}
	}

	
	if(!isset($hasError)) {
		$emailTo = 'resnet@missouristate.edu'; //Put your own email address here
		  $body = "
      <html>
			<head>
			  <title>Resnet Contact Form</title>
			</head>
			<body style=\"font:9pt Verdana, Arial, Helvetica, sans-serif;\">
			  <p>Received: " . date("F jS Y") . "</p>
				<table width=\"100%\" style=\"font-size:9pt;border:1px solid #333;\">
				<tr style=\"background-color:#f0f0f0;\">
				  <th colspan=\"4\" style=\"border-bottom:1px solid #333;font-size:12pt;\">ResNet Contact Form
				  </th>
				</tr>
				<tr> 
				  <td>Student Name:</td>
				  <td>".$name."</td>
				  <td>Bear Pass #:</td>
				  <td>".$bpNumber."</td>
				</tr>
				<tr>
				  <td>Residence Hall:</td>
				  <td>".$_POST["building"]."</td>
				  <td>Operating System:</td>
				  <td>".$_POST["os"]."</td>
				</tr>
				<tr>
				  <td>Phone Number:</td>
				  <td>".$_POST["phone"]."</td>
				  <td>Email Address:</td>
				  <td>".$_POST["email"]."</td>
				</tr>
				
				<tr>
				  <td>Subject:</td>
				  <td>".$_POST["subject"]."</td>
				  <td></td>
				  <td></td>
				</tr>
				<tr>
					<td colspan=\"4\">Message:</td>
				<tr>
				<tr>
					<td colspan=\"4\">".$_POST["message"]."</td>
				<tr>
				<tr>
				<td></td><td></td><td></td><td></td>
				</tr>

				</table>
			</body>
		  </html>";
		$headers = "From: $name<" . $_POST['email'] . ">\n";
    	$headers .= "Reply-To: <" . $_POST['email'] . ">\n"; 
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n"; 
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}



?>
            
             

            
         
              	<?php if(isset($hasError)) { //If errors are found ?>
				
				<?php } 
				if ($emailSent) {	
				echo "<div class=\"success\">Your message has been sent</div>"; 
				
				
				
				}
					
				
				?>  
                
                
                      
			<script type="text/javascript">
			var __machform_url = 'https://forms.missouristate.edu/embed.php?id=12422';
			var __machform_height = 953;
			</script>
			<div id="mf_placeholder"></div>
			<script type="text/javascript" src="https://forms.missouristate.edu/js/jquery.min.js"></script>
			<script type="text/javascript" src="https://forms.missouristate.edu/js/jquery.ba-postmessage.min.js"></script>
			<script type="text/javascript" src="https://forms.missouristate.edu/js/machform_loader.js"></script>
			  <!-- <form id="contactForm" action="contact.php" method="post">
			     <div class="floatLeft">
                 <fieldset>
                    <legend> Contact Information </legend>
                    <ul>
						<li><label for="name">Your Name:</label>
						<input type="text" id="name" name="name" size="25" value="<?php echo $_POST["name"]; ?>"/></li>
						<li><label for="email">Your Email Address:</label>
				    	<input type="text" id="email" name="email" size="25" value="<?php echo $_POST["email"]; ?>"/></li>
						<li><label for="phone">Your Phone Number:</label>
				    	<input type="text" id="phone" name="phone" size="25" value="<?php echo $_POST["phone"]; ?>"/></li>
						<li><label for="bpNumber">Bear Pass Number:</label>
                        <input type="text" id="bpNumber" name="bpNumber" size="25" value="<?php echo $_POST["bpNumber"]; ?>"/></li>
						<li><label for="building">Building:</label>
						<select name="building" id="building">
								
								
                                <?php if (isset($_POST['building']) )
								{
									echo "<option selected=\"selected\">$_POST[building]";
								}
								
								else { echo "<option selected=\"selected\">Choose the building you live in</option>"; }
								?>
                                <option>Blair - Shannon</option>								
								<option>Freudenberger</option>
								<option>Hammons House</option>
								<option>Hutchens House</option>
								<option>Kentwood Hall</option>
								<option>Monroe Apartments</option>
								<option>Scholars House</option>
								<option>Sunvilla Tower</option>
                                <option>Wells House</option>
                                <option>Woods House</option>
							</select>
                        </li>
						<li><label for="os"> System:</label>
							<select name="os" id="os">
								<?php if (isset($_POST['os']) )
								{
									echo "<option selected=\"selected\">$_POST[os]";
								}
								
								else { echo "<option selected=\"selected\">Choose your Operating System</option>"; }
								?>
                                
                                
                             
								<option>Windows (8)</option>
								<option>Windows (7)</option>
								<option>Windows (Vista)</option>
								<option>Windows (XP)</option>
								<option>Mac 10.9 (Mavericks)</option>
								<option>Mac 10.8 (Mountain Lion)</option>
								<option>Mac 10.7 (Lion)</option>
								<option>Mac 10.6 (Snow Leopard)</option>
								<option>Mac 10.5 (Leopard)</option>
								<option>Linux</option>
								<option>All Others</option>
							</select>
						</li>
						<li><label for="subject">Message Subject:</label>
							 <select name="subject" id="subject">
								<?php if (isset($_POST['os']) )
								{
									echo "<option selected=\"selected\">$_POST[subject]";
								}
								
								else { echo "<option selected=\"selected\">Choose an issue</option>"; }
								?>
                                
                                
                                
								<option>General Question</option>
                                <option>Internet Connection (Wired)</option>
								<option>Internet Connection (Wireless)</option>
								<option>Internet Connection (Game Console)</option>
								<option>Internet Connection (Wall Jack)</option>
								<option>Internet Connection (Shut Off - File Sharing)</option>
								<option>Internet Connection (Shut Off - Other)</option>
								<option>Unable to Print (Personal Printer)</option>
								<option>Unable to Print (Front Desk Printer)</option>
								<option>Virus / Spyware Issue</option>
								<option>Hardware Problem (Hard Drive)</option>
								<option>Hardware Problem (Video Card)</option>
								<option>Hardware Problem (Monitor)</option>
								<option>Hardware Problem (Other)</option>
							</select>
						</li>
						</ul>

                </fieldset>
                </div>
                <div class="floatRight">
					<fieldset>
                    <legend> Problem (please be descriptive)</legend>
                    <ul>
						<li>
                       		<textarea id="message" name="message" rows="16" cols="25" /><?php echo $_POST["message"]; ?></textarea>
                    	</li>
              		</ul>	
			  					
					<input type="submit" name="submit" value="submit" class="submit" />
				</fieldset>
                </div>
                
                
               
          </form> -->
          
		</div>
     </div>
       
          <!-- End Content -->
	<?php include_once("includes/footer.inc.php") ?>
    </div>



</body>
</html>