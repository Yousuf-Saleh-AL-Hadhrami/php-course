

🌍 Predefined Variables (Superglobals) in PHP
PHP provides several predefined variables, also known as Superglobals, that are always accessible—regardless of scope—anywhere in your script.

They are all associative arrays and store information about input, environment, sessions, cookies, server data, and more.

🧩 List of Common Superglobals

Superglobal	Description
$_GET	Contains form data sent via URL (GET method)
$_POST	Contains form data sent via HTTP POST method
$_REQUEST	Contains combined data from $_GET, $_POST, $_COOKIE
$_SERVER	Server and execution environment info
$_FILES	Data from file uploads
$_ENV	Environment variables
$_COOKIE	Contains cookies sent by the browser
$_SESSION	Stores user session data
$GLOBALS	References all variables available globally
✅ Examples of Superglobals
1. $_GET

<!-- URL: http://example.com/page.php?name=Alice -->
<?php
echo $_GET["name"]; // Outputs: Alice
?>
2. $_POST

<!-- form.html -->
<form method="post" action="submit.php">
  <input type="text" name="username">
  <input type="submit">
</form>

// submit.php
<?php
echo $_POST["username"];
?>
3. $_SERVER

<?php
echo $_SERVER['PHP_SELF'];       // Current script path
echo $_SERVER['SERVER_NAME'];    // Hostname
echo $_SERVER['HTTP_USER_AGENT']; // User browser info
?>
4. $_SESSION and $_COOKIE

// Start session
session_start();
$_SESSION["user"] = "John";

// Access cookie
echo $_COOKIE["theme"];
5. $GLOBALS

<?php
$x = 10;
$y = 5;

function add() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo $z; // Outputs: 15
?>
⚠️ Security Tip
Always validate and sanitize input from superglobals ($_GET, $_POST, $_REQUEST, etc.) to prevent:

SQL injection

XSS (Cross-Site Scripting)

Data tampering

Use functions like:

htmlspecialchars()

filter_var()

mysqli_real_escape_string() (for DB input)

🧪 Practice Task
Create a form with name and email

Use $_POST to receive the data

Display the received values

Use htmlspecialchars() to sanitize them

