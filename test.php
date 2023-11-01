<?php
require_once("model/class.pdoTestMakeo.inc.php");
$pdo = pdoTestMakeo::getPdoTestMakeo();	 
            $nomPrenom = $_REQUEST['nomPrenom'];
            $email = $_REQUEST['email'];
            $message = $_REQUEST['message'];
            echo '  nomPrenom : ' . $nomPrenom . '   email : ' . $email . '   message : ' . $message;
            $pdo->newUserData($nomPrenom,$email,$email);
          


?>