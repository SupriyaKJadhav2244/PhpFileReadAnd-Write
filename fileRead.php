<?php

	$fileRead = "fileTobeRead.txt";

	echo "<h3>The PHP fread() function is used to read data of the file. It requires two arguments: file resource and file size.</h3>"; 

	$read = fopen($fileRead,"r");

	$content = fread($read,filesize($fileRead));
	echo $content;
	fclose($read);

	echo "<br>";
	echo "<h3>The PHP fgets() function is used to read single line from the file.</h3>";

	$read = fopen($fileRead,"r");

	$content1 = fgets($read);
	echo $content1;
	fclose($read);

	echo "<br>";
	echo "<h3>The PHP fgetc() function is used to read single character from the file.</h3>"; 
	
	$read = fopen($fileRead,"r");

	$content2 = fgetc($read);
	echo $content2; 
	fclose($read);

	echo "<br>";
	echo "<h3>To get all data using fgetc() function, use !feof() function inside the while loop.</h3>"; 
	
	$read = fopen($fileRead,"r");

	while(!feof($read)){
		$content3 = fgetc($read);
		echo $content3;
	}
	fclose($read);

?>