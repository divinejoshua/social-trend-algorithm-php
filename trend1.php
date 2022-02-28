<?php
  
    $arr = array("Geeks good", "for is", "Geeks", "is", "good",  "good", "good", "Geeks feel", "Geeks fseel", "Geeks fe2el", "Geeks fee3l", "Geeks fee4l", "Geeks fe5el" ); 
      
    // new array containing frequency of values of $arr 
    $arr_freq = array_count_values($arr); 
         
    // arranging the new $arr_freq in decreasing  
    // order of occurrences 
    arsort($arr_freq); 
       
    // $new_arr containing the keys of sorted array 
    $new_arr = array_keys($arr_freq); 
       
    // Second most frequent element 
    echo "Second most frequent word is:"." ".$new_arr[0]; 
?> 




