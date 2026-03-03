<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <h2>guess the number</h2>
  <form action="index.php" method="get">
    <label for="number">Enter a number</label>
    <input type="number" name="number">
    <button type="submit">Check</button>
    <?php
    $number = $_GET['number'] ?? null;
    $randomNumber = rand(1, 10);
    $result = $number == $randomNumber ? 'correct' : 'wrong the number was: ' . $randomNumber;
    ?>
  </form>
  <hr>
  <p>
    <?php
    echo $number != null ? 'your guess (' . $number . ') is ' . $result : 'enter a number';
    ?>
  </p>
</body>

</html>