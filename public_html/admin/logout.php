<? /*php
session_start();
session_destroy();
header('Location: admin_login.php');
exit;  */


require_once __DIR__ . '/../../src/Auth.php';

Auth::logout();
header('Location: admin_login.php');
exit;
