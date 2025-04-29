

⚙️ PHP Configuration
Before writing PHP code, it's important to configure your development environment properly. This ensures that your PHP scripts run smoothly and behave as expected. Here’s a breakdown of the essential configuration steps and components:

1. ✅ Install a Local Server Environment
To run PHP locally, you need a server stack that includes:

Apache or Nginx (web server)

PHP (scripting engine)

MySQL/MariaDB (database, optional)

Popular all-in-one solutions:

XAMPP (Windows, macOS, Linux)

WAMP (Windows)

MAMP (macOS, Windows)

Laragon (Windows – lightweight and fast)

2. 🗂 Directory Structure
Once XAMPP/WAMP is installed:

Place your PHP files inside the htdocs folder (for XAMPP)

Example path: C:\xampp\htdocs\myproject\index.php

Access in browser:

arduino

http://localhost/myproject/
3. ⚙️ php.ini – PHP Configuration File
This file controls many aspects of PHP’s behavior.

Location (XAMPP default):

makefile

C:\xampp\php\php.ini
Common settings to check or change:

display_errors = On — Show errors during development

upload_max_filesize = 2M — Max size for file uploads

post_max_size = 8M — Max size of POST data

max_execution_time = 30 — Max time a script can run

timezone = "UTC" — Set your default timezone (e.g., "Asia/Kolkata")

To apply changes, restart Apache from the XAMPP control panel.

4. 🔍 Testing Configuration
To confirm PHP is working correctly:

Create a file called info.php inside htdocs

Add this code:


<?php
phpinfo();
?>
Open in browser: http://localhost/info.php

This displays all current PHP configuration settings.

5. 🧪 Enabling PHP Extensions
Some features (e.g., working with MySQL or JSON) require PHP extensions.

To enable an extension:

Open php.ini

Find the line (e.g., ;extension=mysqli) and remove the semicolon (;)

Save the file and restart Apache

