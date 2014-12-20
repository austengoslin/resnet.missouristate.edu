<script src="../js/cufon-yui.js" type="text/javascript"></script>
<script src="../js/Museo_Sans_500_400.font.js" type="text/javascript" ></script>
		<script type="text/javascript">
			Cufon.replace('.dc-2'); 
			Cufon.replace('.navText');
			Cufon.replace('.textHeader');
		</script>
        <div id = "header">
            <span class = "logo"><a href="../index.php" title="ResNet"><img src="../images/logo.png" alt="ResNet" /></a></span>
			<!-- Begin Search -->
            <div class = "searchBlock">
				<form id="searchForm2" name="searchForm2" action="../search/index.php" method="post">
               		<input id="searchField" type="text"  value="<?php echo htmlspecialchars($_POST['terms'])?>" name="searchField" size="25" title="search" tabindex="6" class="searchField" />
					<input id = "submit" type = "submit" value = "Search" class = "submitButton" tabindex="7"/>
               	</form>
			</div>
            <!-- End Search -->
			<!-- Begin Navigation -->
            <div id = "navigation">
				<ol>
					<li><span class="navText"><a href = "../help/" tabindex="8" accesskey="t">Tutorials</a></span></li>
					<li><span class="navText"><a href = "../info/" tabindex="9" accesskey="u">Useful Information</a></span></li>
					<li><span class="navText"><a href = "/info/downloads.php" tabindex="10" accesskey="d">Downloads</a></span></li>
				</ol>
			</div>
            <!-- End Navigation -->
		</div>