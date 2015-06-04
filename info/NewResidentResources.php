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

                <div id="tutorial">
                    <!-- start content -->
                    <h2>New Resident Resources</h2>
                    <p class="answer">
            	A collection of the most useful resources available for new on-campus residents.
                If you have any questions not answered below, please <a href="/contact.php">contact us</a> and we will be happy to help.
                    </p>
                    <table>
                        <tr>
                            <td>
                                <a class="noDec" href="/help/wireless/">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/wifi.png" alt="Wireless Fidelity" />
                                        </div>
                                        <div class="btnText vAlign">
                        Connect to Wi-Fi
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="noDec" href="/help/resreg.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/ethernet.png" alt="Ethernet" />
                                        </div>
                                        <div class="btnText vAlign">
                        Connect to Ethernet
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="noDec" href="/help/mail/">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/letter.png" alt="E-mail" />
                                        </div>
                                        <div class="btnText vAlign">
                        Setup e-mail
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="noDec" href="/info/print.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/printer.png" alt="Printer" />
                                        </div>
                                        <div class="btnText vAlign">
                        Setup printer
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="noDec" href="/help/consoles/consoles.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/gameconsole.png" alt="Gaming Console" />
                                        </div>
                                        <div class="btnText vAlign">
                        Setup gaming console
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="noDec" href="http://helpdesk.missouristate.edu/microsoft-student-advantage-program.htm">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/computer.png" alt="Computer Screen" />
                                        </div>
                                        <div class="btnText vAlign">
                        Free Office 365
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="noDec" href="/info/">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/information.png" alt="Information" />
                                        </div>
                                        <div class="btnText vAlign">
                        More information
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="noDec" href="/Help/">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/tutorial.png" alt="Tutorial" />
                                        </div>
                                        <div class="btnText vAlign">
                        All tutorials
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- //end content -->
            <div id="LeftNav">
                <?php include_once($path . "/includes/LeftNav.php"); ?>
            </div>
            <?php include_once($path . "/includes/footer.inc.php") ?>
        </div>



    </body>
</html>