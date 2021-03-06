--TEST--
SPL: RecursiveIteratorIterator - Test where the case is RS_SELF and mode is CHILD_FIRST
--SKIPIF--
<?php if (!extension_loaded("spl")) print "skip"; ?>
--FILE--
<?php 

$arr = array(array(1,2),2);
$arrOb = new ArrayObject($arr);

$recArrIt = new RecursiveArrayIterator($arrOb->getIterator());

class MyRecursiveIteratorIterator extends RecursiveIteratorIterator {
    
    function nextelement() {
    	echo __METHOD__."\n";
    }
}


$recItIt = new MyRecursiveIteratorIterator($recArrIt, RecursiveIteratorIterator::CHILD_FIRST);

foreach ($recItIt as $key => $val) echo "$key\n";

?>
--EXPECTF--
MyRecursiveIteratorIterator::nextelement
0
MyRecursiveIteratorIterator::nextelement
1
MyRecursiveIteratorIterator::nextelement
0
MyRecursiveIteratorIterator::nextelement
1