<?php

	 $fileWrite = "fileTobeWrite.txt";

	 echo "<h3>PHP Write File</h3>"; 

	 $content = fopen($fileWrite,"w");
	 fwrite($content, "Welocome, ");
	 fwrite($content, "To php file write");

	 fclose($content);  
    
	 echo "File written successfully";  
	 echo "<br>";

	 echo "<h3>PHP Overwriting File</h3>";
	 $fileWrite = "fileTobeWrite.txt";    

	 $content1 = fopen($fileWrite,"w");
	 fwrite($content1, "I am Supriya. "); 

	 fclose($content1); 
	 echo "File written successfully";  
	 echo "<br>";
  
	 echo "<h3>PHP Append To File</h3>";
	 $fileWrite = "fileTobeWrite.txt";

	 $content2 = fopen($fileWrite,"a");
	 fwrite($content2, "File written successfully."); 

	 fclose($content2); 
	 echo "File written successfully";
?>