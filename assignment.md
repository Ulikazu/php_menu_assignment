multi page web system using php:

- define html for menu in menu.php
- use includes to include header
- the menu is to be on all pages
- setup a "current selected menu item" styling
- document solution and hand in


Solution for getting the page title and echo'ing the class:

- use the superglobal variable basename($_SERVER['PHP_SELF']) to get the page name. You could also use the second parameter to get only the page name without the file extension like this:

basename($_SERVER['PHP_SELF'], '.php');