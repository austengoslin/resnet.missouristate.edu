
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

        <title>Resnet :: Tutorials :: Mail Clients :: Seting up your Consoles</title>
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
                    <h2>Game Console Registration and Configuration</h2>
                    <p class="answer">
				To connect a game console to the Missouri State network you first must register its MAC address.
				Outlined below are the steps to accomplish that and guides for finding the MAC address for supported devices.
				If you do not have a computer please <a href="http://resnet.missouristate.edu/contact.php">contact ResNet</a> for assistance.
                    </p>
                    <ol>
                        <li>
				To register a new device, you must have a computer registered to your port.<br />
                            <strong>You cannot register your first device if you are connected to the wireless network.</strong>
                        </li>
                        <li>
				On your computer, open an internet browser of your choice. In the address bar, type:<br />
                            <a href="https://resreg.missouristate.edu">https://resreg.missouristate.edu</a>
                            <img style="max-width: 585px; height: auto;" class="imgBorder" src="/images/consoles/ResReg1.png" alt="ResReg URL" />
                        </li>
                        <li>
				Once at <a href="https://resreg.missouristate.edu">https://resreg.missouristate.edu</a>, click "Log In".
                            <img style="max-width: 585px; height: auto;" class="imgBorder" src="/images/consoles/ResReg2.png" alt="ResReg Home Page" />
                        </li>
                        <li>
				Enter your BearPass Login and Password.
                            <img style="max-width: 585px; height: auto;" class="imgBorder" src="/images/consoles/ResReg3.png" alt="ResReg Login Page" />
                        </li>
                        <li>
				Navigate towards the bottom of the page and click on, "Click here to add/remove/edit a device."
                            <img style="max-width: 585px; height: auto;" class="imgBorder" src="/images/consoles/ResReg4.png" alt="ResReg Summary Page" />
                        </li>
                        <li>
				Once in the Edit Device Registrations, click on "Add Device".
                            <img style="max-width: 585px; height: auto;" class="imgBorder" src="/images/consoles/ResReg5.png" alt="ResReg Device Registrations" />
                        </li>
                        <li>
				Enter the MAC Address of the equipment you wish to register with the format ####.####.#### where # is one of the following: <strong>01234567890abcdef</strong>. Only these characters will be accepted. Once you've entered your MAC Adress, click on "Register".
                            <img style="max-width: 585px; height: auto;" class="imgBorder" src="/images/consoles/ResReg6.png" alt="Adding a new device to ResReg" />
                            <h4>Find your Console's MAC Address</h4>
                            <ul>
                                <li><a href="consoles-xbox.php">Microsoft Xbox</a></li>
                                <li><a href="consoles-xbox360.php">Microsoft Xbox 360</a></li>
                                <li><a href="consoles-gc.php">Nintendo GameCube</a></li>
                                <li><a href="consoles-wii.php">Nintendo Wii</a></li>
                                <li><a href="consoles-ps2.php">Sony PS2</a></li>
                                <li><a href="consoles-ps3.php">Sony PS3</a></li>
                            </ul><br />
                        </li>
                        <li>
				Your device is now registered with ResReg and should have internet access.
                            <img style="max-width: 585px; height: auto;" class="imgBorder" src="/images/consoles/ResReg7.png" alt="Successful ResReg Device Registration" />
                        </li>
                    </ol>



                    <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to
                        <a href="/contact.php" title="contact us">contact</a> either the ResNet Offices (417 836-6100)
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