<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputString = $_POST['inputString'];
    $vowelCount = countVowels($inputString);
    $vowelOccurrences = getVowelOccurrences($inputString);
    echo "Total number of vowels: $vowelCount <br>";
    echo "Occurrences of each vowel: <br>";
    foreach ($vowelOccurrences as $vowel => $count) {
        echo "$vowel: $count <br>";
    }
}

function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

function getVowelOccurrences($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $occurrences = array_fill_keys($vowels, 0);
    foreach (str_split($string) as $char) {
        $lowercaseChar = strtolower($char);
        if (in_array($lowercaseChar, $vowels)) {
            $occurrences[$lowercaseChar]++;
        }
    }
    return $occurrences;
}
?>
