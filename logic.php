<?php

function randPassPhraseGen($length){
  $passphrase = ""; //an empty variable to hold the passphrase
  $words = file_get_contents('verbs.txt');  //get the contents of verb text file and put into variable
  $wordsArray = explode("\n", $words);  //create array of $words deliminated using each new line as deliminator
  for($i=0; $i < $length; $i++){
    $shuffleWordsArray = shuffle($wordsArray); //makes shuffled index of the $wordsArray note: returns a number
  $randWords .= "".$wordsArray[$shuffleWordsArray];

  }


  return $randWords;
}

function upperCase(){
  global $randPhrase;
$upper=ucfirst($randPhrase);

return $upper;
}
function addSymbol(){
  $symbol = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters
  global $randPhrase;
  $shuffleSymbol= str_shuffle($symbol); //shuffle the symbols put into a variable
  $arraySymbol= str_split($shuffleSymbol); //take variable of shuffled symbols and change to an array of chars
  $arrayPop= array_pop($arraySymbol); //take array symbol and pop off one of them put into variable

  $addSymbolPhrase= $arrayPop.$randPhrase.$upper;

  return $addSymbolPhrase;
}
function addNumber(){
  $number = '1234567890'; //numbers
  global $randPhrase;
  $shuffleNumber = str_shuffle($number);  //shuffle the numbers
  $arrayNumber = str_split($shuffleNumber); //take variable of shuffled numbers and change to an array of chars
  $arrayPop= array_pop($arrayNumber);//take array number and pop off one put in variable

  //Note: Below is an attempt to take the variable arrayrandPhrase from the index.php file and cast it as an array,
  //for whatever reason it appears to be a string because it comes up as an error.
  //then I want to add the array the array $arrayrandPhrase to the poped off number $arrayPop it does not wor
  //I even tried doing this:  $addNumberPhase=$array_push($arrayrandPhrase, "$arrayPop=array_pop($arrayNumber)");
  //bottom line is I cannot determine how or why things are being cast
  //$arrayrandPhrase = (array)$randPhrase;
  //$addNumberPhrase= array_push($arrayrandPhrase, "$arrayPop");
  $addNumberPhrase=$arrayPop.$randPhrase;

  return $addNumberPhrase;

}

?>
