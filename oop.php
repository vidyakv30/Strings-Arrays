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


class main {
	public function __construct() {
		echo '<h2>String Functions</h2></br>';
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

public function printexplode  ($txt) {
      echo '<h4> Print explode function </h4>';
      print_r (explode(" ",$txt));
      echo '<hr>';
    }

public function printcount($strArray)
{     echo '<h4> Print count_char function</h4>';
      print_r (count_chars($strArray,1));
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

public function printLeftTrim($myStr)
{     echo '<h4> Print Left Trim(ltrim) function</h4>';
      echo ltrim($myStr," Welcome to ");
      echo '<hr>';
}


public function printRightTrim($myStr)
{     echo '<h4> Print Right Trim(rtrim) function</h4>';
      echo rtrim($myStr," php tutorial");
      echo '<hr>';
}


public function printStrLen($myWord)
{     echo '<h4> Print strlen function</h4>';
      print strlen($myWord);
      echo '<hr>';
}



public function printStrPos($myWord)
{     echo '<h4> Print string position function</h4>';
      print strpos($myWord, 'l');
      echo '<hr>';
}

public function printStrReplace($myMsg)
{     echo '<h4> Print substring replace function</h4>';
      print substr_replace($myMsg, "IS601" ,11);
      echo '<hr>';
}


#**********************************************************Array Functions*****************************************************************************************

    public function printArrayChunk($color){
      echo '<h2>Array Functions</h2></br>';
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
		echo 'I am done';

	}




}

?>