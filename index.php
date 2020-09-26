<?php
$responsePayload = new stdClass();
$responsePayload->ip = $_SERVER['REMOTE_ADDR'];

if (isset($_GET['name'])) {
  $responsePayload->greeting = $_GET['name'];
}

header('Content-Type: application/json');
header('x-hello-world: D.P.');
echo json_encode($responsePayload);