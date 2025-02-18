<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array of Fruits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        .container {
            background-color: white;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            font-size: 24px;
        }

        ol {
            text-align: left;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }

        li {
            font-size: 18px;
            color: #333;
            padding: 5px 0;
        }
    </style>
</head>
<body>

    <div class="container">
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
    </div>

</body>
</html>
