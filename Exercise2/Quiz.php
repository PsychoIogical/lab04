<?php

$question1 = $_POST["Q1"];
$question2 = $_POST["Q2"];
$question3 = $_POST["Q3"];
$question4 = $_POST["Q4"];
$question5 = $_POST["Q5"];

$score = 0;
$numCorrect = 0;

echo "<h2>Here are the answers to the Quiz.</h2><br>";

echo "<b>Question 1:</b> What... is your name?<br>";
echo "Your Answer: ";
if($question1 == "Galahad") {
  echo "Sir Galahad of Camelot<br>";
} elseif ($question1 == "Arthur") {
  $numCorrect = $numCorrect + 1;
  echo "Arthur, King of the Britons<br>";
} elseif ($question1 == "Lancelot") {
  echo "Sir Lancelot of Camelot<br>";
} else {
  echo "Sir Robin of Camelot<br>";
}
echo "Correct Answer: Arthur, King of the Britons<br><br>";

echo "<b>Question 2:</b> What... is your quest?<br>";
echo "Your Answer: ";
if($question2 == "Grail") {
  $numCorrect = $numCorrect + 1;
  echo "To seek the Holy Grail<br>";
} elseif ($question2 == "Grenade") {
  echo "To find the Holy Hand Grenade<br>";
} elseif ($question2 == "Shrub") {
  echo "To find the perfect Shrubbery<br>";
} else {
  echo "To hunt the French<br>";
}
echo "Correct Answer: To seek the Holy Grail<br><br>";

echo "<b>Question 3:</b> What... is your favorite color?<br>";
echo "Your Answer: ";
if($question3 == "red") {
  echo "Red<br>";
} elseif ($question3 == "Orange") {
  echo "Orange<br>";
} elseif ($question3 == "yellow") {
  echo "Blue. No, yellow.<br>";
} else {
  $numCorrect = $numCorrect + 1;
  echo "Blue<br>";
}
echo "Correct Answer: Blue<br><br>";

echo "<b>Question 4:</b> What... is the capitol of Assyria?<br>";
echo "Your Answer: ";
if($question4 == "idk") {
  $numCorrect = $numCorrect + 1;
  echo "I don't know that!<br>";
} elseif($question4 == "why") {
  echo "Why should I know?<br>";
} elseif($question4 == "how") {
  echo "How would I know that?1<br>";
} else {
  echo "Assur";
}
echo "Correct Answer: I don't know that!<br><br>";

echo "<b>Question 5:</b> What... is the air-speed velocity of an unladen swallow?<br>";
echo "Your Answer: ";
if($question5 == "five") {
  echo "5 feet per second<br>";
} elseif($question5 == "ten") {
  echo "10 centimeters every 3 or so seconds<br>";
} elseif($question5 == "which") {
  $numCorrect = $numCorrect + 1;
  echo "African or European?<br>";
} else {
  echo "What? How would I know??<br>>";
}
echo "Correct Answer: African or European?<br><br>";
echo "You got " . $numCorrect . " out of 5 correct.<br>";
if($numCorrect == 5) {
  echo "Perfect score! 100%<br>";
} elseif($numCorrect == 4) {
  echo "Close! 80%<br>";
} elseif($numCorrect == 3) {
  echo "Needs Work. 60%<br>";
} elseif($numCorrect == 2) {
  echo "Needs Improvement. 40%<br>";
} elseif($numCorrect == 1) {
  echo "Terrible. 20%<br>";
} else {
  echo "Your mother was a hamster, and your father smelt of elderberries! 0%<br>";
}

?>
