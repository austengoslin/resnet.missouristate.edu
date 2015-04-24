
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
        <script type="text/javascript" src="/js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="/js/slickBox.js"></script>

        <title>Resnet :: Tutorials :: Wireless :: Setting up wireless</title>

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
                    <h2>Wireless Client Setup</h2>
                    <h3>Access Points</h3>
                    <p>
                        <strong>Note:</strong>
                Connection to each of the wireless networks is based on your Private ID, meaning you can use as many wireless devices as you would like.
                Students receive wireless access automatically through student fees; Faculty and Staff must first contact Telecommunication Services at
                (417) 836-4765 to get their account setup for wireless access.
                        <br /><br /><em>Students in the residence halls will need to configure their devices for the "MSU ResNet" access points.
                Students who have not enrolled in classes or are over the bandwidth quota will be unable to connect to wireless.</em>
                        <br /></p>
                    <h3><strong><span class="underline">MSU / MSU ResNet</span></strong><br />
                    </h3>
                    <p>
                Our wireless networks offer the highest level of security currently available on the Missouri State campus,
                and offers support for many hardware and software combinations.
                        <table>
                            <tr>
                                <td>
                                    <ul>
                                        <li><a href="/Help/Wireless/Android.php">Android</a></li>
                                        <li><a href="/Help/Wireless/ChromeOS.php">Chrome OS</a></li>
                                        <li><a href="/Help/Wireless/iOS.php">iOS</a></li>
                                        <li><a href="/Help/Wireless/Kindle.php">Kindle Fire</a></li>
                                        <li><a href="/Help/Wireless/Windows7.php">Windows 7</a></li>
                                        <li><a href="/Help/Wireless/Windows8.php">Windows 8.1</a></li>
                                        <li><a href="/Help/Wireless/WindowsPhone8.php">Windows Phone 8</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                        <strong><span class="underline">MSU Sponsored</span> - Wireless Access for Visitors</strong>
                    </p>
                    <p>

                        <br />
                The Guest wireless network is a service of the University designed to provide web access for visitors to our campus.
                Approved guests of the University can request Guest wireless access by contacting <a href="http://telecom.missouristate.edu">Telecommunications Services</a> at (417) 836-4765.
                        <br /><br /></p>

                    <h3>Coverage Locations</h3>
                    <p>
                At present, there is complete wireless coverage in the residence halls.
                See the wireless <a href="http://networking.missouristate.edu/wireless/coverage.aspx" title="Campus Wireless Coverage Locations">
                coverage location</a> page maintained by Networking Services gives details of all Springfield campus access points.
                    </p>

                    <h3>Exceptions</h3>
                    <p>
                None of the mainstream video game consoles from Nintendo, Sony, and Microsoft are compatible with the Missouri State Network.
                Though they support many modern wireless standards, they lack 802.1X capabilities and do not support "WPA-Enterprise."
                This includes the <strong>Wii</strong>, <strong>DS</strong>, <strong>Playstation 3</strong>, <strong>PSP</strong>, and <strong>Xbox 360</strong>.
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