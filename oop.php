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

$myStr = " Welcome to php tutorial";
$obj->printLeftTrim($myStr);

$obj->printRightTrim($myStr);

$myWord ='Welcome';
$obj->printStrLen($myWord);

$obj->printStrPos($myWord);

$myMsg ="Welcome to WSD class";
$obj->printStrReplace($myMsg);

class main {
	public function __construct() {
		echo 'Hello, i\'m an Object </br>';
	}


 public function printchr($str) {
      echo '<h1> Print chr function </h1>';
      print($str);
      echo '<hr>';
    }


public function printecho($text) {
      echo '<h1> Print echo function </h1>';
      echo "$text";
      echo '<hr>';
    }

public function printexplode  ($txt) {
      echo '<h1> Print explode function </h1>';
      print_r (explode(" ",$txt));
      echo '<hr>';
    }

public function printcount($strArray)
{     echo '<h1> Print count_char function</h1>';
      print_r (count_chars($strArray,1));
      echo '<hr>';
}

public function printhtmlEntities($myUrl)
{     echo '<h1> Print html_entities function</h1>';
      print_r (htmlentities($myUrl));
      echo '<hr>';
}

public function printHtmlDecode($myVar)
{     echo '<h1> Print html_entity_decode function</h1>';
      echo html_entity_decode($myVar, ENT_QUOTES);
      echo '<hr>';
}

public function printLeftTrim($myStr)
{     echo '<h1> Print Left Trim(ltrim) function</h1>';
      echo ltrim($myStr," Welcome to ");
      echo '<hr>';
}


public function printRightTrim($myStr)
{     echo '<h1> Print Right Trim(rtrim) function</h1>';
      echo rtrim($myStr," php tutorial");
      echo '<hr>';
}


public function printStrLen($myWord)
{     echo '<h1> Print strlen function</h1>';
      print strlen($myWord);
      echo '<hr>';
}



public function printStrPos($myWord)
{     echo '<h1> Print string position function</h1>';
      print strpos($myWord, 'l');
      echo '<hr>';
}

public function printStrReplace($myMsg)
{     echo '<h1> Print substring replace function</h1>';
      print substr_replace($myMsg, "IS601" ,11);
      echo '<hr>';
}



	public function __destruct() {
		echo 'I am done';

	}

}

?>