<?php
$servername = "localhost";
$username = "root";   // default in XAMPP
$password = "";       // default is empty, unless you set one in phpMyAdmin
$dbname = "feedback1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert feedback
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $rating = $conn->real_escape_string($_POST['rating']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO feedback (name, email, rating, message, submitted_at) 
            VALUES ('$name', '$email', '$rating', '$message', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('✅ Thank you for your feedback!');
                window.location.href='feedback1.php';
              </script>";
    } else {
        echo "❌ Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>