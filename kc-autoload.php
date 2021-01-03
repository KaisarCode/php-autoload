<?php
// KaisarCode classes autoloader
function kc_autoload($dir = '') {
    spl_autoload_register(
    function ($cls) use ($dir) {
        $ds = DIRECTORY_SEPARATOR;
        $cn = explode('\\', $cls);
        $nm = end($cn);
        $fl = strtolower($nm);
        !empty($dir)?$dir.=$ds:$dir='';
        $dir .= "php-{$fl}{$ds}";
        $dir .= "{$fl}.class.php";
        include_once ($dir);
    });
}
