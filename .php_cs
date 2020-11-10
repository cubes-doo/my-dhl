<?php

$rules = [
    '@PSR2'                                     => true,
    'array_syntax'                              => ['syntax' => 'short'],
    'no_multiline_whitespace_before_semicolons' => true,
    'no_short_echo_tag'                         => true,
    'no_unused_imports'                         => true,
    'no_empty_comment'                          => true,
    'not_operator_with_successor_space'         => true,
    'no_useless_else'                           => true,
    'ordered_imports'                           => [
        'sortAlgorithm' => 'length',
    ],
    'no_whitespace_before_comma_in_array' => true,
    // commenting/docblock rules
    'align_multiline_comment'                       => [
        'comment_type' => 'all_multiline'
    ],
    'general_phpdoc_annotation_remove'              => [
        'license', 'copyright', 'category', 'version'
    ],
    'multiline_comment_opening_closing'             => true,
    'no_blank_lines_after_phpdoc'                   => true,
    'no_empty_phpdoc'                               => true,
    'no_trailing_whitespace_in_comment'             => true,
    'phpdoc_add_missing_param_annotation'           => true,
    'phpdoc_align'                                  => true,
    'phpdoc_annotation_without_dot'                 => true,
    'phpdoc_indent'                                 => true,
    'phpdoc_no_empty_return'                        => true,
    'phpdoc_order'                                  => true,
    'phpdoc_scalar'                                 => true,
    'phpdoc_separation'                             => true,
    'phpdoc_trim'                                   => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_no_package'                             => true,
    'single_quote'                                  => true,
    'ternary_operator_spaces'                       => true,
    'trailing_comma_in_multiline_array'             => true,
    'trim_array_spaces'                             => true,

    'no_trailing_comma_in_singleline_array' => false,
    'single_import_per_statement'           => false,
    //'header_comment' => [ // for file-level comment deletion
    //    'header' => '',
    //],
    'binary_operator_spaces' => [
        'operators' => [
            '=' => 'single_space',
        ]
    ],
];

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    );