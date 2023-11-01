<?php

require_once("model/class.pdoTestMakeo.inc.php");
require_once("root.php");
$pdo = pdoTestMakeo::getPdoTestMakeo();

include("controller/c_display.php");
$action = 'display';

include("footer.php");
?>