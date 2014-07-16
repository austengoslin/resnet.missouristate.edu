
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
    
<title>Resnet :: Useful Information :: Bandwidth</title>
</head>

<body>
	<?php include_once("../includes/navBar_secondary.inc.php") ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_secondary.inc.php") ?>

			<div id = "leftColumn">
           		
    		<div id="tutorial">
            <!-- start content -->		
            <h2>Bandwidth Quota</h2>
            <p class="answer">
                Bandwidth is the amount of network traffic that can flow through the network. 
                Missouri State has a limited amount of bandwidth for off-campus connections as it is very expensive to purchase and maintain. 
                <br />
			</p>
			<p class="indent">
                To provide a fair amount of bandwidth for all residents, ResNet has a bandwidth quota system for all users.  
                The bandwidth quota operates on a rolling seven days, meaning all traffic conducted 7 days ago drops off at 
                midnight each night. The cap is 6 gigabytes combined incoming (download) and outgoing (upload) traffic per 
                each 7 day period for all network devices registered to your BearPass Login.  
                You can check the status of how much bandwidth you have used by logging into 
                <a href="http://resreg.missouristate.edu" title="ResReg">http://resreg.missouristate.edu</a>.
                <br /><br />
                Below, you can see a graph of the current network use.  
                The blue line is inbound traffic and the red line is outbound traffic.
                <br /><br />
             </p>
            <img src="https://networking.missouristate.edu/StatseekerGraph.aspx?list=msu%2C2&amp;tfc=range+%3D+now+-+24h+to+now%3B&amp;interval=120&amp;command=Graph&amp;mode=if&amp;tz=America%2FChicago&amp;rtype=BitsPerSecond&amp;title=Internet%20-%20BitsPerSecond&amp;graph_type=Line&amp;db_type=Average&amp;x_step=1&amp;y_height=100&amp;y_gridlines=5&amp;y_max_power=1&amp;x_gridlines=on&amp;legend=on" alt="current bandwidth usage graph" title="current bandwidth usage graph" width="608" height="120"/>
            <p class="indent">
                We have specifically set the bandwidth quota to be high enough so that the vast majority of users will 
                never approach this limit through normal network usage.  The limit is designed to protect the network 
                from the small percentage of users who are generally responsible for the excessive bandwidth consumption that affects everyone on the network.
                The university network has always been a shared resource intended for academic and research use by residents.  
                Personal use of network resources is perfectly acceptable as long as this usage does not adversely affect fellow residents.  
                If your use of network resources negatively impacts others, you may have your data port shut off without prior warning.  
                Access to the network is a privilege that may be revoked if used inappropriately.
            </p>
            <a name="bytes"></a><h3>Bytes @ Night</h3>
            <p class="indent">
                Bytes @ Night is a service offered to all residence hall students to provide more total bandwidth. 
                Starting Spring 2011, bandwidth rates will vary depending on the time of day and the day of the week. 
                The goal of this program is to give students in the residence halls more overall bandwidth and to make the most of our resources.
                The largest discount occurs between midnight and 6:00am.  
				During that period, a 90% discount is in place.
				So, for that period, if you were to stream 10 gigabytes of video, 90% of that will be ignored and only 1 gigabyte (10%) will appear up on your quota. 
                Additionally, it means that most operating system updates that are scheduled for night time updates will not affect a student's quota nearly as much.
				The chart below details the full discount schedule, additionally, the current and upcoming discounts are available by signing into <a href="https://resreg.missouristate.edu">Resreg</a>.
            </p>
            <p>
				Monday - Thursday
			</p>
			<table>			
			<tr>
				<td>12:00am - 6:00am</td>
				<td>90% Discount</td>
			</tr>
			<tr>
				<td>6:01am - 6:00pm</td>
				<td>No Discount</td>
			</tr>
			<tr>
				<td>6:01pm - 8:00pm</td>
				<td>20% Discount</td>
			</tr>
			<tr>
				<td>8:01pm - 11:59pm</td>
				<td>40% Discount</td>			
			</tr>				
			</table>
            <p>
				Friday
			</p>
			<table>
			<tr>
				<td>12:00am - 6:00am</td>
				<td>90% Discount</td>
			</tr>
			<tr>
				<td>6:01am - 6:00pm</td>
				<td>No Discount</td>
			</tr>
			<tr>
				<td>6:01pm - 8:00pm</td>
				<td>40% Discount</td>
			</tr>
			<tr>
				<td>8:01pm - 11:59pm</td>
				<td>60% Discount</td>			
			</tr>				
			</table>
			<p>
				Saturday - Sunday
			</p>
			<table>
			<tr>
				<td>12:00am - 6:00am</td>
				<td>90% Discount</td>
			</tr>
			<tr>
				<td>6:01am - 11:59pm</td>
				<td>60% Discount</td>
			</tr>				
			</table>
			
            
            <h3>What happens if I exceed my bandwidth limit for the week?</h3>
            <p class="indent">
                If you exceed 75% usage of the alloted bandwidth, you will be sent a warning email.  
                This warning should give you time to modify your activity so that you do not exceed the limit.
                If you do exceed the limit you will still be able to access the internet, but your connection speed 
                will be temporarily reduced to that similar to dial-up and you will no longer be able to access wireless.  
                Your connection will remain in this state until enough of your previous traffic has been removed from your traffic profile to bring you below the quota.    
                Please be aware that continued excessive traffic while in penalty can potentially keep you in penalty.
            </p>
            
            <h3>Common reasons for going into penalty</h3>
            <p class="answer">Some things you can do to help from going over your bandwidth quota would be:</p>
            <ol><li class="indent">
                  If you have an anti-virus program, we recommend updating it and running a virus scan.  
                  If you don't have an anti-virus program, you can download one for free from 
                  <a href="http://resnet.missouristate.edu/help/VaSRemoval.php" title="Anti-Virus List">our list of recommendations</a>.
                </li>
                <li class="indent">
                  Spyware can cause high amounts of bandwidth coming out of your computer.  
                  You can download two very good spyware removal programs called <a href="http://www.lavasoft.de/software/adaware/">Ad-Aware</a> 
                  and <a href="http://www.safer-networking.org/en/download/">Spybot</a> for free.
                    More information on spyware removal tools can be found on our <a href="safeCompute.php">safe computer practices</a> page.
                </li>
                <li class="indent">
                  Avoid continuously listening to streaming media such as Internet radio and television.  
                  Even if their data stream is small, it only takes a short time to accrue a significant amount of traffic.  
                  This can also include other applications that involve steaming media, such as iChat or other software.
              </li>
                <li class="indent">
                  Lastly, file-sharing or downloading programs (Morpheus, Limewire, BitTorrent, ect...) typically cause the highest amount of network traffic.
                  Because of the impact these programs have on the network, and since these programs have a high probability of introducing spyware and viruses 
                  to your system, we <strong>strongly</strong> recommend avoiding their use.
                  <br />
                  Additionally, the use of such programs for the purpose of getting music may break copyright law.
                  For more information regarding the legality of of file-sharing, please, see ResNet's <a href="../copyright.php">copyright page</a>.
                    We recommend using legal sources for downloading music; for a thorough compilation of music services, 
                    please see our list of <a href="../LegalMusic.php">legal alternatives</a>.
                    Of course, excessive use of these services can also increase your download traffic.
                    As always, make sure to check your usage summary at <a href="http://resreg.missouristate.edu" title="ResREG">http://resreg.missouristate.edu</a> if in doubt.
                    <br />
                    <br />
                </li>
            </ol>
          		<p class="answer">
                	If you have any difficulties with this tutorial, please feel free to 
                	<a href="../contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100) 
                	or the open access computer labs (417 836-4519) for assistance.
           	  </p>

            
            
            <!-- end content -->
            </div>    

          
     	</div>
 		<div id = "rightColumn">
				<?php include_once("../includes/sidePanel_useful.inc.php") ?>
			</div>
	<?php include_once("../includes/footer.inc.php") ?>
    </div>



</body>
</html>