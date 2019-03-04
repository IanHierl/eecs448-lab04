<!doctype html>

<html lang="en">
  <head>
    <title>Exercise 2 - Quiz Results</title>
    <meta charset="utf-8">
  </head>
  <body>
<?php

$answerKey = [
  "question1" => [
    "correctAnswer" => "b",
    "text" => "Question 1: What year did the 30 Years' War start?",
    "options" => [
      "a" => "1648",
      "b" => "1618",
      "c" => "1632",
      "d" => "1608"
    ]
  ],
  "question2" => [
    "correctAnswer" => "a",
    "text" => "Question 2: What year did the Seven Years' War start?",
    "options" => [
      "a" => "1756",
      "b" => "1749",
      "c" => "1763",
      "d" => "1770"
    ]
  ],
  "question3" => [
    "correctAnswer" => "a",
    "text" => "Question 3: What year was the Magna Carta created?",
    "options" => [
      "a" => "1215",
      "b" => "1255",
      "c" => "1175",
      "d" => "1225"
    ]
  ],
  "question4" => [
    "correctAnswer" => "c",
    "text" => "Question 4: What year was the telephone invented?",
    "options" => [
      "a" => "1867",
      "b" => "1885",
      "c" => "1876",
      "d" => "1871"
    ]
  ],
  "question5" => [
    "correctAnswer" => "d",
    "text" => "Question 5: What year did the Spanish Civil War end?",
    "options" => [
      "a" => "1924",
      "b" => "1919",
      "c" => "1941",
      "d" => "1939"
    ]
  ]
];

$score = 0;
echo "<ul>\n";
foreach($_POST as $key => $val) {
  echo "<li>\n";
  $correctKey = $answerKey[$key]["correctAnswer"];
  print($answerKey[$key]["text"]);
  echo "<br>\n";
  if($correctKey == $val) {
    $score++;
  }
  print("You answered: {$answerKey[$key]["options"][$val]}.<br>\n");
  print("Correct answer: {$answerKey[$key]["options"][$correctKey]}.<br><br>\n");
  echo "</li>\n";
}
echo "<ul><br>\n";

$percent = ($score / 5) * 100;
print("Total correct: $score out of 5.<br>\n");
print("Percentage Score: $percent%.\n");
?>
  </body>
</html>
