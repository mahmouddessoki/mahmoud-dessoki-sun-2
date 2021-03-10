<?php
/**
 * function name is : getNumMatches
 * parameter : $word
 * operation : loop around array elements and calc repeat
 * return : num of matches
 */
$wordsArray = ["apple","apple","banana","book","apple","apple"];
function getNumMatches($word) 
{
    $numOfMatches = 0;
    //global $wordsArray;
    foreach ($GLOBALS['wordsArray'] as $arrWord) {
        if ($word === $arrWord) {
            $numOfMatches++;
        }
    }
    return $numOfMatches;
}



?>