<?php
include '_Nav.php';
include './conn.php';

$targetDir = "uploads/"; 


if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true); 
}

if (isset($_POST['upload'])) {
    $fileName = basename($_FILES['file']['name']);
    $targetFilePath = $targetDir . $fileName;

    
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
        
        $fileNameEscaped = $conn->real_escape_string($fileName);
        $targetFilePathEscaped = $conn->real_escape_string($targetFilePath);

        
        $sql = "INSERT INTO uploads (file_name, file_path) VALUES ('$fileNameEscaped', '$targetFilePathEscaped')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('The file " . htmlspecialchars($fileName) . " has been uploaded successfully!');</script>";
            header('location:view_files.php');
        } else {
            echo "Database error: " . $conn->error;
        }

       
        $conn->close();
    } else {
        echo "There was an error uploading your file.";
    }
}
?>