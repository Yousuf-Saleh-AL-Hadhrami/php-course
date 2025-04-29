🔄 Loops in PHP
Loops are used to repeat a block of code multiple times. They are essential for performing repetitive tasks, like processing arrays or performing calculations. PHP provides several types of loops:

while loop

do...while loop

for loop

foreach loop (specifically for arrays)

1. while Loop
A while loop repeats a block of code while a given condition is true. The condition is checked before executing the code inside the loop.

Syntax:

while (condition) {
    // code to be executed
}
Example:

<?php
$count = 1;
while ($count <= 5) {
    echo "Count: $count<br>";
    $count++; // Increment the counter
}
?>
Explanation:

The loop continues running as long as $count is less than or equal to 5.

After each iteration, $count is incremented by 1.

Output:

makefile

Count: 1
Count: 2
Count: 3
Count: 4
Count: 5
2. do...while Loop
The do...while loop is similar to the while loop, but it guarantees that the code inside the loop will run at least once, even if the condition is false at the start. The condition is checked after executing the loop’s code.

Syntax:

do {
    // code to be executed
} while (condition);
Example:

<?php
$count = 1;
do {
    echo "Count: $count<br>";
    $count++; // Increment the counter
} while ($count <= 5);
?>
Explanation:

The code block is executed once before checking the condition.

Output:

makefile

Count: 1
Count: 2
Count: 3
Count: 4
Count: 5
3. for Loop
The for loop is used when you know in advance how many times you want to execute a statement or a block of code. It is commonly used when dealing with numeric ranges or counters.

Syntax:

for (initialization; condition; increment) {
    // code to be executed
}
Initialization: Set up a variable (typically the counter).

Condition: The condition is checked before each iteration.

Increment: The counter is updated after each iteration.

Example:

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i<br>";
}
?>
Explanation:

The loop starts with $i = 1.

The loop continues as long as $i is less than or equal to 5.

After each iteration, $i is incremented by 1.

Output:

makefile

Iteration: 1
Iteration: 2
Iteration: 3
Iteration: 4
Iteration: 5
4. foreach Loop
The foreach loop is specifically used for iterating over arrays. It simplifies the process of accessing each element in an array without needing to use an index.

Syntax:

foreach ($array as $value) {
    // code to be executed
}
$array: The array you want to loop through.

$value: Each individual value in the array during each iteration.

Example:

<?php
$fruits = ["apple", "banana", "cherry"];

foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}
?>
Explanation:

The loop will go through each element in the $fruits array, assigning each value to $fruit and then printing it.

Output:

makefile

Fruit: apple
Fruit: banana
Fruit: cherry
🧠 Key Differences Between the Loops

Loop	Use Case	Condition Check	Code Execution
while	When the condition is checked before executing the loop.	Before	Code runs as long as the condition is true.
do...while	When you want the code to run at least once.	After	Code runs once before checking the condition.
for	When you know the number of iterations.	Before	Perfect for counting or numeric iteration.
foreach	When iterating over arrays.	N/A	Specifically for arrays.
🧪 Practice Exercise: Loops
Write a for loop to print the numbers 1 to 10.

Write a while loop to print the numbers from 10 down to 1.

Use a foreach loop to print all the keys and values of an associative array.

🔧 Controlling Loop Execution
a) break Statement
The break statement can be used to exit a loop prematurely, based on a condition.


<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i equals 5
    }
    echo "$i<br>";
}
?>
Output:

1
2
3
4
b) continue Statement
The continue statement is used to skip the current iteration and move to the next one.


<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Skip the iteration when $i equals 5
    }
    echo "$i<br>";
}
?>
Output:


1
2
3
4
6
7
8
9
10
🚀 Advanced Tip: Nested Loops
You can also use loops inside loops, known as nested loops, to work with multidimensional arrays or perform more complex tasks.


<?php
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo "$value ";
    }
    echo "<br>";
}
?>
Output:


1 2 3
4 5 6
7 8 9
📌 Summary of Loop Types

Loop Type	Description	When to Use
while	Repeats as long as the condition is true	When the number of iterations is not known upfront.
do...while	Executes the code at least once before checking the condition	When you need to run the loop at least once.
for	Loop with a counter; usually for numeric iterations	When you know how many times to iterate (e.g., counting).
foreach	Iterates through each element in an array	When working with arrays or collections.
