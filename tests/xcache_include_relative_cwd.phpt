--TEST--
include relative to current working dir
--SKIPIF--
<?php
require("include-skipif.inc");
?>
--FILE--
<?php
chdir(__DIR__);
include "./sub-a.inc";
include "./sub-b.inc";
?>
--EXPECTF--
%stests
%stests%ssub-a.inc
%stests
%stests%ssub-b.inc
