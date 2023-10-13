<?php
if(isset($_POST['submit']))
{
    http_response_code(200);
    header('Content-Type: application/json; charset=utf-8');
    $json = <<<JSON
{
  "message": "Your message has been sent."
}
JSON;
    echo $json;
}
else
{
    http_response_code(404);
    header('Content-Type: application/json; charset=utf-8');
    echo '{"error":"Improper page call"}';
}