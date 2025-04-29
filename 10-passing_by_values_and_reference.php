

🔄 Passing by Value vs Passing by Reference in PHP
When you pass a variable to a function, PHP allows you to do it in two different ways:

Passing by Value: The function gets a copy of the variable's value.

Passing by Reference: The function gets a reference (or link) to the original variable.

Understanding the difference is crucial, as it affects whether changes to a variable inside a function will affect the original variable outside the function.

✅ Passing by Value
When you pass a variable by value, the function works with a copy of the variable. Any changes made to the variable inside the function will not affect the original variable.

Example:

<?php
function changeValue($x) {
    $x = 20; // Change the value of $x inside the function
    echo "Inside function: $x\n"; // Output: 20
}

$num = 10;
changeValue($num);
echo "Outside function: $num\n"; // Output: 10 (the original value remains unchanged)
?>
In this case, $num outside the function remains 10, even though $x inside the function was changed to 20.

✅ Passing by Reference
When you pass a variable by reference, the function gets a reference (a pointer) to the original variable. This means that any changes made to the variable inside the function will affect the original variable.

To pass by reference, you use the & symbol before the variable name in both the function definition and the function call.

Example:

<?php
function changeValueByReference(&$x) {
    $x = 20; // Change the value of $x inside the function
    echo "Inside function: $x\n"; // Output: 20
}

$num = 10;
changeValueByReference($num);
echo "Outside function: $num\n"; // Output: 20 (the original value is changed)
?>
In this case, $num is passed by reference, and its value is changed inside the function, so the change is reflected outside the function as well.

🧠 Key Differences

Feature	Passing by Value	Passing by Reference
Definition	The function gets a copy of the value.	The function works directly with the original variable.
Effect on Original	No change to the original variable.	The original variable is affected (changed).
Syntax	Just pass the variable normally.	Use & before the variable in the function definition and when calling.
Use Case	When you don't need to modify the original variable.	When you need to modify the original variable.
⚠️ When to Use Each
Passing by Value is preferred when you don’t need to modify the original variable and you want to avoid side effects.

Passing by Reference is useful when you want to modify the original variable, especially when working with large data structures (like arrays) to avoid unnecessary copying.

🧪 Practice Exercise

<?php
// Passing by Value Example
function addTenByValue($num) {
    $num += 10;
    echo "Inside function (by value): $num\n";
}

$number = 5;
addTenByValue($number);
echo "Outside function (by value): $number\n"; // Should remain 5

// Passing by Reference Example
function addTenByReference(&$num) {
    $num += 10;
    echo "Inside function (by reference): $num\n";
}

$number = 5;
addTenByReference($number);
echo "Outside function (by reference): $number\n"; // Should be 15
?>
🚀 Advanced Tip: Pass by Reference for Arrays
When dealing with arrays or objects, passing by reference is often more efficient because it avoids copying large amounts of data. For example:


<?php
function modifyArray(&$arr) {
    $arr[] = "new element";
}

$myArray = [1, 2, 3];
modifyArray($myArray);
print_r($myArray); // Array will include the new element added
?>
