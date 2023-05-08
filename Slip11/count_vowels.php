<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$input_string = $_POST["input_string"];

	echo "<p>Input string: $input_string</p>";

	// function to count the total number of vowels
	function count_vowels($string) {
		$vowels = array('a', 'e', 'i', 'o', 'u');
		$count = 0;

		// count the number of vowels in the string
		for ($i = 0; $i < strlen($string); $i++) {
			if (in_array(strtolower($string[$i]), $vowels)) {
				$count++;
			}
		}

		return $count;
	}

	// show the occurrences of each vowel
	function show_vowel_occurrences($string) {
		$vowels = array('a', 'e', 'i', 'o', 'u');
		$vowel_counts = array_fill_keys($vowels, 0);

		// count the occurrences of each vowel in the string
		for ($i = 0; $i < strlen($string); $i++) {
			$char = strtolower($string[$i]);
			if (in_array($char, $vowels)) {
				$vowel_counts[$char]++;
			}
		}

		// output the occurrences of each vowel
		echo "<ul>";
		foreach ($vowel_counts as $vowel => $count) {
			if ($count > 0) {
				echo "<li>$vowel: $count</li>";
			}
		}
		echo "</ul>";
	}

	// call the functions and output the results
	$vowel_count = count_vowels($input_string);
	echo "<p>Total number of vowels: $vowel_count</p>";

	show_vowel_occurrences($input_string);
}

?>