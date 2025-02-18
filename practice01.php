<?php

/**
 * Calculate the total price of items in a shopping cart.
 *
 * @param array $items An array of items with 'price' keys.
 * @return float The total price of all items.
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * Modify a string by removing spaces and converting it to lowercase.
 *
 * @param string $text The input string.
 * @return string The modified string.
 */
function formatString(string $text): string {
    $text = str_replace(' ', '', $text);
    return strtolower($text);
}

/**
 * Check if a number is even or odd.
 *
 * @param int $number The number to check.
 * @return string Message indicating whether the number is even or odd.
 */
function checkEvenOrOdd(int $number): string {
    return ($number % 2 === 0) ? "The number $number is even.\n" : "The number $number is odd.\n";
}

// Sample Data
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice . "\n";

$string = "This is a poorly written program with little structure and readability.";
$modifiedString = formatString($string);
echo "Modified string: " . $modifiedString . "\n";

$number = 42;
echo checkEvenOrOdd($number) . "\n";

?>
