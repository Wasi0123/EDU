
<?php
$servername = "localhost";
$username = "root";
$dbname = "use";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $cv_name = $_FILES['cv']['name'];
    $cv_tmp_name = $_FILES['cv']['tmp_name'];

    // Move uploaded file to a folder on the server
    $uploads_dir = '/Users/wasiemmanuela/Desktop/';
    move_uploaded_file($cv_tmp_name, $uploads_dir . $cv_name);

    $stmt = $conn->prepare("INSERT INTO last(full_name, username, email,password, cv) VALUES (:full_name, :username, :email,:password, :cv)");
    $stmt->bindParam(':full_name', $full_name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':cv', $cv_name);

    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>