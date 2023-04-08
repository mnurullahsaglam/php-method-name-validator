<?php

use Classes\MethodNameValidator;
use PHPUnit\Framework\TestCase;

class MethodNameValidatorTest extends TestCase
{
    private MethodNameValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new MethodNameValidator();
    }

    public function testValidMethodNames()
    {
        $validMethodNames = [
            'getUserName',
            'setAge',
            '_calculateTotal',
            'isValid',
            'processPayment',
            'validMethod7'
        ];

        foreach ($validMethodNames as $methodName) {
            $this->assertTrue(
                $this->validator->isValidMethodName($methodName),
                "Failed asserting that $methodName is valid."
            );
        }
    }

    public function testInvalidMethodNames()
    {
        $invalidMethodNames = [
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

        foreach ($invalidMethodNames as $methodName) {
            $this->assertFalse(
                $this->validator->isValidMethodName($methodName),
                "Failed asserting that $methodName is invalid."
            );
        }
    }
}
