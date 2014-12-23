
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

        <title>Resnet :: Useful Information</title>
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
                    <h2>Useful Information</h2>
                    <p class="answer">
            	For more information to help you while living in the residence halls, please follow the links below.
                If you have any questions not answered below, please <a href="/contact.php">contact us</a> and we will be happy to help.
                    </p>
                    <table>
                        <tr>
                            <td>
                                <a class="noDec" href="/info/safeCompute.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/computer.png" alt="Computer" />
                                        </div>
                                        <div class="btnText vAlign">
                        Safe Computing Practices
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="noDec" href="/info/bandwidth.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/graph.png" alt="Chart" />
                                        </div>
                                        <div class="btnText vAlign">
                        Bandwidth Quota
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="noDec" href="/info/safeCompute.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/lock.png" alt="Lock" />
                                        </div>
                                        <div class="btnText vAlign">
                        Network Security
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="noDec" href="/info/print.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/printer.png" alt="Chart" />
                                        </div>
                                        <div class="btnText vAlign">
                       Print Quota
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="noDec" href="/labs/">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/desktopcomputer.png" alt="Lock" />
                                        </div>
                                        <div class="btnText vAlign">
                        Computer Labs
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="noDec" href="/Help/Wireless/">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/wifi.png" alt="Chart" />
                                        </div>
                                        <div class="btnText vAlign">
                       Wireless Access
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="noDec" href="/info/faq.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/question.png" alt="Lock" />
                                        </div>
                                        <div class="btnText vAlign">
                        Frequently Asked Questions
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a class="noDec" href="/contact.php">
                                    <div class="largeButton">
                                        <div class="imgWrapper vAlign">
                                            <img class="img" src="/images/info/phone.png" alt="Chart" />
                                        </div>
                                        <div class="btnText vAlign">
                       Contact Us
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>



                </div>


            </div>
            <div id="LeftNav">
                <?php include_once($path . "/includes/LeftNav.php") ?>
            </div>
            <?php include_once($path . "/includes/footer.inc.php") ?>
        </div>



    </body>
</html>