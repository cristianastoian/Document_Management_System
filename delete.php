<?php
include './conn.php';

if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    
    $sql = "SELECT file_path FROM uploads WHERE id = $fileId";
    $result = $conn->query($sql);
    $file = $result->fetch_assoc();

    if ($file) {
       
        if (unlink($file['file_path'])) {
            
            $deleteSql = "DELETE FROM uploads WHERE id = $fileId";
            $conn->query($deleteSql);
            echo "<script>alert('File deleted successfully!');</script>";
            header('location:view_files.php');

        } else {
            echo "Error deleting file.";
        }
    } else {
        echo "File not found.";
    }

   
    $conn->close();
} else {
    echo "No file ID specified.";
}
?>