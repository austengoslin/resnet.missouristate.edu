<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
        <title>Resnet :: Acceptable Use Policy</title>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-2196753-1', 'missouristate.edu');
            ga('send', 'pageview');
            
        </script>

        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
        ?>

    </head>

    <body>
        <?php include_once($path . "/includes/navBar_primary.inc.php"); ?>

        <div id="wrapper">
            <?php include_once($path . "/includes/header_primary.inc.php"); ?>

            <!-- Content -->
            <div id="Main">
                <h2>Connecting a Kindle Fire to the Wireless Network</h2>
                <ol>
                    <li>Tap the gear icon in the top right corner.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-kindle1.png" alt="kindle1" />

                    <li>After the quick settings menu drops down, tap the Wi-Fi icon.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-kindle2.png" alt="kindle2" />

                    <li>Make sure your Wireless Networking slider is set to on. After that, select "resnet 40" from the network list.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-kindle3.png" alt="kindle3" />

                    <li>Change "Phase 2 authentication" to MSCHAPV2. <br />In the "Identity" enter your BearPass login indormation. This is usually similar to abc123. <br /> Put your password in the "Password" box. <br />After you fill those in, tap connect.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-kindle4.png" alt="kindle4" />

                    <li>Congratulations! You should be connected now and your Wi-Fi screen should look like the following image.</li>
                    <img class="imgBorder" src="../images/wireless/wireless-kindle5.png" alt="kindle5" />

                </ol>

                <p class="answer">
If you have any difficulties with this tutorial, please feel free to <a href="/contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100) or the open access computer labs (417 836-4519) for assistance.
                </p>

            </div>
            <!-- //end content -->
            <div id="LeftNav">
                <?php include_once($path . "/includes/LeftNav.php"); ?>
            </div>
            <?php include_once($path . "/includes/footer.inc.php") ?>
        </div>



    </body>
</html>