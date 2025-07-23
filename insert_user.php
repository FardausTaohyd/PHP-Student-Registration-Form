<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $age = (int) $_POST['age'];
    $email = htmlspecialchars(trim($_POST['email']));
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $gender = $_POST['gender'];
    $country = htmlspecialchars(trim($_POST['country']));
    $course = $_POST['registered_course'];
    $bio = htmlspecialchars(trim($_POST['bio']));

    if ($name && $age && $email && $password && $gender && $country && $course) {
        $stmt = $conn->prepare("INSERT INTO users (name, age, email, password, gender, country, registered_course, bio) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissssss", $name, $age, $email, $password, $gender, $country, $course, $bio);

        if ($stmt->execute()) {
            echo "✅ Registration successful! <a href='userform.php'>Back to form</a>";
        } else {
            echo "❌ Error: " . $stmt->error;
        }
    } else {
        echo "❌ All fields except bio are required.";
    }
} else {
    echo "Invalid request.";
}
?>
