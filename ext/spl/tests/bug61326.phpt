--TEST--
Bug #61326: ArrayObject comparison
--FILE--
<?php
$aobj1 = new ArrayObject(array(0));
$aobj2 = new ArrayObject(array(1));
var_dump($aobj1 == $aobj2);

$aobj3 = new ArrayObject(array(0));
var_dump($aobj1 == $aobj3);

$aobj3->foo = 'bar';
var_dump($aobj1 == $aobj3);
?>
--EXPECTF--
bool(false)
bool(true)

Deprecated: Creation of dynamic property ArrayObject::$foo is deprecated in %s on line %d
bool(false)
