<?php
$host = 'sql101.infinityfree.com';
$db   = 'if0_40850370_farmacia_db';
$user = 'if0_40850370';
$pass = 'gomes160901';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

$mysqli->set_charset('utf8mb4');
?>
