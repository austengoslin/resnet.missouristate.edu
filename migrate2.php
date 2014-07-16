<?php 
$html = new DOMDocument();
@$html->loadHtmlFile('http://resnet.missouristate.edu/index.php');
$xpath = new DOMXPath( $html );
$nodelist = $xpath->query( "//*[@class='mainContent']" );
foreach ($nodelist as $n){
echo $n->nodeValue."\n";
}

?>