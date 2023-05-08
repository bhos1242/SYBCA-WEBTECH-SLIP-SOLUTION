<!-- Q1. Write a PHP script to display student information on web page -->

<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<body>
	<?php
		$studentName = "John Doe";
		$studentAge = 21;
		$studentMajor = "Computer Science";
		$studentGPA = 3.5;
	?>
	<h1>Student Information</h1>
	<p>Name: <?php echo $studentName; ?></p>
	<p>Age: <?php echo $studentAge; ?></p>
	<p>Major: <?php echo $studentMajor; ?></p>
	<p>GPA: <?php echo $studentGPA; ?></p>
</body>
</html>
