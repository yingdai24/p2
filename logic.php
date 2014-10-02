<?php

//******* sanitize user's input ************

if (isset($_POST['wordcount'])){
  $count = $_POST['wordcount'];
      if (!is_numeric($count) || $count <= 0 || $count > 10) {
          echo '<h4>Error!  Please enter the number of words (1~10) to creat the password.</h4>';
          return;
      }
}
else {
   $count = 3;
}

if (isset($_POST['number'])){
  $number = $_POST['number'];
} 
else {
  $number = 0;
}

if (isset($_POST['symbol'])){
  $symbol = $_POST['symbol'];
} 
else {
  $symbol = 0;
}

//******* generate the password *********
/*creat three arrays as resource for the password
1. $librarywords array from file 'wordlibrary.txt'
2. $numbers array from 0~9
3. $symbols 
*/

    $librarywords = file ('wordlibrary.txt');
    $numbers = [0,1,2,3,4,5,6,7,8,9];
    $symbols = ['!', '@', '#', '$','%','^','&','*'];


//Count the number of words in the $librarywords array
    $libraryword_count = count ($librarywords);
    $max = $libraryword_count-1;

//creat an array for the words selected from $librarywords and used in the password   
    $selected_words = array(); 
    for ($i=0; $i<$count; $i++) {
     $rand_number = rand(0, $max);
      array_push ($selected_words, $librarywords[$rand_number]);
    }

//Add number and/or symbol into the password if checked
     if ($number) {
          $random_int = $numbers[rand(0,9)];
          array_push ($selected_words,$random_int);         
      }

     if ($symbol) {
          $random_symbol = $symbols[rand(0,7)];
          array_push ($selected_words,$random_symbol);         
      }

//generate $password (single element) from $selected_words (array)
$password = implode(' ', $selected_words);


