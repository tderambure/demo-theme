<?php

namespace App;

use Timber\Timber;

$context = Timber::context();
$post = $context['post'];
$templates = ['templates/single.twig'];

if (post_password_required($post->ID)) {
    $templates = 'templates/single-password.twig';
}

Timber::render(
    $templates,
    $context
);
