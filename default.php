<!DOCTYPE html>
<html>
<head>
    <title>Times Table</title>
</head>
<body>
    <?php
    if (isset($_GET['n']) && is_numeric($_GET['n'])) {
        $n = $_GET['n'];
        echo "<h2>Times Table for $n</h2>";
        for ($i = 1; $i <= 15; $i++) {
            echo "$i x $n = " . ($i * $n) . "<br>";
        }
    } else {
        echo "Please provide a valid number 'n' in the query string.";
    }
    ?>
</body>
</html>
