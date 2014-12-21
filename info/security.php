
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

        <title>Resnet :: Useful Information :: Safe Computing</title>
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
                    <h2>Network Security</h2>
                    <h3>Campus Firewall</h3>
                    <p class="indent">
                Residence hall students are protected by the campus-wide Missouri State Firewall.
                The firewall exists to protect both Missouri State and residence hall computers from outside threats, such as: denial of service attacks, bots, viruses, and worms.
                Missouri State's networking department does not open ports for student run servers, which includes SMTP and Web servers.
                        <br /><br />Additionally ResNet requires all students to use the firewall software included with their operating system to compliment the campus wide firewall.
                For additional information on the campus firewall, please visit Networking Services <a href="http://networking.missouristate.edu/pub/news/20060420_campus_firewall.htm" title="Internet Firewall">Internet Firewall</a> page.
                    </p>

                    <h3>Network Control</h3>
                    <p class="indent">
                Missouri State has limited amount of bandwidth, and to help make sure that educational uses of the university's bandwidth take priority Missouri State uses a piece of equipment called Packeteer's Packetshaper.
                What our packetshaper does is it prioritizes certain uses of bandwidth over others, for example peer to peer filesharing traffic is given a very low priority, due to it's overwhelming consumption of bandwidth.
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