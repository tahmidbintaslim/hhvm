<?php

function test(&$x) {
    $class = new SQLite3(':memory:');
    $x = $class->prepare('SELECT 1');
}
<<__EntryPoint>> function main() {
test(&$foo);

echo "done\n";
}
