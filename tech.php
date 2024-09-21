<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cv=$_POST['cv'];
    $profile=$_POST['profile'];

    // Database connection using PDO
    $host = 'localhost';
    $dbname = 'EDU4ALL';
    $username = 'root';
   
    
    try {
        $conn = new PDO('mysql:host=localhost;dbname=cec319', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare the insert statement
        $stmt = $conn->prepare("INSERT INTO 1 (username, email, password,profile,cv) VALUES (:username, :email, :password, :profile ,:cv)");
        
        // Bind parameters
        $stmt->bindParam(':username', $userName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':profile', $profile);
        $stmt->bindParam(':cv', $cv);
        
        // Execute the statement
        $stmt->execute();
        
        header("Location: login.php");
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
