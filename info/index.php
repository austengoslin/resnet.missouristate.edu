
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

        <title>Resnet :: Useful Information</title>
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
                    <h2>Useful Information</h2>
                    <p class="answer">
            	For more information to help you while living in the residence halls, please follow the links below.
                If you have any questions not answered below, please <a href="../contact.php">contact us</a> and we will be happy to help.
                    </p>
                    <h3><a href="safeCompute.php">Safe Computing Practices</a></h3>
                    <p class="indent">
                Common practices that can help make your computer more secure.
                    </p>
                    <h3><a href="bandwidth.php">Bandwidth Quota</a></h3>
                    <p class="indent">
                Information about the bandwidth quota system and how it affects you the student.
                    </p>
                    <h3><a href="security.php">Network Security</a></h3>
                    <p class="indent">
                Information on the university's network security measures.
                    </p>
                    <h3><a href="print.php">Print Quota</a></h3>
                    <p class="indent">
                Information about the print quota system on the front desk printers.
                    </p>
                    <h3><a href="../labs/index.php">Labs</a></h3>
                    <p class="indent">
                Information about the labs in each of the residence halls.
                    </p>
                    <ul>
                        <li><a href="../labs/blairLab.php">Blair-Shannon Lab</a></li>
                        <li><a href="../labs/freddyLab.php">Freudenberger Lab</a></li>
                        <li><a href="../labs/hammonsLab.php">Hammons Lab</a></li>
                        <li><a href="../labs/hutchensLab.php">Hutchens Lab</a></li>
                        <li><a href="../labs/kentwoodLab.php">Kentwood Lab</a></li>
                        <li><a href="../labs/scholarsLab.php">Scholars Lab</a></li>
                        <li><a href="../labs/sunvillaLab.php">Sunvilla Lab</a></li>
                        <li><a href="../labs/wellsLab.php">Wells Lab</a></li>
                        <li><a href="../labs/woodsLab.php">Woods Lab</a></li>
                    </ul>
                    <h3><a href="../wireless/index.php">Wireless Access</a></h3>
                    <p class="indent">
                Information about wireless access provided in many of the facilities on campus, including the residence halls.
                    </p>
                    <h3><a href="../faq.php">Frequently Asked Questions</a></h3>
                    <p class="indent">
                Common questions answered.
                    </p>


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