<?php
$auth = 0;
include('lib/includes.php');
$_SESSION = array();
setFlash('Tu es maintenant déconnecté !', 'success');
header('Location:' . WEBROOT . 'index.php');
