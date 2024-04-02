<?php


declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

$finder = (new PhpCsFixer\Finder())
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true)
    ->exclude(['dev-tools/phpstan', 'tests/Fixtures'])
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@PSR2' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP82Migration' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => false,
            'import_functions' => false,
        ],
        'single_line_empty_body' => false, // this!
        'declare_strict_types' => true,
        'no_unset_on_property' => false,
        'cast_spaces' => false,
        'concat_space' => ['spacing' => 'one'],
        'multiline_whitespace_before_semicolons' => true,
'no_unused_imports' => true,
//        'phpdoc_no_empty_return' => true,
//        'no_empty_phpdoc' => true,
        //        'align_multiline_comment' => true,
//        'multiline_whitespace_before_semicolons' => true,
//        'final_class' => true,
//        'trailing_comma_in_multiline' => true,
    ])
    ->setFinder($finder);