
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

        <title>Resnet :: Tutorials :: Mail Clients</title>
    </head>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
    ?>
    <body>
        <?php include_once("analyticstracking.php") ?>

        <?php include_once($path . "/includes/navBar_primary.inc.php"); ?>

        <div id="wrapper">
            <?php include_once($path . "/includes/header_primary.inc.php"); ?>

            <div id="Main">

                <div id="tutorial">
                    <!-- start content -->
                    <h2>Mail Client Setup</h2>
                    <h3>Setup Information</h3>
                    <p class="answer">You can setup the email as a standard pop3, imap, or an Exchange/Active Sync. Username and
            password used will be the same for all setup types.</p>

                    <strong>Username</strong>
                    <ul>
                        <li>Username: <em>BearPass Login@Live.MissouriState.edu</em></li>
                        <li>Email: <em>BearPass Email@Live.MissouriState.edu</em></li>
                    </ul>
                    <strong>External POP setting</strong>:
                    <ul>
                        <li>Server name: <em>pod51000.outlook.com </em></li>
                        <li>Port: <em>995</em></li>
                        <li>Encryption method: <em>SSL</em></li>
                    </ul>
                    <strong>External IMAP setting</strong>:
                    <ul>
                        <li>Server name: <em>pod51000.outlook.com</em></li>
                        <li>Port: <em>993</em></li>
                        <li>Encryption method: <em>SSL</em></li>
                    </ul>
                    <strong>External SMTP setting</strong>:
                    <ul>
                        <li>Server name: <em>pod51000.outlook.com </em></li>
                        <li>Port: <em>587</em></li>
                        <li>Encryption method: <em>TLS</em></li>
                    </ul>
                    <strong>Exchange/ActiveSync</strong>
                    <ul>
                        <li>Server name: <em>outlook.com</em></li>
                        <li>Logon Domain:<em> (leave blank) </em></li>
                    </ul>

                    <h3>Tutorials</h3>
                    <ul>
                        <li><a href="/help/Mail/Android.php">Android E-mail client</a></li>
                        <li><a href="/help/Mail/iOS.php">iOS Configuration</a></li>
                        <li><a href="/help/Mail/Apple.php">Apple Mail Configuration</a></li>
                        <li><a href="/help/Mail/BlackBerry.php">BlackBerry Configuration</a></li>
                        <li><a href="/Help/Mail/Outlook.php">Microsoft Outlook 2007, 2010 and 2013 Configuration</a></li>
                        <li><a href="bearmailWindowsLiveMail.php">Windows Live Mail</a></li>
                        <li><a href="bearmailWinPhone8.php">Windows Phone 8</a></li>
                    </ul>
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