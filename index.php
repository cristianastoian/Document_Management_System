<?php include '_Nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero {
            background-color:rgb(241, 221, 223);
            color: white;
            padding: 100px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
        }
        .card {
    background-color: transparent;
    border: 2px solid #f5c6cb; 
    transition: all 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.05); 
    background-color: #f8d7da;
    color: black; 
}

    </style>
</head>
<body>
    <div class="hero">
        <h1>Hello! Manage your documents here.</h1>
        <p>A platform for efficient document storage, retrieval, and organization.</p>
        <a href="upload_form.php" class="btn btn-light btn-lg"><i class="fas fa-upload"></i> Upload File</a>
        <a href="view_files.php" class="btn btn-outline-light btn-lg"><i class="fas fa-file-alt"></i> View Uploaded Files</a>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">What you can do! (for now)</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-cloud-upload-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Uploads</h5>
                        <p class="card-text">Simplified document uploads.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-file-invoice fa-3x mb-3"></i>
                        <h5 class="card-title">Manage documents</h5>
                        <p class="card-text">Manage, update, and organize your documents at any time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card mb-4">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Secure Storage</h5>
                        <p class="card-text">Documents are securely stored and easily accessible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>
