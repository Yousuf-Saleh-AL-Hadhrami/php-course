

🔒 Constants in PHP
A constant is a name for a value that cannot be changed during the execution of a script. Unlike variables, constants do not start with a $ symbol and are always global.

✅ Why Use Constants?
To store fixed values like configuration settings (e.g., API keys, database credentials)

To make your code easier to read and maintain

To prevent accidental changes to important values

📌 Defining Constants
You can define a constant using the define() function:


<?php
define("SITE_NAME", "My PHP Course");
echo SITE_NAME;
?>
🔹 Constants are case-sensitive by default
🔹 You don't use $ when naming or using constants

🧠 Constant Naming Rules
Must start with a letter or underscore

Should be written in UPPERCASE (by convention)

Cannot be redefined once set

🔁 Constants Are Global
Once defined, a constant can be used anywhere in your script—inside functions, classes, or files.


<?php
define("VERSION", "1.0");

function showVersion() {
    echo "Course Version: " . VERSION;
}

showVersion();
?>
🆕 Using const (for class constants or PHP 5.3+)

<?php
const AUTHOR = "John Doe";
echo AUTHOR;
?>
🔸 const is used for class constants or in modern PHP.
🔸 It cannot be used inside if statements or other expressions.

⚠️ Constants vs Variables

Feature	Constant	Variable
Starts with	A name (no $)	$ symbol
Value can change	❌ No	✅ Yes
Global scope	✅ Always	❌ No (unless global)
Defined by	define() / const	$name = value
🧪 Example:

<?php
define("COURSE", "PHP for Beginners");
echo "Welcome to " . COURSE;
?>
