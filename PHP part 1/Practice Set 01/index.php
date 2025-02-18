<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangle Area Calculator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Triangle Area Calculator</h1>

        <form action="calculate.php" method="post">
            <label for="side1">Side 1:</label>
            <input type="number" id="side1" name="side1" required><br><br>

            <label for="side2">Side 2:</label>
            <input type="number" id="side2" name="side2" required><br><br>

            <label for="side3">Side 3:</label>
            <input type="number" id="side3" name="side3" required><br><br>

            <input type="submit" value="Calculate Area">
        </form>
    </div>
</body>
</html>
