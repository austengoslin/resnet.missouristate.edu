<?php
echo "<table border=\"1\">";



echo "<tr><td>" .$_SERVER['SERVER_NAME'] ."</td><td>SERVER_NAME</td></tr>";
echo "<tr><td>" .$_SERVER['SERVER_SOFTWARE'] ."</td><td>SERVER_SOFTWARE</td></tr>";
echo "<tr><td>" .$_SERVER['SERVER_PROTOCOL'] ."</td><td>SERVER_PROTOCOL</td></tr>";
echo "<tr><td>" .$_SERVER['REQUEST_METHOD'] ."</td><td>REQUEST_METHOD</td></tr>";
echo "<tr><td>" .$_SERVER['REQUEST_TIME'] ."</td><td>REQUEST_TIME</td></tr>";
echo "<tr><td>" .$_SERVER['QUERY_STRING'] ."</td><td>QUERY_STRING</td></tr>";
echo "<tr><td>" .$_SERVER['DOCUMENT_ROOT'] ."</td><td>DOCUMENT_ROOT</td></tr>";

echo "<tr><td>" .$_SERVER['HTTP_ACCEPT_ENCODING'] ."</td><td>HTTP_ACCEPT_ENCODING</td></tr>";
echo "<tr><td>" .$_SERVER['HTTP_ACCEPT_LANGUAGE'] ."</td><td>HTTP_ACCEPT_LANGUAGE</td></tr>";
echo "<tr><td>" .$_SERVER['HTTP_CONNECTION'] ."</td><td>HTTP_CONNECTION</td></tr>";
echo "<tr><td>" .$_SERVER['HTTP_HOST'] ."</td><td>HTTP_HOST</td></tr>";

echo "<tr><td>" .$_SERVER['HTTP_USER_AGENT'] ."</td><td>HTTP_USER_AGENT</td></tr>";
echo "<tr><td>" .$_SERVER['HTTPS'] ."</td><td>HTTPS</td></tr>";
echo "<tr><td>" .$_SERVER['REMOTE_ADDR'] ."</td><td>REMOTE_ADDR</td></tr>";
echo "<tr><td>" .$_SERVER['REMOTE_HOST'] ."</td><td>REMOTE_HOST</td></tr>";
echo "<tr><td>" .$_SERVER['REMOTE_PORT'] ."</td><td>REMOTE_PORT</td></tr>";
echo "<tr><td>" .$_SERVER['SCRIPT_FILENAME'] ."</td><td>SCRIPT_FILENAME</td></tr>";

echo "<tr><td>" .$_SERVER['SERVER_PORT'] ."</td><td>SERVER_PORT</td></tr>";

echo "<tr><td>" .$_SERVER['PATH_TRANSLATED'] ."</td><td>PATH_TRANSLATED</td></tr>";
echo "<tr><td>" .$_SERVER['SCRIPT_NAME'] ."</td><td>SCRIPT_NAME</td></tr>";
echo "<tr><td>" .$_SERVER['REQUEST_URI'] ."</td><td>REQUEST_URI</td></tr>";




echo "</table>"
?>
