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

        <title>Resnet :: Tutorials :: Printer Setup</title>
    </head>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
    ?>
    <body>
        <?php include_once($path . "/includes/navBar_primary.inc.php"); ?>

        <div id="wrapper">
            <?php include_once($path . "/includes/header_primary.inc.php"); ?>

            <div id="Main">
                <!-- start content -->
                <div id="tutorial">
                    <h3><a href="#WINVISTA7PRINT" name="WINVISTA7PRINT">Setting up the front desk printer on Windows 7</a></h3>
                    <p class="answer">
                			This will guide you through the setup of the front desk printer in your residence hall on a machine running Windows 7.<br />
                    </p>
                    <ol class="indent">
                        <li>Click on the <strong>Start</strong> button.<br />
                    		In the search box, type <strong>\\resprint.missouristate.edu</strong> and hit Enter.</li>

                        <img class="imgBorder" src="/images/printerSetup-Vista-01.png" alt="printerSetup-Vista-01" />

                        <li>You will be prompted for your Missouri State BearPass Login and password.
                        		Enter <strong>SGF\BearPass Login</strong> OR <strong>BearPass Login@SGF</strong>, then enter your Missouri State password and click OK.</li>
                        <img class="imgBorder" src="/images/printerSetup-Vista-02.png" alt="printerSetup-Vista-02" />
                        <li>A window should pop up. Find the printer for your residence hall <em>(See Table Below)</em>, then right-click and choose <strong>Connect.</strong></li>
                        <img class="imgBorder" src="/images/printerSetup-Vista-03.png" alt="printerSetup-Vista-03" width="575" />

                        <table>
                            <tr>
                                <th>Residence Hall</th>
                                <th>Printer Name</th>
                            </tr>
                            <tr>
                                <td>Blair-Shannon</td>
                                <td>BLAIRLPR</td>
                            </tr>
                            <tr>
                                <td>Freudenberger</td>
                                <td>FREDDYLPR</td>
                            </tr>
                            <tr>
                                <td>Hammons</td>
                                <td>HAMMONSLPR</td>
                            </tr>
                            <tr>
                                <td>Hutchens</td>
                                <td>HUTCHENSLPR</td>
                            </tr>
                            <tr>
                                <td>Kentwood</td>
                                <td>KENTWOODLPR</td>
                            </tr>
                            <tr>
                                <td>Monroe</td>
                                <td>MONROELPR</td>
                            </tr>
                            <tr>
                                <td>Scholars</td>
                                <td>SCHOLARSLPR</td>
                            </tr>
                            <tr>
                                <td>Sunvilla</td>
                                <td>SUNVILLALPR</td>
                            </tr>
                            <tr>
                                <td>Wells</td>
                                <td>WELLSLPR</td>
                            </tr>
                            <tr>
                                <td>Woods</td>
                                <td>WOODSLPR</td>
                            </tr>
                        </table>
                        <li>After a moment, a window should appear that will ask if you want to install a driver for the printer.
                        Click the button to <strong>Install Driver</strong>.
                        This step may take a few minutes, so please be patient.</li>
                        <img class="imgBorder" src="/images/printerSetup-Vista-04.png" alt="printerSetup-Vista-04" />
                        <img class="imgBorder" src="/images/printerSetup-Vista-05.png" alt="printerSetup-Vista-05" />
                        <li>
                        If the following windows appears, you have successfully installed the printer.
                        You can close this window.
                        When you print, this residence hall printer will be one of the options in the drop-down menu.</li>
                        <img class="imgBorder" src="/images/printerSetup-Vista-06.png" alt="printerSetup-Vista-06" />
                        <li>
                        You <strong>MUST</strong> authenticate to \\resprint.missouristate.edu each time you wish to print to the front desk printer.
                        (This means completing steps #1-2.)
                        </li>
                    </ol>
                    <p class="answer">
                	If you have any difficulties with this tutorial, please feel free to
                        <a href="/contact.php" title="contact us">contact</a> the ResNet Offices (417 836-6100) for assistance.
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