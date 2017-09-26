<?php

$obj = new main ();
$str = "Strings ".chr(38) ." Arrays";
$obj->printchr($str);

$text = "Welcome to IS601";
$obj->printecho($text);


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



	public function __destruct() {
		echo 'I am done';

	}

}

?>