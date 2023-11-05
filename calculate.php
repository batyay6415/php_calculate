<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the values from the form
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operators"];

    // Check if both numbers are set
    if (isset($num1) && isset($num2)) {
        // Perform the calculation based on the selected operator
        switch ($operator) {
            case "-":
                $result = $num1 - $num2;
                break;
            case "+":
                $result = $num1 + $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                // Check if $num2 is not zero to avoid division by zero error
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero!";
                }
                break;
            default:
                $result = "Invalid operator!";
        }
    } else {
        $result = "Please provide both numbers!";
    }
} else {
    $result = "Invalid request!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Result</title>
</head>
<body>

<h4>Result:</h4>

<?php
if (isset($num1) && isset($num2) && isset($operator) && isset($result)) {
    echo "{$num1} {$operator} {$num2} = {$result}";
} else {
    echo "Invalid input or calculation error.";
}
?>

<br />
<br/>

<a href="index.php">Go Back</a>

</body>
</html>

