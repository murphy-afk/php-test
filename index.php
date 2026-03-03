<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>odd or even?</h2>
  <form action="index.php" method="get">
    <label for="number">Enter a number</label>
    <input type="number" name="number">
    <button type="submit">Check</button>
    <?php
    $number = $_GET['number'] ?? null;
    $result = $number % 2 == 0 ? 'even' : 'odd';
    ?>
  </form>
  <?php
    echo $number != null ? 'the number ' . $number . ' is ' . $result : 'enter a number';
  ?>
</body>

</html>