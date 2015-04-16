<?php

require_once __DIR__ . '/class/Get.php';

$var = new Get();

echo $var->get->name;

foreach ($_SERVER as $key => $val) {
    echo $key . ' = ' . $val . '<br>';
}
