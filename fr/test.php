<?php 
session_start();
$letter=$_GET['test'];


$_SESSION['array1']=array("a","b","c","d","e");

if(!isset($_SESSION['array2'])){
$_SESSION['array2']=array("o","o","o","o","o");}
?>
rentrez une lettre;
<FORM><input type="text" name="test"></input>
<INPUT TYPE="submit" >
</form><?php

$i=0;
foreach($_SESSION['array1'] as $elmt){
	if ($elmt == $letter) {
		$_SESSION['array2'][$i]="x";
	}
	$i++;
	}


foreach($_SESSION['array1'] as $elmt){
	echo $elmt;
	} ?><br><?php
	foreach($_SESSION['array2'] as $elmt){
	echo $elmt;
	}


?>