<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Exception - Division by Zero</title>
</head>
<body>
<?php
// PHP code starts here

try {
    $numerator = 10;
    $denominator = 0;

    if ($denominator === 0) {
        throw new Exception("Division by zero error!");
    }

    $result = $numerator / $denominator;

    echo "<p>Result: " . $result . "</p>";
} catch (Exception $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
}

// PHP code ends here
?>
</body>
</html>
