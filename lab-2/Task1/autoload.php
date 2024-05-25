<?php
/**
 * Функція для автопідключення класів.
 *
 * @param $class string Назва класу (передається автоматично)
 * @return void
 */
function autoload($class){
    $path = str_replace('\\', '/', $class). ".php";
    if(is_file($path))
        require_once ($path);
}
spl_autoload_register('autoload');

