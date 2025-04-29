
📦 Predefined Constants in PHP
PHP comes with a wide range of predefined constants—these are built into the language and always available. They provide useful information about the PHP environment, version, and the script itself.

You don’t need to define them — just use them directly in your code.

✅ Common Categories of Predefined Constants
1. PHP Version and Environment

<?php
echo PHP_VERSION;         // e.g., 8.1.0
echo PHP_OS;              // Operating System, e.g., Linux or WINNT
echo PHP_INT_MAX;         // Maximum integer value
?>
PHP_VERSION – Current PHP version

PHP_OS – Name of the operating system PHP is running on

PHP_INT_MAX – Largest possible integer

2. Magic Constants
Magic constants change depending on where they are used in the script. They start and end with double underscores __.


Constant	Description
__LINE__	Current line number in the file
__FILE__	Full path and filename of the file
__DIR__	Directory of the file
__FUNCTION__	Name of the current function
__CLASS__	Name of the current class
__METHOD__	Name of the current class method
__NAMESPACE__	Name of the current namespace
Example:


<?php
echo "This is line number " . __LINE__;
echo "The file path is " . __FILE__;
?>
3. Compile-Time Constants
E_ERROR, E_WARNING, E_NOTICE, etc. — Used for error reporting

TRUE, FALSE, NULL — Logical values used throughout PHP


<?php
var_dump(TRUE);  // bool(true)
?>
🧠 Why Learn Predefined Constants?
Debugging: Use __LINE__, __FILE__ for troubleshooting

Environment checks: Use PHP_VERSION to check compatibility

Better logging and automation: Capture file paths, methods, or class names dynamically

🧪 Mini Practice:

<?php
echo "You're running PHP version: " . PHP_VERSION . "<br>";
echo "This script is located in: " . __DIR__;
?>
