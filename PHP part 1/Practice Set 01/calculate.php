<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the values of the three sides from the form
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];

    // Calculate the semi-perimeter (s)
    $s = ($side1 + $side2 + $side3) / 2;

    // Using Heron's formula to calculate the area without sqrt
    $area = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);

    // If the area is negative or zero, it means the given sides do not form a valid triangle
    if ($area <= 0) {
        echo "<p>The given sides do not form a valid triangle.</p>";
    } else {
        // Approximate the square root using arithmetic operations
        $approx_sqrt = 0;
        $prev_approx = 0;
        $tolerance = 0.00001;

        // Iterative method to approximate square root
        while (abs($approx_sqrt - $prev_approx) > $tolerance) {
            $prev_approx = $approx_sqrt;
            $approx_sqrt = ($approx_sqrt + ($area / $approx_sqrt)) / 2;
        }

        // Calculate the area (take the square root of area)
        $area = $approx_sqrt;

        // Format and display the result
        echo "<p>The area of the triangle is: " . number_format($area, 2) . " square units.</p>";
    }
}
?>
