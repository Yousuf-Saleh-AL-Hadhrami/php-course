💬 Comments in PHP
Comments are notes or explanations written within the code that are not executed by PHP. They are used to explain what the code does, make it more readable, and help other developers (or your future self) understand your logic.

📝 Why Use Comments?
Explain complex logic or calculations

Temporarily disable a line of code

Document code for teams and collaboration

Make your code easier to debug and maintain

🧾 Types of Comments in PHP
PHP supports three types of comments:

1. Single-Line Comment
Use // or # for single-line comments.


<?php
// This is a single-line comment
echo "Hello, world!"; // This prints a message

# This is also a single-line comment using #
?>
2. Multi-Line Comment
Use /* ... */ to write comments that span multiple lines.


<?php
/*
 This is a multi-line comment.
 You can write multiple lines of text here.
 Useful for longer explanations.
*/
echo "Learning PHP is fun!";
?>
🔧 Tips for Writing Good Comments
Be clear and concise

Don’t comment obvious code (e.g., // Adds 1 to x for x++;)

Update comments if you change the related code

Use comments to explain why, not just what

❌ Bad vs ✅ Good Comment Example

// BAD:
$i = $i + 1; // increment i

// GOOD:
$i = $i + 1; // Move to the next item in the loop
