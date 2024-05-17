<?php
   $string =array("Hello", "World", "PHP", "Programming");
   
   foreach($string as $index => $row){
      $count=strlen($row);
      $vowelCount=0;   
   
      for ($i = 0; $i <$count; $i++) { 
         if (in_array($row[$i], ["a", "e", "i", "o", "u"])) { 
             $vowelCount++; 
         } 
     } 
     
      $rev =strrev($row);
      echo "Original String :"." ".$row.", Vowel Count: ".$vowelCount.", Reversed String: ".$rev."<br/>";

   }

   

?>