<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Array of Even Numbers</title>
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
        ul {
            text-align: left;
            list-style: none;
            padding: 0;
        }
        li {
            font-size: 18px;
            color: #333;
            padding: 8px;
            background: #e3f2fd;
            margin: 5px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Even Numbers from the Matrix</h1>
        <ul>";
        
        // Define the matrix
        $matrix = [
            [12, 23, 34],
            [45, 55, 62],
            [71, 84, 90]
        ];

        $i = 0; // Row index
        while ($i < count($matrix)) {
            $j = 0; // Column index
            while ($j < count($matrix[$i])) {
                if ($matrix[$i][$j] % 2 == 0) {
                    echo "<li>" . $matrix[$i][$j] . "</li>";
                }
                $j++;
            }
            $i++;
        }

echo "    </ul>
    </div>
</body>
</html>";
?>
