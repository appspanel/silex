<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHPUnit48Migration:risky' => true,
        'php_unit_no_expectation_annotation' => false, // part of `PHPUnitXYMigration:risky` ruleset, to be enabled when PHPUnit 4.x support will be dropped, as we don't want to rewrite exceptions handling twice
        'array_syntax' => ['syntax' => 'short'],
        'protected_to_private' => false,
    ])
    ->setRiskyAllowed(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src/')
            ->in(__DIR__.'/tests/')
            ->name('*.php')
    )
;
