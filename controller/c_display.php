<?php

$someData = $pdo->getUserData();
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'display';
}
// $action = $_REQUEST['action'];
//echo $action;


switch ($action) {
    case 'display':
        include('vue/v_form.php');
        include('vue/v_display.php');
        break;
    case 'newUser':
        $nomPrenom = $_REQUEST['nomPrenom'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];

        $pdo->newUserData($nomPrenom, $email, $message);

        $someData = $pdo->getUserData();
        include('vue/v_form.php');
        include('vue/v_display.php');
        break;

}


?>