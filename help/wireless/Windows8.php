
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
        <script type="text/javascript" src="/js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="/js/slickBox.js"></script>

        <title>Resnet :: Tutorials :: Wireless :: Configuring Resnet 40 on Windows 8</title>

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
                    <h2>Configuring Network on Windows 8.1</h2>

                    <p class="answer"><strong>Note:</strong> Wireless on Windows 8.1 does not supported automatic configuration on all wireless network (WLAN) cards, and some may require <a href="#MANUALLY">manual configuration</a>.
                    </p>

                    <iframe style="margin-left: 40px;" class="indent" width="560" height="315" src="//www.youtube.com/embed/DL9Tm4MmLhw" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                    <ol class="indent">
                        <li>
					From the start screen, move your cursor to the upper or lower right-hand corner to pull up the charms menu
                        </li>
                        <img src="/images/wireless/wireless-resnet40-Win8-01.png" alt="Start Screen" class="imgBorder" width="575" />
                        <li>
					Clock on the gear icon.  It will pull up the settings. Select <strong>Network</strong>
                        </li>
                        <img src="/images/wireless/wireless-resnet40-Win8-02.png" alt="Gear Icon" class="imgBorder" />
                        <li>
					Select you network from the list. For students living off campus, this will be <strong>MSU</strong>. For students living in the residence halls, this will be <strong>MSU ResNet</strong>.
                        </li>
                        <img src="/images/wireless/windows8step1.png" alt="selecting the appropriate network" class="imgBorder" />
                        <li>
					When prompted, enter your <a href="http://www.missouristate.edu/BearPass">BearPass Login</a> and your BearPass Password
                        </li>
                        <img src="/images/wireless/windows8step2.png" alt="Entering your user information" class="imgBorder" />
                        <li>
					You may be notified of an issue with verifying the certificate. Select <strong>Connect</strong>
                        </li>
                        <img src="/images/wireless/windows8step3.png" alt="Certficate error" class="imgBorder" />
                    </ol>

                    <h3><a href="#MANUALLY" name="MANUALLY">Setting up Wireless Network Manually on Windows 8</a></h3>
                    <p>
			If the above does not work, you may try manual configuration.
                    </p>
                    <p>
                        <ol class="indent">
                            <li>
					In the Start menu hold down the <strong> Windows </strong> key and press <strong> X </strong>. A menu, like the image below, will pop up on your bottom left. Click on <strong> Control Panel</strong>.
                            </li>
                            <img src="/images/wireless/manualwindows8step1.png" alt="selecting the network properties" class="imgBorder" />
                            <li>
					A window should pop out. On the top right corner, make sure view by is <strong> Small icons</strong>. Click on <strong>Nework and Sharing Center</strong>. The window below should pop up. Click on <strong>Set up a new connection or network</strong>.
                            </li>
                            <img src="/images/wireless/manualwindows8step2.png" alt="Deselecting validating the certificate" class="imgBorder" />
                            <li>
					Select <strong>Manually connect to a wireless network</strong>. For the entry for <strong>Network name</strong>, if you are a student living off campus, this will be <strong>MSU</strong>. For students living in the residence halls, this will be <strong>MSU ResNet</strong>.
					</br>For the <strong>Security type</strong> scroll down to <strong>WPA2-Enterprise</strong> and click <strong>Next</strong>.
                            </li>
                            <img src="/images/wireless/manualwindows8step3.png" alt="Deselecting validating the certificate" class="imgBorder" />
                            <li>
					After succesfully adding the wireless network, it will prompt you to <strong>change connection settings</strong>. Go ahead and click on it.
					Another window should pop up, on the top click on the <strong>Security</strong> tab in click on <strong>Settings</strong> on the right of (PEAP).
					</br>
					Uncheck <strong>Verify the server’s identity by validating the certificate</strong> then select <strong>Configure</strong>. Window should pop up, make sure <strong>Automatically use my Windows logon.</strong> is unchecked, click ok on all windows.
                            </li>
                            <img src="/images/wireless/manualwindows8step5.png" alt="Deselecting validating the certificate" class="imgBorder" />
                            <li>
					Move your mouse towards the bottom right of the screen and open up <strong>Settings</strong>. Click on the <strong>Network</strong> tab, then click on the network you just made and enter your BearPass ID followed by @SGF and BearPass password.
					</br>eg. abc1234@SGF
                            </li>
                            <img src="/images/wireless/manualwindows8step6.png" alt="Deselecting validating the certificate" class="imgBorder" />
                        </ol>

                    </p>

                    <p class="answer">
                                If you have any difficulties with this tutorial, please feel free to
                        <a href="/contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100)
                                or the open access computer labs (417 836-4519) for assistance.
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
