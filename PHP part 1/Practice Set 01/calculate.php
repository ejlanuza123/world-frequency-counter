<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];

    // Calculate the semi-perimeter (s)
    $s = ($side1 + $side2 + $side3) / 2;

    // Calculate the area using Heron's formula without sqrt() directly
    $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);
    
    // Use approximation for square root
    $area = 0;
    $guess = $areaSquared / 2; // Initial guess
    for ($i = 0; $i < 10; $i++) {
        $guess = ($guess + ($areaSquared / $guess)) / 2; // Newton's method for approximation
    }
    
    // Format result to 2 decimal places
    $area = number_format($guess, 2);

    echo "The area of the triangle is: " . $area . " square units.";
}
?>