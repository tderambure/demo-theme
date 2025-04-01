<?php

namespace App;

use Timber\Timber;

require_once __DIR__.'/vendor/autoload.php';

Timber::init();

new DemoTheme();
