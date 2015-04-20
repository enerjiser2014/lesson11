<?php

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$ctrlClassName = ucfirst($ctrl) . 'Controller';

$method = !empty($_GET['method']) ? $_GET['method'] : 'All';

$method = 'action' . $method;

require __DIR__ . '/controllers/' . $ctrlClassName . '.php';

$controller = new $ctrlClassName;

$controller->$method($itemsList);
