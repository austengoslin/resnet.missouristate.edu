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

        <title>Resnet :: Tutorials :: Mail Clients :: Android</title>
    </head>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
    ?>
    <body>
        <?php include_once($path . "/includes/navBar_primary.inc.php"); ?>

        <div id="wrapper">
            <?php include_once($path . "/includes/header_primary.inc.php"); ?>

            <div id="Main">

                <div id="tutorial">
                    <!-- start content -->
                    <h2>Android Mail Setup</h2>

                    <p class="answer">
			Please note that your phone's set up process may be slightly different than what is presented here, however the settings will remain the same.
                    </p>

                    <ol class="indent">
                        <li>Before you begin setting up Outlook, you should ensure you are using the correct password. Open up an Internet browser and go to <a href="http://outlook.com">Outlook.com</a>
                            <ul class="normal">
                                <li>For your Windows Live ID, enter your <strong>BearPass login</strong> followed by <strong>@live.missouristate.edu</strong></li>
                                <li>For your Password, enter your Live@EDU E-mail password. If it does not work, you may need to change your password at <a href="https://cams.missouristate.edu/selfservice/changepassword.aspx">cams.missouristate.edu</a></li>
                            </ul>
                        </li>
                        <li>
                    On your Android device, select the E-mail icon from the application drawer </li>
                        <img class="imgBorder" src="/help/images/bearmail/bearmail-liveedu-android1.png" alt="E-mail icon" />
                        <li>
                    In the E-mail address field, enter your Bearpass ID followed by @live.missouristate.edu
                        </li>
                        <li>
					For your password, enter your E-mail password, then select "Manual Setup".<br />
                            <em>Note: Your password may be different than the password you use to log into the labs.</em>
                        </li>
                        <img class="imgBorder" src="/help/images/bearmail/bearmail-liveedu-android2.png" alt="Setup Screen 1" width="220" />
                        <li>
                    Select "Exchange account"
                        </li>
                        <img class="imgBorder" src="/help/images/bearmail/bearmail-liveedu-android3.png" alt="Manual Setup Screen" width="220" />
                        <li>
                    The following screen should appear as your phone checks the settings.
                        </li>
                        <img class="imgBorder" src="/help/images/bearmail/bearmail-liveedu-android4.png" alt="Checking incoming settings" width="220" />

                        <li>
                    Enter the following information on the next screen:
                            <ul>
                                <li>
					Domain username: Your BearpassID @live.missouristate.edu
                                </li>
                                <li>
					Password: Your E-mail password
                                </li>
                                <li>
					Exchange server: m.outlook.com
                                </li>
                                <li>
					Check both "Use secure connection (SSL)" and "Accept all SSL certificates"
                                </li>
                            </ul>
                        </li>
                        <li>
                    If you are prompted to give the server remote administration, select "OK"
                        </li>
                        <img class="imgBorder" src="/help/images/bearmail/bearmail-liveedu-android5.png" alt="Remote Administration" width="220" />
                        <li>
                    These next setting will vary depending upon your prefences.  We recommend the following setings:
                            <ul>
                                <li>Email check frequency: Automatic (Push)
                                </li>
                                <li>
					Amount to synchronize: 3 days
                                </li>
                                <li>
					Check “Notify me when email arrives”, “Sync contacts”, and “Sync calendar”
                                </li>
                                <li>
					Select "Next" when you have set these preferences.
                                </li>
                            </ul>
                        </li>
                        <img class="imgBorder" src="/help/images/bearmail/bearmail-liveedu-android6.png" alt="Manual Setup Screen" width="220" />

                        <li>
					On the final screen, you can set a name for your Missouri State E-mail account.
                            <br />
					You account is now set-up!
                        </li>
                    </ol>
                    <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to
                        <a href="../contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100)
                	or the open access computer labs (417 836-5891 option #4) for assistance.
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