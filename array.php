<?php
//MySQLi information

    $db_host     = "localhost";
    $db_username = "root";
    $db_password = "";

    //connect to mysqli database (Host/Username/Password)
    $connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error " . mysqli_error());

    //select MySQLi dabatase table
    $db = mysqli_select_db($connection, "thefinder") or die("Error " . mysqli_error());

   $sql = mysqli_query($connection, "SELECT * FROM posts");

   while($row = mysqli_fetch_array($sql)) {
    
   $names[] = $row['body'];
echo $row['body']."<hr>";
}
//echo "<br><br><br>";echo "<br><br><br>";echo "<br><br><br>";


echo "<br><br><br>";
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}



$array2 = array_count_values(explode(' ', implode(' ', $names)));

 arsort($array2); 
       
    // $new_arr containing the keys of sorted array 
    $new_arr = array_keys($array2); 
//echo $new_arr[0]."<br>";
echo $new_arr[1]."<br>";
echo $new_arr[2]."<br>";
echo $new_arr[3]."<br>";
echo $new_arr[4]."<br>";
echo $new_arr[5]."<br>";
echo $new_arr[6]."<br>";
echo $new_arr[7]."<br>";
echo $new_arr[8]."<br>";
echo $new_arr[9]."<br>";
echo $new_arr[10]."<br>";
echo $new_arr[11]."<br>";
echo $new_arr[12]."<br>";
echo $new_arr[13]."<br>";
echo $new_arr[14]."<br>";
echo $new_arr[15]."<br>";
echo $new_arr[16]."<br>";
echo $new_arr[17]."<br>";
//echo key($array2);



 echo "<br><br><br>";
$arr = array("string1", "string2", "string3", "string4", "string5");
$rem=array();
foreach($new_arr as $value)
{
    if($value=='the'|| $value == 'is'|| $value == 'to'|| $value == 'on' || $value == 'be' || $value == 'the' || $value == 'i' )
    {
        continue;
    }
    else
    {
        $rem[]=$value;
    }     
}
foreach (array_slice($rem, 1, 10) as $result) {
  echo "$result<br>";
}