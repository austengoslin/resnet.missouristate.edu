<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
        <title>Resnet :: New Resident Resources</title>

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
                <h2>Get online</h2>
                <p class="paragraph">
					Once you have registered for classes you may access "MSU ResNet" wireless network using your private ID.
                    <a href="/help/wireless/">Click here for more information.</a>
                </p><p class="paragraph">
                    If you need to connect a device to an orange Ethernet port in your room, you will first need to register your device.
                    <a href="/help/resreg.php">Click here for more information.</a>
                </p><br>
                <h2>Setup email</h2>
                <p class="paragraph">
                    You may wish to setup MSU e-mail access from your personal computer or mobile device.
                    <a href="/help/Mail/">Click here for more information.</a>
                </p><br>
                <h2>Setup printer access</h2>
                <p class="paragraph">
                    You should setup access to your Residence Hall printer so that you can print.
                    <a href="/help/Printing">Click here for more information.</a>
                </p><br>
                <h2>Setup gaming console</h2>
                <p class="paragraph">
                    You may wish to connect your Ethernet enabled gaming console to the Internet.
                    <a href="/help/Consoles/consoles.php">Click here for more information.</a>
                </p><br>
                <h2>General help</h2>
                <p class="paragraph">
                    There are many resources available for you if you need additional assistance.
                    <a href="/help/">Click here for more information.</a>
                </p><br>
            </div>
            <!-- //end content -->
            <div id="LeftNav">
                <?php include_once($path . "/includes/LeftNav.php"); ?>
            </div>
            <?php include_once($path . "/includes/footer.inc.php") ?>
        </div>



    </body>
</html>