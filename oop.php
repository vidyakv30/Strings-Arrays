<?php

$obj = new main ();
$str = "Strings ".chr(38) ." Arrays";
$obj->printchr($str);

$text = "Welcome to IS601";
$obj->printecho($text);

$txt ="Good morning. How are you";
$obj->printexplode($txt);

$strArray ="A beautiful day";
$obj->printcount($strArray);

$myUrl ='<a href "https://web.njit.edu/~vk427/stringarray/oop.php">Go to this page</a>';
$obj->printhtmlEntities($myUrl);

$myVar = "Force is defined as &#039;F &#061;ma&#039;";
$obj->printHtmlDecode($myVar);

class main {
	public function __construct() {
		echo 'Hello, i\'m an Object </br>';
	}


 public function printchr($str) {
      echo '<h1> String chr function </h1>';
      print($str);
      echo '<hr>';
    }


public function printecho($text) {
      echo '<h1> String echo function </h1>';
      echo "$text";
      echo '<hr>';
    }

public function printexplode  ($txt) {
      echo '<h1> String explode function </h1>';
      print_r (explode(" ",$txt));
      echo '<hr>';
    }

public function printcount($strArray)
{     echo '<h1> String count_char function</h1>';
      print_r (count_chars($strArray,1));
      echo '<hr>';
}

public function printhtmlEntities($myUrl)
{     echo '<h1> String html_entities function</h1>';
      print_r (htmlentities($myUrl));
      echo '<hr>';
}

public function printHtmlDecode($myVar)
{     echo '<h1> String html_entity_decode function</h1>';
      echo html_entity_decode($myVar, ENT_QUOTES);
      echo '<hr>';
}



	public function __destruct() {
		echo 'I am done';

	}

}

?>