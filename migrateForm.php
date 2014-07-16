<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>RESNET SITE RIPPER</title>
<style type="text/css">
body {
	background-color:f0f0f0;
}
#wrapper {
	width: 640px;
	margin-left:auto;
	margin-right:auto;
	padding:10px;
}
#wrapper ul {
	list-style: none;
}
#wrapper li {
	padding:10px;
}

label {
	float:left;
	width:160px;
	padding-right:10px;
	}
	
form input {
	width:240px;
	height:35px;
	}
form select {
	width:240px;
	height:35px;
}
	




</style>

	</head>

	<body>
		<div id = "wrapper">
		<form id = "form" action = "migrate.php" method = "post">
		
		<ul>
			<li><label for = "url">URL:</label><input id = "url" name = "url" value = "http://resnet.missouristate.edu/" /></li>
			<li><label for = "newFileName">NEW URL:</label><input id = "newFileName" name = "newFileName" value = "" /></li>
			<li><label for = "template">TEMPLATE:</label>
			<select name="template">
								<option selected = "selected">Resnet 2 column</option>
								<option>Resnet 1 column</option>
								
			</select></li>
		<li><label for = "submit">SCRAPE PAGE</label><input type = "submit" value = "Scrape Now"></input>	</li>
		</ul>
				
		</form>
		
		
		
		</div>
	
	
	</body>

</html>
