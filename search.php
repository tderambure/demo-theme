<?php

use Timber\Timber;

$templates = [
    'templates/search.twig',
    'templates/archive.twig',
    'templates/index.twig',
];

$context = Timber::context();

Timber::render(
    $templates,
    $context,
);
