

💬 Strings in PHP
A string is a sequence of characters enclosed in either single quotes (') or double quotes ("). Strings are one of the most commonly used data types in PHP, and you’ll work with them extensively.

✅ How to Declare a String
You can declare a string by enclosing the characters inside either single quotes or double quotes:


<?php
$string1 = "Hello, World!";
$string2 = 'Hello, World!';
?>
Double quotes allow for variable parsing (inserting variables within the string).

Single quotes treat everything literally (no variable parsing).

🔄 Concatenating Strings
You can combine multiple strings using the concatenation operator (.):

<?php
$firstName = "Alice";
$lastName = "Johnson";
$fullName = $firstName . " " . $lastName; // Concatenates first and last names
echo $fullName; // Outputs: Alice Johnson
?>
🧮 String Length
Use the strlen() function to get the length of a string (number of characters):


<?php
$string = "Hello";
echo strlen($string); // Outputs: 5
?>
🔎 Searching for Substrings
To search for a specific substring within a string, use the strpos() function:


<?php
$text = "Hello, World!";
$position = strpos($text, "World"); // Finds the position of 'World'
echo $position; // Outputs: 7 (the position where 'World' starts)
?>
If the substring is not found, strpos() will return false.

📝 String Replacement
You can replace a part of the string using str_replace():


<?php
$string = "Hello, World!";
$newString = str_replace("World", "PHP", $string);
echo $newString; // Outputs: Hello, PHP!
?>
💡 Escape Sequences
PHP supports escape sequences that let you include special characters in a string. Some commonly used escape sequences are:

\n – New line

\t – Tab

\\ – Backslash

\' – Single quote

\" – Double quote

Example:


<?php
echo "Hello\nWorld!"; // Outputs:
// Hello
// World!
?>
🔧 String Functions
PHP offers a wide range of built-in functions to manipulate strings. Here are some of the most commonly used:

strtoupper($string) – Converts the string to uppercase.

strtolower($string) – Converts the string to lowercase.

ucwords($string) – Capitalizes the first letter of each word in the string.

trim($string) – Removes whitespace from both ends of the string.

Example:


<?php
$string = "  hello world  ";
echo strtoupper($string);  // Outputs: HELLO WORLD
echo strtolower($string);  // Outputs: hello world
echo ucwords($string);     // Outputs: Hello World
echo trim($string);        // Outputs: hello world (no spaces at the ends)
?>
🔄 Multiline Strings
If you need to create a string over multiple lines, you can use heredoc syntax or nowdoc syntax.

Heredoc:

<?php
$text = <<<EOT
This is a string
that spans multiple
lines.
EOT;

echo $text;
?>
Nowdoc:
Nowdoc is similar to heredoc but doesn’t parse variables within the string.


<?php
$text = <<<'EOT'
This is a string
that does not parse variables like $var.
EOT;

echo $text;
?>
🧠 String Comparison
You can compare strings using comparison operators like == and !=.


<?php
$string1 = "Hello";
$string2 = "World";

if ($string1 == $string2) {
    echo "Strings are equal!";
} else {
    echo "Strings are not equal!";
}
?>
You can also use strcmp() to compare strings, which returns:

0 if the strings are equal

A negative number if the first string is less than the second string

A positive number if the first string is greater than the second string


<?php
echo strcmp("apple", "banana");  // Outputs a negative number
?>
🚀 Advanced String Techniques
1. String to Array Conversion
You can convert a string to an array of characters using str_split():


<?php
$string = "Hello";
$array = str_split($string);
print_r($array); // Outputs: Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )
?>
2. String Formatting
Use sprintf() to format strings:


<?php
$name = "Alice";
$age = 25;
$formattedString = sprintf("My name is %s and I am %d years old.", $name, $age);
echo $formattedString; // Outputs: My name is Alice and I am 25 years old.
?>
🧪 Practice Exercise
Create a string containing your full name.

Write a function that:

Converts the name to uppercase

Replaces the first name with a nickname

Outputs the result

🔑 Key String Functions Summary

Function	Description	Example
strlen($str)	Get the length of the string	strlen("Hello") returns 5
strpos($str, $sub)	Find the position of a substring in a string	strpos("Hello", "o") returns 4
str_replace($find, $replace, $str)	Replace part of the string with another string	str_replace("world", "PHP", "Hello world")
strtoupper($str)	Convert string to uppercase	strtoupper("hello") returns HELLO
strtolower($str)	Convert string to lowercase	strtolower("HELLO") returns hello
trim($str)	Remove whitespace from both ends of the string	trim(" Hello ") returns Hello
