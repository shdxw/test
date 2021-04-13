<?php

// examples/namespace.php

require_once __DIR__ . '/src/Autoloader/NamespaceAutoloader.php';

// задаем соответствие для неймспейса Model и регистрируем автозагрузчик
$autoloader = new NamespaceAutoloader();
$autoloader->addNamespace('Model', __DIR__ . '/Model');
$autoloader->register();

$korova = new Model\Korova('mumu', 23);
$korova->displayInfo();