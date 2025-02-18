<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputText = $_POST['text'];
    $sortOrder = $_POST['sort'];
    $displayLimit = intval($_POST['limit']);

    // List of common stop words to ignore
    $stopWords = ['the', 'and', 'in', 'of', 'to', 'a', 'is', 'that', 'on', 'for', 'it', 'with', 'as', 'was', 'at', 'by', 'an'];

    // Convert text to lowercase and remove punctuation
    $cleanText = strtolower($inputText);
    $cleanText = preg_replace('/[^a-z\s]/', '', $cleanText); // Keep only letters and spaces

    // Tokenize words
    $words = explode(' ', $cleanText);
    $words = array_filter($words, fn($word) => !empty($word) && !in_array($word, $stopWords)); // Remove empty & stop words

    // Count word frequency
    $wordFrequency = array_count_values($words);

    // Sort words by frequency
    if ($sortOrder === 'asc') {
        asort($wordFrequency); // Ascending
    } else {
        arsort($wordFrequency); // Descending
    }

    // Limit output
    $wordFrequency = array_slice($wordFrequency, 0, $displayLimit, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Word Frequency Results</h1>

        <?php if (!empty($wordFrequency)): ?>
            <table>
                <tr>
                    <th>Word</th>
                    <th>Frequency</th>
                </tr>
                <?php foreach ($wordFrequency as $word => $count): ?>
                    <tr>
                        <td><?= htmlspecialchars($word) ?></td>
                        <td><?= $count ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No words found or all words are stop words.</p>
        <?php endif; ?>

        <a href="index.php" class="back-button">Go Back</a>
    </div>
</body>
</html>
