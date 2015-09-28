<?php
error_reporting(0); //php code for reporting errors, warnings, and notices E_ALL for all or 0 for none
//ini_set('display_errors', 1); //display errors on page instead of log
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Paul Bertolami P2 - DWA15 Portfolio</title>
<?php require 'logic.php'; ?>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<style type="text/css">
  body{
    background-color: #909090;
    width: 60%;
    margin:auto;
    height: 100%;
  }

  h1{
    text-align: center;
    color: #000080;
    margin: auto;
    width: 60%;
    border:3px;
    padding: 10px;
  }
  .picture{
    text-align: center;
    height: 60%;
  }

  .phrase{
    text-align: left;
    margin:auto;
    width:100%;
    border:3px solid;
    padding:10px;
  }
fieldset{
  text-align: center;
  color: #000080;
  margin: auto;
  width: 100%;
  border:3px solid maroon;
  padding: 10px;
}
legend {
  padding: 0.2em 0.5em;
  border:1px solid #000080;
  color:000080;
  font-size:150%;

  }
  i{
    color: yellow;
  }
  strong{
    color: blue;
  }
  p{
    color: white;
    font-size: 20px;
  }
  </style>

</head>
<body>
<div class="container">
<h1>Paul Bertolami</h1>

<h1>Project-2 xkcd Style Password Generator</h1>
<p>An xkcd password is a phrase consisting of words easily remembered but hard to guess. My generator gives an option of up to 9 words selected randomly which you can make more difficult by adding on a special character, or a number, or capitalizing the first letter of the phrase.

<div class="picture" >
<img src=" http://imgs.xkcd.com/comics/cryptography.png" style="margin:auto;width:100%;border:3px solid;padding:10px;" alt="Comic" title="xkcd comic"/>
</div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>Please choose from below options to optimize password phrase then click send.</legend>

      <div class="fielddata">
        <input type="checkbox" name="addSymbol" data-option="addSymbol"
        id="add-symbol">
        <label for="add-symbol">Add random symbol</label>
      </div>

      <div class="fielddata">
      <input type="checkbox" name="addNumber" data-option="addNumber"
      id="add-Number">
      <label for="add-Number">Add random number</label>
      </div>

      <div class="fielddata">
      <input type="checkbox" name="upperCase" data-option="upperCase">
      <label for="upper-Case">Make first letter Uppercase</label>
      </div>

      <div class="fielddata">
        Input Number of words(1-9):<br>
        <input type="text" value="" name ="numberWords">
        </br>
       <input type="submit" name="button" value="send">
      </div>

      <!--
      <div class="fielddata">
        <input type="submit" name="button1" class="button" value="Create Password">
      </div>
    -->
  </fieldset>
</form>
<?php
global $numberWords;
global $randPhrase;
$_POST['button'];
$numberWords=intval($_POST['numberWords']);
if (empty($POST_['numberWords'])){
  $randPhrase = randPassPhraseGen($numberWords);
  //print($numberWords);
  }

?>

<h2 class="phrase"><strong>Random Phrase Generated: </strong><i><?php echo $randPhrase ?></i></h2>
<?php
global $addSymbol;
if (isset($_POST['addSymbol'])) {
  $addSymbol = addSymbol();
}
?>
<h2 class="phrase"><strong>Random Phrase Generated with a Symbol: </strong><i><?php echo $addSymbol ?></i></h2>

<?php
global $addNumber;
if (isset($_POST['addNumber'])) {
  $addNumber = addNumber();
}
?>
<h2 class="phrase"><strong>Random Phrase Generated with a Number: </strong><i><?php echo $addNumber ?></i></h2>


<?php
global $upperCase;
if (isset($_POST['upperCase'])) {
   $upperCase = upperCase();
}
?>
<h2 class="phrase"><strong>Random Phrase Generted with an Upper Case: </strong><i><?php echo $upperCase ?></i></h2>



</body>


</html>
