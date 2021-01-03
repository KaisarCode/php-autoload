<?php
// Generic class autoloader
function autoload($dir = '') {
    spl_autoload_register(
    function ($cls) use ($dir) {
        $ds = DIRECTORY_SEPARATOR;
        $pth = explode('\\', $cls);
        $pth = implode($ds, $pth);
        !empty($dir)?$dir.=$ds:$dir='';
        include_once "{$dir}{$pth}.php";
    });
}
