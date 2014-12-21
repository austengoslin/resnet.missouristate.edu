<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
        <script type="text/javascript" src="/js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="/js/slickBox.js"></script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-2196753-3', 'missouristate.edu');
            ga('send', 'pageview');
            
        </script>

        <title>Resnet :: Tutorials :: Game Consoles :: Nintendo Wii Registration and Configuration</title>
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
                    <h2>Nintendo Wii Registration and Configuration</h2>
                    <p class="answer">
              If you are registering the Wii as the first device on the port and you have previously downloaded the "Internet Channel" then you can
              register using <a href="http://resreg.missouristate.edu" title="ResReg">http://resreg.missouristate.edu</a> on the "Internet Channel."
              (This only applies to a Wii connected via the wired connection.) &nbsp;<br />
                    </p>

                    <p class="indent">
              (<em>At this time the Wii is not compatible with the Missouri State wireless network.
              While the Wii does support many modern wireless standards, it lacks 802.1X capabilities and does not support "WPA-Enterprise".
              As such, we recommend use of <a href="http://store.nintendo.com/webapp/wcs/stores/servlet/ProductDisplay?lastAction=setCurr&amp;jspStoreDir=NOASTORE&amp;languageId=-1&amp;catalogId=10001&amp;categoryId=62707&amp;productId=117712&amp;currency=USD&amp;storeId=10001&amp;ddkey=SetCurrencyPreference">Nintendo's Wii Lan Adapter</a> to connect your Wii to the wired network.</em>)
                    </p>
                    <h3>Find your MAC</h3>
                    <ol>
                        <li>
                From the Wii Channel menu, select <strong>Wii Options</strong>. (The round "Wii" button in the bottom-left of the screen.)
                        </li>
                        <img class="imgBorder" src="/images/consoles/consoles-wii-01.png" alt="consoles-wii-01" />
                        <li>
                Select <strong>Wii Settings</strong>.
                        </li>
                        <img class="imgBorder" src="/images/consoles/consoles-wii-02.png" alt="consoles-wii-02" />
                        <li>Scroll to the right to "Wii System Settings 2" and select <strong>Internet</strong>.
                        </li>

                        <li>Select <strong>Console Information</strong>.</li>
                        <img class="imgBorder" src="/images/consoles/consoles-wii-05.png" alt="consoles-wii-05" />
                        <li>The wired MAC address of the Wii console is displayed under the <strong>LAN Adapter MAC Address</strong>.</li>


                        <img class="imgBorder" src="../images/consoles/consoles-wii-06.png" alt="consoles-wii-06" />

                    </ol>

                    <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to
                        <a href="/contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100)
                	or the open access computer labs (417 836-5891 option #4) for assistance.
                    </p>

                </div>
                <!-- end content -->
            </div>
            <div id="LeftNav">
                <?php include_once($path . "/includes/LeftNav.php") ?>
            </div>
            <?php include_once($path . "/includes/footer.inc.php") ?>
        </div>



    </body>
</html>