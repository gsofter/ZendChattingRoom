<?php
$db = new PDO('sqlite:' . realpath(__DIR__) . '/zfchat.db');
$fh = fopen(__DIR__ . '/crud.sql', 'r');
while ($line = fread($fh, 4096)) {
    $db->exec($line);
}
fclose($fh);