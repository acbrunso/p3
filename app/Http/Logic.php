<?php

namespace App\Http;

  /* file:         logic.php
     Usage:        This file is used to select a random password.
                   It allows up to 3 words to be combined, special
                   characters, and numbers to be used.
  */

  class Logic {
    //initialize vars
    private $MAX_NUM_WORDS=3;
    private $MAX_NUM_CHARS=3;
    private $MAX_NUM_NUMS=3;

  //remove special characters from strings
    static function clean($string) {
      return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
/*************************************************************************************/

    public static function process($numWords, $numNums, $numChars) {
      //read in the words from the file on a single line
      $word=file("wordList.txt");
      //convert it to a 2 dimensional array. Index [0][n] is line 1
      $result = array_map(
        function($v){
          return explode("  ", $v);
        },
        file("wordList.txt", FILE_IGNORE_NEW_LINES |FILE_SKIP_EMPTY_LINES)
      );
      //create password with selected number of words.
      $pWord="";
      for($g=0; $g < $numWords; $g++) {
        $temp = $result[0][rand(0, count($result[0]))];
        $pWord=$pWord . $temp;
      }

      //clean out any special characters that may be in the file
      $pWord=Self::clean($pWord);

      //add characters
      for($f=0; $f<$numChars; $f++) {
        $pWord=$pWord . chr(rand(33, 45));
      }
      //add numbers
      for($e=0; $e<$numNums; $e++) {
        $pWord=$pWord . rand(0, 9);
      }
      return $pWord;
    }
  }
?>
