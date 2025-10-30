<?php
function c1(Closure $closure) {
    $closure();
}
function c2(Callable $callback) {
    $callback();
}
// 匿名函數
$hello = function() {
    echo "Hello, World!<BR>";
};
// 一般函數
function hi() {
    echo "Hi, World!<BR>";
}
c1("hi");
c1($hello);
c2("hi");
c2($hello);
?>
