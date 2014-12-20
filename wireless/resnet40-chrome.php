
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="../css/reset.css" type="text/css" />
        <link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />
        <script type="text/javascript" src="../js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="../js/slickBox.js"></script>

        <title>Resnet :: Tutorials :: Wireless :: Configuring Resnet 40 on Windows 7</title>

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


        <?php include_once($path . "/includes/navBar_primary.inc.php") ?>

        <div id="wrapper">
            <?php include_once($path . "/includes/header_primary.inc.php") ?>

            <div id="Main">

                <div id="tutorial">
                    <!-- start content -->
                    <h2>Configuring Resnet 40 on Chrome OS</h2>
                    <p>
			While the theme and other UI settings of your distribution of Chrome OS may differ from those picture, the settings will remain the same.
                    </p>
                    <p><em>
			Note: Your computer must have patch 0.12.362.2 or better to connect to our network.
                        </em></p>

                    <ol class="indent">
                        <li>
                    Select the wireless icon in the righthand corner</li>
                        <img class="imgBorder" src="../images/wireless/wireless_chrome_01.png" alt="wireless-resnet40-chrome-1" />
                        <li>Choose "resnet 40" from the list of available networks</li>
                        <img class="imgBorder" src="../images/wireless/wireless_chrome_02.png" alt="wireless-resnet40-chrome-2" />
                        <li>When the above window appears, enter the following information:
                            <ul>
                                <li>EAP method: PEAP</li>
                                <li>Phase 2 Authentication: Automatic</li>
                                <li>Server CA certificate: Default</li>
                                <li>User Certificate: None</li>
                                <li>Identity: Your Bearpass Login</li>
                                <li>Password: Your Bearpass Password</li>
                                <li>Leave the "Anonymous Identity" field blank.</li>
                            </ul></li>

                        <li>Once the information has been added, click "connect"</li>

                        <li>Congratulations! You should now be able to access the Internet</li>

                    </ol>
                    <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to
                        <a href="../contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100)
                	or the open access computer labs (417 836-5891 #4) for assistance.
                    </p>



                    <!-- end content -->
                </div>
            </div>
            <div id="LeftNav">
                <?php include_once("../includes/LeftNav.php") ?>
            </div>
            <?php include_once("../includes/footer.inc.php") ?>
        </div>



    </body>
</html>
