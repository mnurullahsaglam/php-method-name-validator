# php-method-name-validator

This repository provides a PHP utility class, MethodNameValidator(), which serves as a validator to determine whether a given method name is valid according to PHP naming conventions and rules. The function checks for proper method name formatting, ensuring that it starts with a lowercase letter or an underscore, and is followed by any combination of alphanumeric characters and underscores. Moreover, it prevents the use of reserved keywords and type keywords as method names. This utility helps developers maintain a clean and consistent codebase by adhering to widely-accepted best practices for PHP method naming. This function is valid up to PHP version 8.2.4. If you notice that if there are any missin keywords, please don't hesitate to contribute

There are two ways to use this utility:

1. as a standalone function or as a static method of the MethodNameValidator class. The standalone function is available in the global namespace, and can be used as in index.php.
2. as a trait, which can be used to add the method isValidMethodName() to any class. The trait is available in the namespace App\Classes, and can be used as in index.php.

Please note that for future PHP releases, you might need to update the list of reserved words to stay current with the language's evolving syntax. We encourage you to actively contribute to the repository by creating a pull request if you find that a new keyword has been introduced in a future PHP release. Your contribution will help keep this utility up-to-date and useful for the broader PHP community.

If you find this repository useful, please consider giving it a star to show your support and help others discover this helpful tool.

## :metal: **Long Live PHP!** :metal:
