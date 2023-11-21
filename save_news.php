<?php
// Kết nối đến cơ sở dữ liệu của bạn
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "sports_news";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form và thêm vào cơ sở dữ liệu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO news (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "News added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
