<!DOCTYPE html>
<html>
<head>
	<title>Queue Operations using PHP</title>
</head>
<body>
	<h2>Queue Operations using PHP</h2>
	<form method="post">
		<label for="element">Element:</label>
		<input type="number" id="element" name="element"><br><br>
		<input type="radio" id="insert" name="operation" value="insert">
		<label for="insert">Insert</label><br>
		<input type="radio" id="delete" name="operation" value="delete">
		<label for="delete">Delete</label><br>
		<input type="radio" id="display" name="operation" value="display">
		<label for="display">Display</label><br><br>
		<input type="submit" name="submit" value="Perform Operation">
	</form>
	<br>

	<?php
	// Queue class
	class Queue {
		private $queue;
		private $front;
		private $rear;
		private $size;

		public function __construct($size) {
			$this->queue = array();
			$this->front = 0;
			$this->rear = -1;
			$this->size = $size;
		}

		public function is_full() {
			return $this->rear == $this->size - 1;
		}

		public function is_empty() {
			return $this->front > $this->rear;
		}

		public function enqueue($element) {
			if ($this->is_full()) {
				echo "Queue is full. Cannot insert element.\n";
			} else {
				$this->rear++;
				$this->queue[$this->rear] = $element;
				echo "Element " . $element . " has been inserted into the queue.\n";
			}
		}

		public function dequeue() {
			if ($this->is_empty()) {
				echo "Queue is empty. Cannot delete element.\n";
			} else {
				$element = $this->queue[$this->front];
				$this->front++;
				echo "Element " . $element . " has been deleted from the queue.\n";
			}
		}

		public function display() {
			if ($this->is_empty()) {
				echo "Queue is empty.\n";
			} else {
				echo "Contents of the queue are:\n";
				for ($i = $this->front; $i <= $this->rear; $i++) {
					echo $this->queue[$i] . " ";
				}
				echo "\n";
			}
		}
	}

	// Create a queue object of size 5
	$queue = new Queue(5);

	// Perform the selected operation
	if (isset($_POST['submit'])) {
		$operation = $_POST['operation'];
		switch ($operation) {
			case 'insert':
				$element = $_POST['element'];
				$queue->enqueue($element);
				break;
			case 'delete':
				$queue->dequeue();
				break;
			case 'display':
				$queue->display();
				break;
			default:
				echo "Invalid operation.\n";
				break;
		}
	}
	?>
</body>
</html>
