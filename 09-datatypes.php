

🧩 Data Types in PHP
In PHP, data types define the type of data a variable can hold. Understanding data types is crucial because it helps you manage and manipulate data properly. PHP is a loosely typed language, meaning you don’t need to explicitly declare a variable’s type. PHP automatically determines the type based on the value assigned.

✅ The 4 Main Data Types in PHP
Scalar Types
These are simple data types that hold a single value.

Compound Types
These hold collections of values.

1. Scalar Data Types
a) String
A string is a sequence of characters enclosed in either single (') or double (") quotes.


<?php
$name = "Alice"; // Using double quotes
$greeting = 'Hello, $name!'; // Single quotes do not parse variables
?>
Double quotes allow variable parsing: "Hello, $name!" will output Hello, Alice!

Single quotes print the text as-is: 'Hello, $name!' will output Hello, $name!

b) Integer
An integer is a whole number (without decimals), positive or negative.


<?php
$age = 25;
$negativeNumber = -10;
?>
Example: 42, -100

c) Float (or Double)
A float is a number with decimal points. It can also be written in scientific notation.


<?php
$price = 19.99;
$scientific = 3.14e2; // Equivalent to 314
?>
Example: 3.14, -7.5, 2.1e3 (which is 2100)

d) Boolean
A Boolean data type has only two possible values: true or false. It's commonly used for conditional testing.


<?php
$isActive = true;
$isAdmin = false;
?>
Example: true, false

2. Compound Data Types
a) Array
An array is a collection of values, stored in a single variable. PHP arrays can hold multiple types of data.


<?php
$fruits = array("apple", "banana", "cherry");  // Indexed array
$person = array("name" => "John", "age" => 30); // Associative array
?>
Indexed array: Stores values with numeric keys, e.g., $fruits[0] will give "apple".

Associative array: Stores values with custom keys, e.g., $person['name'] will give "John".

b) Object
An object is an instance of a class (a blueprint for creating objects). Objects are used in Object-Oriented Programming (OOP) in PHP.


<?php
class Car {
    public $color;
    public $model;
    
    function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "Toyota");
echo $myCar->color; // Outputs: red
?>
Objects contain properties (variables) and methods (functions).

3. Special Data Types
a) NULL
The NULL data type represents a variable with no value. It's used to indicate that a variable is empty or uninitialized.


<?php
$emptyVar = NULL;
?>
NULL is also the default value for uninitialized variables.

b) Resource
A special variable that holds a reference to an external resource, like a database connection. Typically, you won't create resources manually; they are created by functions such as mysqli_connect() or fopen().


<?php
$file = fopen("file.txt", "r"); // Resource to read a file
?>
🧠 Type Casting in PHP
PHP automatically converts variables from one type to another when necessary. This is called type juggling. However, you can also explicitly cast a variable to a different type.


<?php
$int = 10;
$float = (float)$int; // Explicitly cast to float
echo $float; // Outputs: 10.0
?>
⚡ Type Checking Functions
You can check the data type of a variable using functions like gettype() or var_dump().


<?php
$var = 10;
echo gettype($var);  // Outputs: integer

var_dump($var);      // Outputs: int(10)
?>
📌 Summary of PHP Data Types

Type	Example	Description
String	"Hello, World!"	Text, enclosed in quotes
Integer	10, -42	Whole numbers
Float	3.14, -2.5	Numbers with decimal places
Boolean	true, false	Logical values
Array	array("apple", "banana")	Collection of values
Object	new MyClass()	Instance of a class
NULL	NULL	Empty or non-existent value
Resource	fopen(), mysqli_connect()	External resource like files or DB connections
🧪 Quick Practice

<?php
// Declaring variables of different types
$name = "John";
$age = 25;
$height = 5.9;
$isStudent = true;

// Output the data types
echo gettype($name);  // Outputs: string
echo gettype($age);   // Outputs: integer
echo gettype($height); // Outputs: double (float)
