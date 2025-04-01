<?php

namespace App;

use Timber\Timber;

$context = Timber::context(
    [
        'title' => 'Page introuvable :/',
    ]
);

Timber::render(
    'templates/404.twig',
    $context
);
