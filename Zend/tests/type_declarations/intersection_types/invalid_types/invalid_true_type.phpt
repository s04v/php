--TEST--
true type cannot take part in an intersection type
--FILE--
<?php

function foo(): true&Iterator {}

?>
--EXPECTF--
Fatal error: Type true cannot be part of an intersection type in %s on line %d
