# Autoload
[php] Generic class autoloader.

# Overview
This function will lazy-load the classes saved
in directories that mimic the Classes namespaces.

For example, for a class names *My\ClassName*, the
file to load will be located at *./My/ClassName.php*

Optionally, a base directory can be passed to the
function, that will be prepended to the file's path.

### Use
```php
<?php
require_once 'autoload.php';
autoload();
autoload('some/other/dir');
$my_class = new My\ClassName();
$other_class = new Other\ClassName();
```
