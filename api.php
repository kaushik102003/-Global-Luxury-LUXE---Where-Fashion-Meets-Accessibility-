<?php
include 'db.php';

header('Content-Type: application/json');

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

$posts = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
} else {
    echo json_encode(["message" => "No posts found"]);
}

echo json_encode($posts);

$conn->close();
?>
