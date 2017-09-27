<?php

$obj = new main ();

$str = "Strings ".chr(38) ." Arrays";
$text = "Welcome to IS601";
$myUrl ='<a href "https://web.njit.edu/~vk427/stringarray/oop.php">Go to this page</a>';
$myVar = "Force is defined as &#039;F &#061;ma&#039;";

$obj->printchr($str);
$obj->printecho($text);
$obj->printexplode($text);
$obj->printcount($text);
$obj->printhtmlEntities($myUrl);
$obj->printHtmlDecode($myVar);
$obj->printLeftTrim($text);
$obj->printRightTrim($text);
$obj->printStrLen($text);
$obj->printStrPos($text);
$obj->printStrReplace($text);

#************************************************Start of Array variables and methods******************************************************************************

$color = array("red","green","blue","yellow");
$fruit = array ("apple","avocado","berries","banana");
$myColors = array("red","pink","orange","green","pink");

$obj->printArrayChunk($color);
$obj->printArrayCombine($color,$fruit);
$obj->printArrayDiff($color,$myColors);
$obj->printArrayPop($myColors);
$obj->printArrayPush($myColors);
$obj->printShuffle($myColors);
$obj->printArraySort($color);
$obj->printList($color);
$obj->printArrayCount($fruit);
$obj->printArraySearch($fruit);
#************************************************End of array variables and methods*******************************************************************************
#************************************************Main program begins here*****************************************************************************************

class main {
  	public function __construct() {
  		    echo '<h2> String Functions</h2>';
           	}


    public function printchr($str) {
          echo '<h4> Print chr function </h4>';
          print($str);
          echo '<hr>';
    }


    public function printecho($text) {
          echo '<h4> Print echo function </h4>';
          echo "$text";
          echo '<hr>';
    }

    public function printexplode($text) {
          echo '<h4> Print explode function </h4>';
          print_r (explode(" ",$text));
          echo '<hr>';
    }

    public function printcount($text)
    {     echo '<h4> Print count_char function</h4>';
          print_r (count_chars($text,1));
          echo '<hr>';
    }

    public function printhtmlEntities($myUrl)
    {     echo '<h4> Print html_entities function</h4>';
          print_r (htmlentities($myUrl));
          echo '<hr>';
    }

    public function printHtmlDecode($myVar)
    {     echo '<h4> Print html_entity_decode function</h4>';
          echo html_entity_decode($myVar, ENT_QUOTES);
          echo '<hr>';
    }

    public function printLeftTrim($text)
    {     echo '<h4> Print Left Trim(ltrim) function</h4>';
          echo ltrim($text,"Welcome to ");
          echo '<hr>';
    }


    public function printRightTrim($text)
    {     echo '<h4> Print Right Trim(rtrim) function</h4>';
          echo rtrim($text," to IS601");
          echo '<hr>';
    }


    public function printStrLen($text)
    {     echo '<h4> Print strlen function</h4>';
          print strlen($text);
          echo '<hr>';
    }



    public function printStrPos($text)
    {     echo '<h4> Print string position function</h4>';
          print strpos($text, 'l');
          echo '<hr>';
    }

    public function printStrReplace($text)
    {     echo '<h4> Print substring replace function</h4>';
          print substr_replace($text, "Web Systems Development" ,11);
          echo '<hr>';
    }
#**********************************************************Array Functions*****************************************************************************************

    public function printArrayChunk($color){
      echo '<h2>Array Functions</h2>';
      echo '<h4> Array chunk function</h4>';
      print_r (array_chunk($color,2));
      echo '<hr>';
    }


    public function printArrayCombine($color,$fruit){
      echo '<h4> Array combine function</h4>';
      print_r (array_combine($color,$fruit));
      echo '<hr>';
    }

    public function printArrayDiff($color,$myColors){
      echo '<h4> Array Difference function</h4>';
      print_r (array_diff($color,$myColors));
      echo '<hr>';
    }


    public function printArrayPop($myColors){
      echo '<h4> Array Pop function</h4>';
      print_r(array_pop($myColors));
      echo '<br>';
      print_r($myColors);
      echo '<hr>';
    }

    public function printArrayPush($myColors){
      echo '<h4> Array Push function</h4>';
      array_push($myColors,"white");
      print_r($myColors);
      echo '<hr>';
    }


    public function printShuffle($myColors){
      echo '<h4> Array Shuffle function</h4>';
      shuffle($myColors);
      print_r ($myColors);
      echo '<hr>';
    }

   public function printArraySort($color){
      echo '<h4> Array Sort function</h4>';
      sort($color);
      print_r ($color);
      echo '<hr>';
    }

    public function printList($color){
      echo '<h4> Array list function</h4>';
      list ($a,$b,$c,$d) = $color;
      echo"I like the colors $a, $b, $c and $d";
      echo '<hr>';
    }

    public function printArrayCount($fruit){
      echo '<h4> Array Count function</h4>';
      $numElements= (count($fruit));
      echo "The array fruit has $numElements elements";
      echo '<hr>';
    }

        public function printArraySearch($fruit){
      echo '<h4> Array Search function</h4>';
        echo array_search("banana",$fruit);
      echo '<hr>';
    }

public function __destruct() {
		echo '*******************************************************END**************************************************************';

	}




}

?>