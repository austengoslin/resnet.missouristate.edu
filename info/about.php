<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
        <title>Resnet :: About</title>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-2196753-1', 'missouristate.edu');
            ga('send', 'pageview');
            
        </script>

    </head>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
    ?>
    <body>
        <?php include_once($path . "/includes/navBar_primary.inc.php"); ?>

        <div id="wrapper">
            <?php include_once($path . "/includes/header_primary.inc.php"); ?>

            <!-- Content -->
            <div id="Main">
                <div>
                    <h1>About Us</h1>
                    <p>ResNet is the technology hub for students who live on-campus at Missouri State University in Springfield, Missouri. All of our
                        services are free of charge to on-campus residents. If you are having issues related to technology, feel free to
                        contact us and we will assist in any way that we can. </p>
                </div>
                <div>
                    <h1>Who are we?</h1>
                    <p>We are students too! ResNet's staff is comprised of Consultants, Developers, and Designers for a total of two full-time employees and 15 student employees.
                       All of the employees at ResNet have varying backgrounds with computers and most are pursuing degrees and careers related in information technology.</p>
                </div>
                <div>
                    <h1>What do we do?</h1>
                    <p>ResNet supports residence hall printers, residence hall computer labs, wired and wireless networks, and the <a href="http://resreg.missouristate.edu">ResReg</a>
                        network registration system as well as Residence Life employee computers. We are also happy to address of any other technology related issues on-campus
                        students may have with their personal devices.</p>
                </div>
                <div>
                    <h1>How can we help?</h1>
                    <p>Bring your computer or other technology devices down to our offices in the basement of Hutchens House and we can troubleshoot your problems for you for free.
                        We are able to address several issues that may include:</p>
                        <ul class="bullets">
                            <li>Computer hardware and software troubleshooting </li>
                            <li>Virus removal, hard drive diagnostics, etc.</li>
                            <li>Printing support</li>
                            <li>Support for connecting to the University's network</li>
                            <li>Support for game consoles, Smart TVs and streaming devices</li>
                            <li>And much <a href="/help/">more</a>.</li>
                        </ul>

                        <p>If you are are having issues with any of the above or anything else, please <a href="/contact.php">contact us</a> and we would be happy to help.</p>
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