<?php

  // comment line
  /*
  comment
  block
   */

  $a = 10;
  $b = 20;

  echo $a;
  echo "<br>";
  echo "<hr>";
  echo $b;
  echo "<br>";

  $r = $a + $b;
  echo $r;
  echo "<br>";
  $r = $a - $b;
  echo $r;
  echo "<br>";
  $r = $a * $b;
  echo $r;
  echo "<br>";
  $r = $a / $b;
  echo $r;
  echo "<br>";
  $r = $a % $b;
  echo $r;
  echo "<br>";

  //concat variable to string
  echo "This is the result: " . $r, "<br>";

  //if else statements
  if($a > $b){
    echo "a is greater than b";
  }
  elseif($a == $b){
    echo "a is equal to b";
  }
  else{
    echo "a is less than b";
  }

  //arrays: in php can hold values of different types
  $index_array = [1, 2, 3, 4.234];
  echo "<br>", $index_array;
  echo "<br>", $index_array[0];
  echo "<br>";

  // there a also associative arrays which are closer to dicts as i see them
  $associative_array = ["pencils" => 4, "pens" => 5, "lolls" => 30];
  echo $associative_array["pencils"];
  echo "<br>";

  // loops
  // for
  for($i = 0; $i < 10; $i++){
    echo $i;
  }
  echo "<br>";
  //while
  while($a < $b){
    echo $a;
    $a++;
  }
  echo "<br>";
  //for each
  foreach($associative_array as $ar){
    echo " " . $ar;
  }

  //functions
  function hello(){
    echo "<br>", "We called hello function here !!!";
  }

  hello();

?>

