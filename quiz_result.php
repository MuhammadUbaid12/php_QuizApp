<?php

$score = 0;
$mistake = 0;

// Correct Answer
$correctAnswers = [
    "q1" => "a",
    "q2" => "b",
    "q3" => "b",
    "q4" => "b",
    "q5" => "a"
];


// User Answers

$answers = [
    "q1" => $_POST['q1'] ?? '',
    "q2" => $_POST['q2'] ?? '',
    "q3" => $_POST['q3'] ?? '',
    "q4" => $_POST['q4'] ?? '',
    "q5" => $_POST['q5'] ?? '',
];


// Checking each answer 
foreach ($answers as $question => $userAnswer) {
    if ($userAnswer === $correctAnswers[$question]) {
        $score += 10;
    } else {
        $score -= 5;
        $mistake++;
    }
}

echo "<h2>Quiz Result</h2>";

echo "Total Score : $score <br>";
echo "Total Mistake : $mistake <br>";

// Pass and Fail

if ($score >= 50 && $mistake < 3) {
    echo "<h3 style='color:green;'>Mubarak ho tum pass hogaye!</h3>";
} else {
    echo "<h3 style='color:red;'>Afsos! tum Fail Hogye. Dobara Try Karo.</h3>";
}
