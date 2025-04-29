

💼 Variables in PHP
A variable is a named container used to store data, such as text, numbers, or arrays. Variables allow your PHP programs to work dynamically by remembering values throughout your script.

🧾 How to Declare a Variable
All variables in PHP start with a dollar sign ($)

The variable name is case-sensitive

It must begin with a letter or underscore, followed by letters, numbers, or underscores


<?php
$name = "Alice";
$age = 25;
$price = 10.5;
?>
🧠 Rules for Naming Variables
Must start with a letter or an underscore (_)

Cannot start with a number

Cannot contain spaces or special characters (except _)

Case-sensitive: $Name and $name are different

✅ Valid names: $userName, $_total, $number1
❌ Invalid names: $1user, $user-name, $user name

📌 Variable Assignment
Use the equals sign = to assign a value to a variable:


$city = "New York";  // String
$score = 85;         // Integer
$price = 12.99;      // Float
$isAvailable = true; // Boolean
You can also assign the value of one variable to another:


$firstName = "John";
$fullName = $firstName . " Smith"; // Concatenation
🔁 Changing Variable Values
Variables can be reassigned anytime:


$count = 10;
$count = $count + 5; // Now $count is 15
📤 Outputting Variables

<?php
$name = "Maya";
echo "Welcome, $name!";
?>
You can also concatenate using . (dot operator):


echo "Your name is " . $name;
🧪 Practice Exercise

<?php
// Declare and assign variables
$firstName = "Liam";
$lastName = "Johnson";
$age = 30;

// Display output
echo "Name: " . $firstName . " " . $lastName . "<br>";
echo "Age: $age";
?>
🔄 Variable Types Summary

Type	Example Value	Description
String	"Hello"	Text
Integer	42	Whole number
Float	3.14	Decimal number
Boolean	true or false	Logical true/false
Array	["apple", "banana"]	Collection of values
NULL	NULL	