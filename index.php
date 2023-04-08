<?php

function isValidMethodName($methodName): bool
{
    // The pattern checks for a valid PHP method name:
    // - Starts with a lowercase letter or underscore
    // - Followed by any number of alphanumeric characters or underscores
    $pattern = '/^[a-z_][a-zA-Z0-9_]*$/';

    // An array of PHP reserved words including type keywords
    $reservedWords = [
        'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const',
        'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor',
        'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final', 'finally', 'for',
        'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof',
        'insteadof', 'interface', 'isset', 'list', 'namespace', 'new', 'or', 'print', 'private', 'protected',
        'public', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use',
        'var', 'while', 'xor', 'yield', 'bool', 'int', 'float', 'string', 'object', 'mixed', 'iterable', 'resource',
        'null', 'true', 'false', 'readonly', '__CLASS__', '__DIR__', '__FILE__', '__FUNCTION__', '__LINE__',
        '__METHOD__', '__NAMESPACE__', '__TRAIT__',
    ];

    // Return false if the method name is a reserved word
    if (in_array($methodName, $reservedWords)) {
        return false;
    }

    // Return true if the method name matches the pattern, false otherwise
    return preg_match($pattern, $methodName) === 1;
}

$methodNames = [
    'getUserName',
    'setAge',
    '_calculateTotal',
    'isValid',
    'processPayment',
    'validMethod7',
    'bool',
    'echo',
    '__CLASS__',
    'readonly',
    '7invalidMethod',
    'Method-With-Dash',
    '123fetchData',
    '$invalidName',
    'function',
    'echo',
    'var',
    '-startProcessing',
    '@specialMethod',
    'new',
    'try',
    'catch',
    'finally',
    'protected',
    'private',
    'static',
    '#hashtagMethod',
];

foreach ($methodNames as $methodName) {
    if (isValidMethodName($methodName)) {
        echo "The method name $methodName is valid.";
    } else {
        echo "The method name $methodName is not valid.";
    }
    echo '<br>';
}
