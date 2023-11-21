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

// Lấy tin tức từ cơ sở dữ liệu và hiển thị
$sql = "SELECT title, content FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị tin tức
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<p>" . $row["content"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
