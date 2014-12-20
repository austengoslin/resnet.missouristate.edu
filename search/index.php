<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="../css/reset.css" type="text/css" />
<link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />
<link rel="stylesheet" type="text/css" href="styles.css" />


    
<title>Resnet :: Site Search</title>

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

	<?php include_once("../includes/navBar_primary.inc.php") ?>
		
	<div id = "wrapper">
	<?php include_once("../includes/header_primary.inc.php") ?>

			<div id = "leftColumn">
           		
    		<div id="tutorial"> 
			<!-- start content -->		
			<h2>Site Search</h2>
<div id="page">



    

    <form id="searchForm" method="post">

        <fieldset>



            <input id="s" type="text" value="<?php echo $_POST['searchField']?>" />



            <input type="submit" value="Submit" id="submitButton" class="submitButton" />



            <div id="searchInContainer">

                <input type="hidden" name="check" value="site" id="searchSite" checked />
              

              


            </div>



 



        </fieldset>

    </form>



    <div id="resultsDiv"></div>

    

</div>

            
            
            <!-- end content -->
                

            </div>	
     	</div>
 		<div id = "rightColumn">
				<?php include_once("../includes/sidePanel_useful.inc.php") ?>
			</div>
	<?php include_once("../includes/footer.inc.php") ?>
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script src="script.js"></script>






</body>
</html>
