<?php

namespace Utils;

class MethodNameValidator
{
    public function isValidMethodName($methodName): bool
    {
        return $this->matchesPattern($methodName) && !$this->isReservedWord($methodName);
    }

    private function matchesPattern($methodName): bool
    {
        $pattern = '/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/';
        return preg_match($pattern, $methodName) === 1;
    }

    private function isReservedWord($methodName): bool
    {
        return in_array($methodName, $this->getReservedWords());
    }

    private function getReservedWords(): array
    {
        return [
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
    }
}
