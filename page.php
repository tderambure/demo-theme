<?php

namespace App;

use Timber\Timber;

$context = Timber::context();

Timber::render(
    'templates/page.twig',
    $context
);
