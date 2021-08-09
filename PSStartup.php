<?php
//ob_start();
$path = dirname(__DIR__)."/application/";

include $path.'/core/PSConfig.php';
include $path.'/core/PSSession.php';
include $path.'/core/PSLogin.php';
include $path.'/core/PSUser.php';
include $path.'/core/PSPage.php';
include $path.'/engine/PSData.php';
include $path.'/engine/verify-token.php';

$db = PSData::getInstance();
if (isset($_POST['accesskey'])){
    $db->verify_key($_POST['accesskey']);
} else {
    header("Location: " . BASEPATH . "/404");
}
PSSession::startSession();
include $path.'/core/PSApp.php';

