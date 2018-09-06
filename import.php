<?php

include_once("PHP_XLSXWriter-master/xlsxwriter.class.php");
$writer = new XLSXWriter();
$writer->writeSheetHeader('Sheet1', array('c1'=>'integer','c2'=>'integer','c3'=>'integer','c4'=>'integer') );
for($i=0; $i<600000; $i++)
{
    $writer->writeSheetRow('Sheet1', array($i, $i+1, $i+2, $i+3) );
}
$writer->writeToFile('huge.xlsx');
echo '#'.floor((memory_get_peak_usage())/1024/1024)."MB"."\n";
