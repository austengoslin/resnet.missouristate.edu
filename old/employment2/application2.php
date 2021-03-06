<?php
    
    header('Location: http://resnet.missouristate.edu/employment.php');
    
?>
<!--Remove the above header when the employment period is open-->
<?php include("getBrowser.inc.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" href="../css/reset.css" type="text/css" />
        <link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />
        <script src="../js/jquery-1.4.4.min.js" type="text/javascript"></script>
        <title>Resnet :: Employment</title>
    </head>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
    ?>
    <body>

        <?php include_once($path . "/includes/navBar_primary.inc.phpp"); ?>

        <div id="wrapper">
            <?php include_once($path . "/includes/header_primary.inc.php"); ?>
            <div id="content">
                <!-- Content -->
                <div id="fullWidth">

                    <?php
                        
                        
                            $unique_sep = md5(uniqid(time()));
                            $ua=getBrowser();
                        
                        
                            if(isset($_POST['submit'])) {
                                if(trim($_POST['name']) == '') {
                                $hasError = true;
                                $nameError = "class=\"error\"";
                            } else {}
                        
                        
                            if(trim($_POST['email']) == '')  {
                                $hasError = true;
                                $emailError = "class=\"error\"";
                        
                            } else {}	
                            $name = trim($_POST['name']);
                            $email = trim($_POST['email']);
                            $phone = trim($_POST['phone']);
                            $mobile = trim($_POST['mobile']);
                            $address1 = trim($_POST['address1']);
                            $address2 = trim($_POST['address2']);
                            $class = $_POST['class'];
                            $major = trim($_POST['major']);
                            $graduation = trim($_POST['graduation']);
                            $position = trim($_POST['position']);
                            $ip = $_SERVER["REMOTE_ADDR"];
                            $yourbrowser= $name . "'s browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'];
                            $workSummer = trim($_POST['workSummer']);
                            $beforeFall = trim($_POST['beforeFall']);
                            $hoursWork = trim($_POST['hoursWork']);
                            $exp = trim($_POST['exp']);
                            $devExperience = trim($_POST['devExperience']);
                            $hardwareSoftware = trim($_POST['hardwareSoftware']);
                            $whyWork = trim($_POST['whyWork']);
                            $comments = trim($_POST['comments']);
                            $subject = "Application for ". $position;
                                $body = <<<body
                            <style type="text/css">
                            body {
                            background-color:#fff;
                            padding:10px;
                            font-family:Georgia, Times, serif;
                            font-size:12px;
                            }
                        
                        
                            ul li { padding:3px; list-style:none;}
                            table {width:99%; background-color:#f0f0f0; margin-bottom:25px; margin:5px; padding:5px; }
                            td {padding:3px;}
                            .type {width:30%; padding-left:22px;}
                            .info {width:70%; }
                            h2 {text-align:left; margin-left:0px; font-family:Verdana, Geneva, sans-serif; font-size:16px}
                            h1 {font-family:Verdana, Geneva, sans-serif; font-size:22px;}
                            h3 {margin-top:-15px; font-family:Verdana, Geneva, sans-serif; font-size:16px; background-color:#0C6; padding:3px; color:#FFF;}</style>
                        
                        
                            <h1>Resnet Job Application</h1>
                            <h3>Position Desired: $position</h3>
                            <table>
                            <th colspan=\"2><h2>Personal Information</h2></th>
                                <tr> <td class=\"type>Name:</td> <td class=\"info>$name</td> </tr>
                                <tr> <td class=\"type>Email:</td> <td class=\"info>$email</td></tr>
                                <tr> <td class=\"type>Phone :</td> <td class=\"info>$phone</td></tr>
                                <tr> <td class=\"type>Mobile :</td> <td class=\"info>$mobile</td></tr>
                                <tr> <td class=\"type>Address 1:</td> <td class=\"info>$address1</td></tr>
                                <tr> <td class=\"type>Address 2:</td> <td class=\"info>$address2</td></tr>
                            </table>
                        
                            <table>
                             <th colspan=\"2><h2>Student Status</h2></th>
                                <tr> <td class=\"type>Class / Grade: </td> <td class=\"info>$class</td> </tr>
                                <tr> <td class=\"type>Major: </td> <td class=\"info>$major</td> </tr>
                                <tr> <td class=\"type>Graduation Date: </td> <td class=\"info>$graduation</td> </tr>
                        
                            </table>
                            <table>
                             <th colspan=\"2><h2>Work Preference</h2></th>
                                <tr> <td class=\"type>Position Desired?:</td> <td class=\"info>$position</td> </tr>
                                <tr> <td class=\"type>Work Summer?:</td> <td class=\"info>$workSummer</td> </tr>
                                <tr> <td class=\"type>One week before fall?</td> <td class=\"info>$beforeFall</td> </tr>
                                <tr> <td class=\"type>Hours per week?:</td> <td class=\"info>$hoursWork</td> </tr>
                        
                            </table>
                            <table>
                             <th colspan=\"2><h2>Work Experience</h2></th>
                                <tr> <td class=\"type>Development Experience?:</td> <td class=\"info>$exp</td> </tr>
                                <tr> <td class=\"type>Describe Experience:</td> <td class=\"info>$devExperience</td> </tr>
                                <tr> <td class=\"type>Hardware & Software:</td> <td class=\"info>$hardwareSoftware</td> </tr>
                                <tr> <td class=\"type>Why work for ResNet:</td> <td class=\"info>$whyWork</td> </tr>
                                <tr> <td class=\"type>Additional Comments:</td> <td class=\"info>$comments</td> </tr>
                            </table>
                            <p>IP address: $ip of $name <br />
                            $yourbrowser 	
                        
                        
                            </p>
                        body;
                        
                            $attachment = $_FILES['attachment']['tmp_name'];
                            $attachment_name = $_FILES['attachment']['name']; 
                            if (is_uploaded_file($attachment)) { //Do we have a file uploaded?
                              $fp = fopen($attachment, "rb"); //Open it
                              $data = fread($fp, filesize($attachment)); //Read it
                              $data = chunk_split(base64_encode($data)); //Chunk it up and encode it as base64 so it can emailed
                                fclose($fp);
                            }
                            //Let's start our headers
                            $headers = "From: $name<" . $_POST['email'] . ">\r\n";
                            $headers .= "Reply-To: <" . $_POST['email'] . ">\r\n"; 
                            $headers .= "MIME-Version: 1.0\n";
                            $headers .= "Content-Type: multipart/related; type=\"multipart/mixed\"; boundary=\"----=MIME_BOUNDRY_main_message\"\r\n"; 
                            $headers .= "This is a multi-part message in MIME format.\r\n";
                            $headers .= "------=MIME_BOUNDRY_main_message \r\n"; 
                            $headers .= "Content-Type: multipart/mixed; boundary=\"$unique_sep\"\r\n"; 
                        
                            $message = "------=MIME_BOUNDRY_message_parts\r\n";
                            $message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"; 
                            $message .= "Content-Transfer-Encoding: quoted-printable\r\n"; 
                            $message .= "\r\n"; 
                        
                            $message .= $body;
                            $message .= "\r\n"; 
                            $message .= "------=MIME_BOUNDRY_message_parts--\r\n"; 
                            $message .= "\r\n"; 
                            $message .= "------=MIME_BOUNDRY_main_message\r\n"; 
                            $message .= "Content-Type: application/octet-stream;\r\n\tname=\"" . $attachment_name . "\"\r\n";
                            $message .= "Content-Transfer-Encoding: base64\n";
                            $message .= "Content-Disposition: attachment;\n\tfilename=\"" . $attachment_name . "\"\r\n\r\n";
                            $message .= $data; //The base64 encoded message
                            $message .= "\r\n"; 
                            $message .= "------=MIME_BOUNDRY_main_message--\r\n"; 
                        
                            // send the message
                        
                           if(!isset($hasError)) {
                            mail('resnet@missouristate.edu', $subject, $message, $headers);
                            echo "<div class=\"success\">Your application has been submitted </div>"; }
                            else { echo "<!-- error message -->"; }
                          }
                        
                    ?>

                    <?php if ($hasError == true) { echo "<div class=\"hasError\">Make sure all required fields are filled out</div>"; } ?>
                    <form enctype="multipart/form-data" name="send" method="post" action="index.php">
                        <input type="hidden" name="action" value="send" />
                        <fieldset class="floatLeft">
                            <legend>Personal Information</legend>
                            <p>&nbsp;</p>
                            <ul>
                                <li><label for="name">Full Name:</label><input name="name" type="text" id="name" value="" size="28" maxlength="50" <?php if ($haserror == true) { echo $nameerror; } ?>="<?php if ($hasError == true) { echo $nameError; } ?>" />


                                </li>
                                <li><label for="email">Email:</label><input name="email" type="text" id="email" value="" size="28" maxlength="50" <?php if ($haserror == true) { echo $emailerror; } ?>="<?php if ($hasError == true) { echo $emailError; } ?>" />
                                </li>
                            </ul>
                            <ul>
                                <li><label for="phone">Phone Number:</label><input name="phone" type="text" id="phone" value="" size="28" maxlength="20" /></li>
                                <li><label for="mobile">Mobile Number:</label><input name="mobile" type="text" id="mobile" value="" size="28" maxlength="20" /> </li>
                            </ul>
                            <ul>
                                <li><label for="address1">Local Address 1:</label><input name="address1" type="text" id="address1" value="" size="28" maxlength="40" /></li>
                                <li><label for="address2">Local Address 2:</label><input name="address2" type="text" id="address2" value="" size="28" maxlength="40" /></li>
                            </ul>

                        </fieldset>

                        <fieldset class="floatRight">
                            <legend>Student Status</legend>
                            <ul>
                                <li><label for="class">Class:</label>

                                    <select id="class" name="class">
                                        <option>Freshman</option>
                                        <option>Sophomore</option>
                                        <option>Junior</option>
                                        <option>Senior</option>
                                        <option>Graduate</option>
                                        <option>Other</option>
                                    </select>
                                </li>

                                <li><label for="major">Major:</label><input name="major" type="text" id="major" size="28" maxlength="50" /></li>
                                <li><label for="graduation">Graduation Date:</label><input name="graduation" type="text" id="graduation" size="28" maxlength="50" /></li>

                            </ul>


                        </fieldset>
                        <fieldset class="floatRight">
                            <legend>Work Experience</legend>
                            <ul>
                                <li><label for="devExperience">Do you have any web development experience?:</label> Yes&nbsp;
                                    <input type="radio" name="exp" id="exp" value="Yes" />
            		No&nbsp;<input type="radio" name="exp" id="devExperience" value="No" />
                                </li>
                                <br />
                                <br />
                                <li><p>If yes, please describe your experience:</p>
                                    <textarea name="devExperience" cols="45" rows="3" id="devExperience"></textarea>
                                </li>
                                <li><p>Please describe your work or personal experience with computer hardware and software:</p>
                                    <textarea name="hardwareSoftware" cols="45" rows="3" id="hardwareSoftware"></textarea>
                                </li>
                                <li><p>Why do you wish to work for ResNet?:</p>
                                    <textarea name="whyWork" cols="45" rows="3" id="whyWork"></textarea>
                                </li>
                                <li><p>Additional Comments:</p>
                                    <textarea name="comments" cols="45" rows="3" id="comments"></textarea>
                                </li>
                                <li> <input type="submit" name="submit" value="submit" class="submit" /></li>
                            </ul>


                        </fieldset>
                        <fieldset class="floatLeft">
                            <legend>Work Preference</legend>
                            <ul>
                                <li><label for="position">Position Desired:</label>
                                    <select id="position" name="position">
                                        <option>All Positions</option>
                                    </select>
                                </li>

                                <li><label for="workSummer">Can you work this summer?:</label> Yes&nbsp;
                                    <input type="radio" name="workSummer" id="workSummer" value="Yes" />
            No&nbsp;<input type="radio" name="workSummer" id="workSummer" value="No" /> </li>
                                <br />

                                <li><label for="beforeFall">Can you start working one week prior to this Fall? </label> Yes&nbsp;
                                    <input type="radio" name="beforeFall" id="beforeFall" value="Yes" />
            No&nbsp;<input type="radio" name="beforeFall" id="beforeFall" value="No" /></li>
                                <br />
                                <br />

                                <li><label for="hoursWork">How many hours/week can you work next semester?</label>
                                    <input name="hoursWork" type="text" id="hoursWork" size="3" maxlength="2" /></li>

                            </ul>
                        </fieldset>

                        <fieldset class="floatRight">
                            <legend>Resume / CVS </legend>
                            <ul>
                                <li><p>PDF or DOC(X)</p><input type="file" name="attachment" id="attachment" /></li>

                            </ul>
                        </fieldset>


                    </form>



                </div>
            </div>

            <!-- End Content -->
            <?php  include_once("../includes/footer.inc.php") ?>
        </div>



    </body>
</html>