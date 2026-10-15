<?php

function printHeader() {
    echo "<h3>SID: C113181116</h3>";
    echo "<h3>NAME:朱智遠</h3>";
    echo "<h3>EX05</h3>";
}
printHeader();
function callFunc1(Closure $closure) {
$closure();
}
function callFunc2(Callable $callback) {
$callback();
}

$hello = function() {
echo "Hello, World!<br/>";
};
function hi() {
echo "Hi, World!<br/>";
}
callFunc1($hello);
callFunc2("hi");
callFunc1($hello);