<?php

class Collator2 extends Collator{
    public function __construct() {
        // ommitting parent::__construct($someLocale);
    }
}
<<__EntryPoint>> function main() {
$c = new Collator2();
$c->getSortKey('h');
}
