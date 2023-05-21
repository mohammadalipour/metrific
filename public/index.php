<!DOCTYPE html>
<html lang="en">
<head>
    <title>Metrific - Sample PHP Page</title>
</head>
<body>
<?php
// PHP code starts here

// Displaying a simple message
echo "<h1>Welcome to Metrific!</h1>";

// Getting the current date and time
$currentDateTime = date("Y-m-d H:i:s");

// Displaying the current date and time
echo "<p>Current Date and Time: " . $currentDateTime . "</p>";

// Converting miles to kilometers
$miles = 10;
$kilometers = $miles * 1.60934;

// Displaying the conversion result
echo "<p>" . $miles . " miles is equal to " . $kilometers . " kilometers.</p>";

// Generating a random number between 1 and 100
$randomNumber = mt_rand(1, 100);

// Displaying the random number
echo "<p>Random Number: " . $randomNumber . "</p>";


echo "<p><a href='error.php' target='_blank'>Link to an error page</a></p>";
echo "<p><a href='http://localhost:5601/app/apm/services/metrific/overview?rangeFrom=now-15m&rangeTo=now&comparisonEnabled=true&comparisonType=day' target='_blank'>Elastic APM panel</a></p>";

// PHP code ends here
?>
</body>
</html>
