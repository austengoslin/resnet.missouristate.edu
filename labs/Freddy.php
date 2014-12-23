
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
        <script type="text/javascript" src="/js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="/js/slickBox.js"></script>

        <title>Resnet :: Useful Information :: Residence Hall Computer Labs :: Freudenberger Computer Lab</title>

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
                    <h2>Freudenberger Computer Lab</h2>

                    <div id="photo" class="imgBorderFloatLeft">
                        <img src="/images/labs/Freddy.jpg" width="302" alt="picture of Freudenberger lab" title="Freudenberger Lab Image" />
                    </div>
                    <div id="labText" class="labText">
                Freudenberger House has a 24-hour computer lab offering 12 machines with the latest in hardware and software technologies.
Each computer has access to the Internet, the Missouri State Network, the Missouri State Library Online System, and laser printing to the front desk.
                        <br /><br />	To view more information on the lab computers or to see what computers are currently in use please click
                        <a href="http://rlslabstats:8080/public/custom_stats.jsp?type=current&amp;lab_id=10" target="_blank">Here.</a>

                    </div>

                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="800" height="600" id="editmap" align="middle">
                        <param name="allowScriptAccess" value="sameDomain" />
                        <param name="movie" value="http://146.7.43.13:8080/public/public.swf" />
                        <param name="quality" value="high" />
                        <param name="bgcolor" value="#ffffff" />
                        <param name="FlashVars" value="map_id=10&lab_id=8&srv=http://146.7.43.13:8080" />
                        <param name="map_id" value="10" />
                        <param name="lab_id" value="8" />
                        <embed src="http://146.7.43.13:8080/public/public.swf?map_id=10
&lab_id=8&srv=http://146.7.43.13:8080" quality="high" bgcolor="#ffffff" width="700" height="600" name="editmap" map_id="10" srv="http://146.7.43.13:8080" lab_id="8" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                    </object>
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