<?php

namespace App;

use Timber\Site;
use Timber\Timber;

class DemoTheme extends Site
{
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'theme_supports']);
        add_action('init', [$this, 'register_post_types']);
        add_action('init', [$this, 'register_taxonomies']);

        add_filter('timber/context', [$this, 'add_to_context']);
        add_filter('timber/twig/filters', [$this, 'add_filters_to_twig']);
        add_filter('timber/twig/functions', [$this, 'add_functions_to_twig']);

        parent::__construct();
    }

    public function register_post_types(): void
    {
    }

    public function register_taxonomies(): void
    {
    }

    public function add_to_context(array $context): array
    {
        $context['stuff'] = 'I am a value set in your functions.php file';
        $context['notes'] = 'These values are available everytime you call Timber::context();';
        $context['menu'] = Timber::get_menu('primary_navigation');
        $context['site'] = $this;

        return $context;
    }

    public function theme_supports(): void
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    public function uppercaseFirstWord(string $text): string
    {
        $words = explode(' ', $text);

        if (count($words) === 1) {
            return $text;
        }

        $words[0] = strtoupper($words[0]);

        return implode(' ', $words);
    }

    public function add_filters_to_twig(array $filters): array
    {
        $additional_filters = [
            'uppercaseFirstWord' => [
                'callable' => [
                    $this,
                    'uppercaseFirstWord',
                ],
            ],
        ];

        return array_merge(
            $filters,
            $additional_filters
        );
    }

    public function add_functions_to_twig(array $functions): array
    {
        $additional_functions = [
            'get_query_var' => [
                'callable' => 'get_query_var',
            ],
        ];

        return array_merge(
            $functions,
            $additional_functions
        );
    }
}
