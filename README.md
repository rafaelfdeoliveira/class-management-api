Requirements
Please see the [composer.json](composer.json) file.

All commands must be used in the terminal at the project folder
Installation:
$ composer install
$ composer development-enable

Development:
To start locally, use this command at the terminal in the project root folder:
$ composer serve
OR
$ php -S 0.0.0.0:8080 -ddisplay_errors=0 -t public public/index.php

Stop running process:
$ sudo kill $(sudo lsof -t -i:8080)

Access API tools at http://localhost:8080/ to inspect the API.