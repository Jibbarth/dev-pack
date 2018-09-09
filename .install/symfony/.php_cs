<?php

## Customize your own with https://mlocati.github.io/php-cs-fixer-configurator/

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'header_comment' => ['header' => ''],
        'heredoc_to_nowdoc' => true,
        'increment_style' => false,
        'list_syntax' => ["syntax" => "short"],
        'modernize_types_casting' => true,
        'native_function_invocation' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'phpdoc_align' => false,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_order' => true,
        'phpdoc_no_package' => false,
        'phpdoc_summary' => false,
        'yoda_style' => null,
    ])
    ->setRiskyAllowed(true)
    ->setFinder(PhpCsFixer\Finder::create()
        ->in(__DIR__ . '/src/')
    )
;
