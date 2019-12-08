<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  
  <style>
  *{
	  font-family: Arial, Helvetica, sans-serrif;
  }
  </style>
  
</head>



<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];
$keywordfromform = "%" . $keywordfromform . "%";

//Search the database for the word chicken
//echo"<h2>Show all jokes with the word $keywordfromform</h2>";
echo"<h2>SQL . $mysqli . </h2>";

$stmt = $mysqli->prepare("SELECT JokeID, Joke_question, Joke_answer, users_id, username FROM Jokes_table JOIN users ON users.id = jokes_table.users_id WHERE Joke_question LIKE ?");

$stmt->bind_param("s", $keywordfromform);

$stmt->execute();
$stmt->store_result();
$stmt->bind_result($JokeID, $Joke_question, $Joke_answer, $userid, $username);

?>

<div id="accordion">

<?php
if ($stmt->num_rows > 0) {
    // output data of each row
    while($row = $stmt->fetch()) {
		$safe_joke_question = htmlspecialchars($Joke_question);
		$safe_joke_answer = htmlspecialchars($Joke_answer);
		echo "<h3>" . $safe_joke_question . "</h3>";
		
        echo "<div><p>" . $safe_joke_answer . " --Submitted by user " . $username . "</p></div>";
	}
} else {
    echo "0 results";
}

?>

</div>
