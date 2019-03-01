<!doctype html>

<html lang="en">
  <head>
  </head>
  <body>
<?php

$answerKey = array(
  "question1" => "a",
  "question2" => "a",
  "question3" => "a",
  "question4" => "a",
  "question5" => "a"
);

foreach($_POST as $key => $val) {
  if($answerKey[$key] == $val) {
    print("$key answered correctly. <br>\n");
  } else {
    print("$key answered incorrectly. <br>\n");
  }
}
?>
  </body>
</html>
