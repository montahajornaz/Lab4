<!DOCTYPE html>
<html>
<head>
  <title>Multiplication Table</title>
  <style>
    table { border-collapse: collapse; }
    td, th { border: 1px solid black; padding: 5px; text-align: center; }
  </style>
</head>
<body>
  <h2>Multiplication Table Generator</h2>

  <form method="post">
    <label>Enter a number:</label>
    <input type="number" name="num">
    <input type="submit" value="Generate">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $n = $_POST["num"];

      echo "<h3>Multiplication Table up to $n</h3>";
      echo "<table>";

      echo "<tr><th>*</th>";
      for ($j = 1; $j <= $n; $j++) {
        echo "<th>$j</th>";
      }
      echo "</tr>";

      for ($i = 1; $i <= $n; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $n; $j++) {
          echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
      }

      echo "</table>";
    }
  ?>
</body>
</html>
