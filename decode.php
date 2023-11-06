<?php

if (isset($_POST['encodedXml'])) {
    $encodedXml = $_POST['encodedXml'];
    $decodedXml = urldecode($encodedXml);
    $decodedXml = str_replace(array('+', '%0A'), array(' ', ''), $decodedXml);
}

if (isset($decodedXml)) { ?>
    <h2>XML Decodificado:</h2>
    <pre><?php echo htmlspecialchars($decodedXml); ?></pre>
<?php } ?>
