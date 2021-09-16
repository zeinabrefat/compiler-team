<?php

	require'header.php';

	$nameOfProduct = $_GET['nameOfProduct'];
    $numberOfProduct = $_GET['numberOfProduct'];
    $colorOfProduct = $_GET['colorOfProduct'];


	$handle = fopen('data.txt', 'a');
	$inputData = array($nameOfProduct, $numberOfProduct, $colorOfProduct);

	fwrite($handle, $inputData[0]." / " .$inputData[1] . " / " . $inputData[2] . " ......... ");

	echo "Name of the product is " . $inputData[0];
	echo ", Number of the product is " . $inputData[1];
	echo " and Color of the product is " . $inputData[2];
	
?>