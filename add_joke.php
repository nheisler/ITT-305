<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if(! $_SESSION['username']){
	echo "Only logged in users may access this page. Click <a href='login_form.php' here </a> to login<br>";
	exit;
}


include "db_connect.php";

$new_joke_question = $_GET["newjoke"];
$new_joke_answer = $_GET["newanswer"];

$new_joke_question = addslashes($new_joke_question);
$new_joke_answer = addslashes($new_joke_answer);
$userid = $_SESSION['userid'];


//Search the database for the word chicken
echo"<h2>Trying to add a new joke: $new_joke_question $new_joke_answer for id $userid</h2>";

$stmt = $mysqli->prepare("INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer, users_id) VALUES (NULL, ?, ?, ?)");
$stmt->bind_param("ssi", $new_joke_question, $new_joke_answer, $userid);
$stmt->execute();
$stmt->close();

include "search_all_jokes.php";

echo "<a href='index.php'>Return to main page</a>";
?> 
 