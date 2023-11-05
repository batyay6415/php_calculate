<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculate</title>
</head>

<body>

<form action="./calculate.php" method="post">

<h2>Calculate your number...</h2>

<input type="number" id="num1" name="num1" required step="0.01" />

<select name="operators" id="operator">
  <option value="-">-</option>
  <option value="+">+</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select>

<br />

<input type="number" id="num2" name="num2" required step="0.01" />

<br />
<br />

<button>Sum</button>

</form>

</body>
</html>