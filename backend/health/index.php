<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$ret = [
    'msg' => 'healthy',
];
print json_encode($ret);
?>

