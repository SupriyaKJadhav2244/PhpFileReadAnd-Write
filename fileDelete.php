<?php
 
 	 $fileWrite = "fileTobeDelete.txt";

	 echo "<h3>PHP File To Be Deleted</h3>"; 

	 $content = unlink($fileWrite);

	 if($content){  
		echo "File deleted successfully";    
	 }else{  
		echo "Sorry!, File is not deleted";    
	 }  
?>  