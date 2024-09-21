<?php
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$dbname = "use"; // Replace with your database name

// Get input from form
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];



try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM last WHERE username = :username AND email = :email AND password = :password");
    
    // Bind parameters
    $stmt->bindParam(':username', $user);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $pass);
    
    // Execute the query
    $stmt->execute();
    
    // Check if the user exists
    if($stmt->rowCount() > 0) {
        // Redirect to another page after successful login
        header("Location: ./submit.html");
        exit();
    } else {
        header("Location: ./login2.php");
    }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close connection
$conn = null;
?>