<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $subject = $_POST['subject'];
    $videoCount = count($_FILES['videos']['name']);
    
    // Create uploads directory if it doesn't exist
    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    foreach ($_FILES['videos']['tmp_name'] as $key => $tmp_name) {
        $file_name = basename($_FILES['videos']['name'][$key]);
        $target_file = "uploads/" . $file_name;

        if (move_uploaded_file($tmp_name, $target_file)) {
            // File uploaded successfully
        }
    }

    // Return the uploaded information as JSON
    echo json_encode(['success' => true, 'username' => $username, 'subject' => $subject, 'videoCount' => $videoCount]);
    exit;
}
?>

