<!-- Create Cookies With PHP
A cookie is created with the setcookie() function.

Syntax
setcookie(name, value, expire, path, domain, secure, httponly);
Only the name parameter is required. All other parameters are optional.

PHP Create/Retrieve a Cookie
The following example creates a cookie named "user" with the value "John Doe". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).

We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set: -->
<?php
setcookie('username','shamim',time()+10);
?>