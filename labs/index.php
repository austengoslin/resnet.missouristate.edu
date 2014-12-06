
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="../css/reset.css" type="text/css" />
        <link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />
        <script type="text/javascript" src="../js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="../js/slickBox.js"></script>

        <title>Resnet :: Useful Information :: Residence Hall Computer Labs</title>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-2196753-3', 'missouristate.edu');
            ga('send', 'pageview');
            
        </script>
    </head>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
    ?>
    <body>


        <?php include_once($path . "/includes/navBar_secondary.inc.php") ?>

        <div id="wrapper">
            <?php include_once($path . "/includes/header_secondary.inc.php") ?>

            <div id="Main">

                <div id="tutorial">
                    <!-- start content -->
                    <h2>Residence Hall Computer Labs</h2>
                    <div class="answer">For more information on a particular lab, click on its image
            	below.<br />To view detailed information on all the labs please view
                        <a href="http://rlslabstats:8080/public/current_stats.jsp">Lab Stats</a>.
                    </div>

                    <div id="blairShannon" class="labBox">
                        <p><a href="blairLab.php"><img src="../images/labs/blairlabsm.png" alt="Blair-Shannon Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="blairLab.php">Blair-Shannon Lab</a></p>
                    </div>
                    <div id="freddyLab" class="labBox">
                        <p><a href="freddyLab.php"><img src="../images/labs/freddylabsm.png" alt="Freudenberger Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="freddyLab.php">Freddy Lab</a></p>
                    </div>
                    <div id="hammonsLab" class="labBox">
                        <p><a href="hammonsLab.php"><img src="../images/labs/hammonslabsm.png" alt="Hammons Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="hammonsLab.php">Hammons Lab</a></p>
                    </div>
                    <div id="hutchensLab" class="labBox">
                        <p><a href="hutchensLab.php"><img src="../images/labs/hutchenslabsm.png" alt="Hutchens Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="hutchensLab.php">Hutchens Lab</a></p>
                    </div>
                    <div id="kentwoodLab" class="labBox">
                        <p><a href="kentwoodLab.php"><img src="../images/labs/kentwoodlabsm.png" alt="Kentwood Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="kentwoodLab.php">Kentwood Lab</a></p>
                    </div>
                    <div id="scholarsLab" class="labBox">
                        <p><a href="scholarsLab.php"><img src="../images/labs/scholarslabsm.png" alt="Scholars Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="scholarsLab.php">Scholars Lab</a></p>
                    </div>
                    <div id="sunvillaLab" class="labBox">
                        <p><a href="sunvillaLab.php"><img src="../images/labs/sunvillalabsm.png" alt="Sunvilla Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="sunvillaLab.php">Sunvilla Lab</a></p>
                    </div>
                    <div id="wellsLab" class="labBox">
                        <p><a href="wellsLab.php"><img src="../images/labs/wellslabsm.png" alt="Wells Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="wellsLab.php">Wells Lab</a></p>
                    </div>
                    <div id="wellsLab" class="labBox">
                        <p><a href="woodsLab.php"><img src="../images/labs/woodslabsm.png" alt="Woods Lab" height="90" width="120" class="imgBorder" /></a></p>
                        <p class="center"><a href="woodsLab.php">Woods Lab</a></p>
                    </div>


                    <div class="clear"></div>



                    <!-- end content -->
                </div>


            </div>
            <div id="LeftNav">
                <?php include_once($path . "/includes/LeftNav.php") ?>
            </div>
            <?php include_once($path . "/includes/footer.inc.php") ?>
        </div>



    </body>
</html>