<?php 

require_once("db.php");

$conn = db::getInstance();

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    $space = "&nbsp;";
    while($row = $result->fetch_assoc()) {
        echo "<h3>".$row["question"]."</h3>";
        echo str_repeat($space, 7).$row["answer1"]."<br>";
        echo str_repeat($space, 7).$row["answer2"]."<br>";
        echo str_repeat($space, 7).$row["answer3"]."<br>";
        echo str_repeat($space, 7).$row["answer4"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>