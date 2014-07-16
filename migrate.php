<?php 
//include_once 'loadPage.class.php';





$doc = new DOMDocument();
$url = $_POST['url'];
$newName = $_POST['newFileName'];




@$doc->loadHTMLFile($url);
$xpath = new DomXPath($doc);
$grabContent = $xpath->query("//*[@class='mainContent']")->item(0);

$doc2 = new DOMDocument();
$grabContent = $doc2->importNode($grabContent, true);
$doc2->appendChild($grabContent);

$outXML = $doc2->saveHTMLFile($newName); 




?>
<?php
$doc = new DOMDocument();
$doc->loadHTMLFile($newName);
echo $doc->saveHTML();
?>








