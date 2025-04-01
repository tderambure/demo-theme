<?php

use Timber\Timber;

$templates = ['templates/index.twig'];

if (is_home()) {
    array_unshift(
        $templates,
        'templates/front-page.twig',
        'templates/home.twig'
    );
}

$context = Timber::context(
    [
        'title' => 'Bienvenue !',
        'posts' => Timber::get_posts(
            [
                'post_type' => 'post',
                'posts_per_page' => 20,
            ]
        ),
    ]
);

Timber::render(
    $templates,
    $context
);
