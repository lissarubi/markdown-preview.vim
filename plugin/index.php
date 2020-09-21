<?php

include_once 'server/Request.php';
include_once 'server/Router.php';
require_once 'vendor/autoload.php';

$router = new Router(new Request());

$router->get('/', function () {
  $data = file_get_contents('/tmp/automarkdata');
  return $data;
});

$router->post('/', function ($request) {
  $parsedown = new Parsedown();
  $dataMarkdown = $request->getBody()['data'];
  $parsedown->setBreaksEnabled(true);
  $dataHTML = $parsedown->text($dataMarkdown);
  file_put_contents('/tmp/automarkdata', $dataHTML);
});
