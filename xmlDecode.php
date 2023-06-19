<?php

$encodedXml = "%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%0A%3Croot%3E%0A%20%20%3Celement%3EEncoded%20Text%3C%2Felement%3E%0A%3C%2Froot%3E";

$decodedXml = urldecode($encodedXml);

$decodedXml = str_replace(array('+', '%0A'), array(' ', ''), $decodedXml);

echo $decodedXml;
