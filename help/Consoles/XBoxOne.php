
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

        <title>Resnet :: Tutorials :: Game Consoles ::  Microsoft Xbox One Registration and Configuration</title>
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
                    <h2>Microsoft Xbox One Registration and Configuration</h2>
                   <p class="answer">
                       Before registering your Xbox One through ResReg, you must have a computer registered to a port. 
                        If you need to know how to do that, you can view our <a href="/help/resreg.php">tutorial</a>
                   </p>
                   
                    <ol>

                        <li>
                            Now that you have that done, all you need is your Xbox One's <strong>Wired MAC Address.</strong> To find it, 
                            go to your console's settings and select Network.
                        </li>
                        <img class="imgBorder" src="/images/consoles/XBONE-1.png" alt="System Settings" width="449" height="250" />
                        <li>
                            Once there select Advanced Settings.
                        </li>
                        <img class="imgBorder" src="/images/consoles/XBONE-2.png" alt="Advanced Settings" width="449" height="250" />

                        <li>
                           Now you should see your Wired MAC Address on the right side. Write it down as you will need to input it on our
                           ResReg system soon.
                        </li>
                        <img class="imgBorder" src="/images/consoles/XBONE-3.png" alt="Network" width="449" height="250" />

                        <li>
                            Next, you will navigate to ResReg on the computer you have already registered there. Once you arrive you will click the
                            Add/Remove/Edit a Device button at the bottom of the screen then enter your Xbox One's MAC Address.
                        </li>
                        <img class="imgBorder" src="/images/consoles/XBONE-4.png" alt="ResReg" width="449" height="250" />

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
