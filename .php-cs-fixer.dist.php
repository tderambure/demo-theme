<?php

use PhpCsFixer\Config;

$config = new Config();

return $config->setRules([
    '@Symfony' => true,
    'yoda_style' => false,
    'array_syntax' => ['syntax' => 'short'],
    'no_unused_imports' => true,
    'no_trailing_whitespace' => true,
    'single_blank_line_at_eof' => true,
    'indentation_type' => true,
])
->setFinder(
    PhpCsFixer\Finder::create()
        ->in(__DIR__)
        ->notPath('node_modules')
        ->notPath('var')
        ->notPath('vendor')
        ->notPath('wordpress')
)
;
