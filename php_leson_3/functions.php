<?php

function test(string &$name) {
    if (is_string($name)) {
        $internalName = strtolower($name);
        echo "Hi, ", $internalName;
    }
}

$name = 'John';
test($name);



$func = function($name){
    echo "Hi, ", $name;
};

$func($name);
