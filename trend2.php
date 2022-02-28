
<?php

include ('DB.php');
$dbposts = DB::query('SELECT body FROM posts where'); 
     
     foreach($dbposts as $post) {
echo $post["body"]."<br>";
}


$array = array('is very good #nice bb','cc  #nice apple','d','ccc #nice ab','apple #nice ccccc','cc nice cccc', 'Very nice doing nice', 'God is very #nice');
$array2 = array_count_values(explode(' ', implode(' ', $array)));

 arsort($array2); 
       
    // $new_arr containing the keys of sorted array 
    $new_arr = array_keys($array2); 

//echo $new_arr[1]."<br>";
echo key($array2);

?>