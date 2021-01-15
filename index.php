<?php

include_once "includes/autoload.inc.php";

$arr = ['company' => 'augmedix', 'id' => 2, 'address' => 'Panthapath'];
$ins = new MyArray($arr);

echo "<pre><h3>Sample Array :</h3>";
var_dump($arr);

//Searching for array index
$arrSearch = $ins->searchArr('id');
echo "<h3>Search result for 'id' :</h3>";
var_dump($arrSearch);

// Deleting single array index
$arrResult = $ins->deleteArrElem('id');
echo "<h3>Sample array after deleting index 'id' :</h3>";
var_dump($arrResult);

// Deleting array of indices
$arrResult = $ins->deleteArrElem(['id', 'address']);
echo "<h3>Sample array after deleting array of index ['id', 'address'] :</h3>";
var_dump($arrResult);

