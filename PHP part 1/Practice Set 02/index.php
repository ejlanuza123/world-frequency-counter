<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array of Fruits</title>
</head>
<body>
    <h1>List of Fruits</h1>
    <ol>
        <?php
        // Define an array of fruits
        $fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");

        // Loop through the array using count() to get the total number of elements
        for ($i = 0; $i < count($fruits); $i++) {
            echo "<li>" . $fruits[$i] . "</li>";
        }
        ?>
    </ol>
</body>
</html>
